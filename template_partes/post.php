<div class="container-fluid container-post">
    <?php
    if ( have_posts() ) {
        while ( have_posts() ) { the_post();?>
            <div class="container-titulo-post">
                <h1 class="titulo-do-post"><?php echo get_the_title(); ?></h1>
                <h2 class="subtitulo-do-post"><?php echo get_the_excerpt(); ?></h2>
            </div>
            <article class="post-content">
                <?php the_content(); ?>
            </article>
        <?php }
    } else {
        echo 'Nada encontrado aqui';
    } ?>
</div>


