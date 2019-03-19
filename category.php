<?php get_header(); ?>
<div class="container-fluid wrapper-portfolio">
    <div class="row row--sessoes">
        <div class="col-sm-12">
            <div class="titulo-padrao-sessao">
                <?php $categoria = get_the_category(); ?>
                <h3>Portfolio</h3>
                <h4><?php echo $categoria[0]->name; ?></h4>
            </div>
        </div>
    </div>
    <div class="row row--max-width">
            <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                   the_post();
                   $linkPost       = get_the_permalink();
                    $thumbPost      = get_the_post_thumbnail_url( $post, 'thumb-portfolio' );
                    $tituloPost     = get_the_title();
                    $tagPost        = get_the_tags( $post );
                    $categoriaPost  = get_the_category( $post ); ?>
                    <div class="col-md-3 bloco-portfolio">
                        <a href="<?php echo $linkPost; ?>">
                            <div class="bloco-portfolio__container">
                                <img src="<?php echo $thumbPost; ?>" alt="<?php echo $tituloPost; ?>">
                                <div class="bloco-portfolio__hover">
                                    <div class="bloco-portfolio__conteudo">
                                        <span class="bloco-portfolio__tag">#<?php echo $categoriaPost[0]->name; ?></span>
                                        <h3 class="bloco-portfolio__titulo"><?php echo $tituloPost; ?></h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php }
            } ?>
    </div>
</div>
<?php get_footer(); ?>
