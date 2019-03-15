<?php
/*
 * Remove &nbsp dos posts;
*/
function remove_empty_lines( $content ){
    $content = preg_replace("/&nbsp;/", "", $content);
    return $content;
}
add_action('content_save_pre', 'remove_empty_lines');

/**
 * Thumbnails no wordpress
 */
add_theme_support( 'post-thumbnails' );
/**
 * Tamanhos das imagens para thumbs
 */
add_image_size( 'thumb-portfolio', 420, 420, true );

/**
 * Habilita o Title no wordpress
 */
add_theme_support( 'title-tag' );
/**
 * Remove scripts e estilos nativos do wordpress
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

/**
 * Adiciona os estilos e scripts do tema
 */
function add_estilos_e_scripts() {
    // Estilos
    wp_enqueue_style( 'swipercss', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.0/css/swiper.min.css');
	wp_enqueue_style( 'css', get_template_directory_uri() . '/style.css');
	
	// Fontes
	wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Montserrat:500|Roboto:400,700');
	
	// Scripts
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.3.1.min.js', array(), '3.3.1', true );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'swiperjs', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.0/js/swiper.min.js', array(), '', true );
    if(is_home()) {
        // Parallax
        wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/js/parallax.js', array(), '', true );
    }
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/scripts.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'add_estilos_e_scripts' );

/**
 * Adiciona div responsiva para oEmbeds
 */
function responsive_embed_html( $html, $url ) {
    if ( preg_match( '/youtube.com/', $url ) || preg_match( '/vimeo.com/', $url ) ) {
        return '<div class="video-container">' . $html . '</div>';
    } else {
        return $html;
    }
}

add_filter( 'embed_oembed_html', 'responsive_embed_html', 10, 3 );
add_filter( 'video_embed_html', 'responsive_embed_html' );

/**
 * Remove o meta generator do Wordpress
 */
remove_action('wp_head', 'wp_generator');

/**
 * Posições de Menu
 */
function register_my_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

/**
 * Ajustes do admin bar
 */
add_action('wp_footer', 'preferencias_admin_bar');
function preferencias_admin_bar() {
    $op = '
    <style type="text/css">
        html {margin-top: 0px !important;}
        @media (max-width: 400px) {
            html {margin-top: 0 !important;}
            #wpadminbar {top: 0}
        }
    </style> ';
    echo $op;
}

/*
 * Adds a Featured Post meta box to the post editing screen
 */
function blog_featured_meta() {
    add_meta_box( 'blog_meta', __( 'Destaque na Home', 'blog-textdomain' ), 'blog_meta_callback', 'post', 'side', 'high' );
}
add_action( 'add_meta_boxes', 'blog_featured_meta' );
/**
 * Outputs the content of the meta box
 */
function blog_meta_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'blog_nonce' );
    $blog_stored_meta = get_post_meta( $post->ID );
    ?>
 <p>
    <span class="blog-row-title">Adicionar esse post nos destaques de portfolio na home?</span>
    <div class="blog-row-content">
        <label for="featured-checkbox">
            <input type="checkbox" name="featured-checkbox" id="featured-checkbox" value="yes" <?php if ( isset ( $blog_stored_meta['featured-checkbox'] ) ) checked( $blog_stored_meta['featured-checkbox'][0], 'yes' ); ?> />
            Adicionar
        </label>
    </div>
</p>

<?php
}

/**
 * Saves the custom meta input
 */
function blog_meta_save( $post_id ) {

    // Checks save status - overcome autosave, etc.
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'blog_nonce' ] ) && wp_verify_nonce( $_POST[ 'blog_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';

    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }

// Checks for input and saves - save checked as yes and unchecked at no
if( isset( $_POST[ 'featured-checkbox' ] ) ) {
    update_post_meta( $post_id, 'featured-checkbox', 'yes' );
} else {
    update_post_meta( $post_id, 'featured-checkbox', 'no' );
}

}
add_action( 'save_post', 'blog_meta_save' );


