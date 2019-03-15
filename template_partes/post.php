<div class="container-fluid container-post">
    <?php
    if ( have_posts() ) {
        while ( have_posts() ) { the_post();?>
            <h1 class="titulo-do-post"><?php echo get_the_title(); ?></h1>
            <article>
                <?php the_content(); ?>
            </article>
        <?php }
    } else {
        echo 'Nada encontrado aqui';
    } ?>
</div>


