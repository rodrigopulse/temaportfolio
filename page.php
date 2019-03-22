<?php get_header(); ?>
<div class="container-fluid wrapper-paginas">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="titulo-pagina"><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
                    the_content();
                }
            } ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
