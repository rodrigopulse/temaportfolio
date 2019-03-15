<?php
    $templateUrl = get_bloginfo( 'template_url' );
    if( wp_is_mobile() ) {
        $thumbDestaque = '';
    } else {
        $thumbDestaque = $templateUrl.'/assets/imagens/topo-desktop.jpg';
    }
?>
<div class="destaque parallax" style="background-image: url(<?php echo $thumbDestaque; ?>);">
    <div class="row row--max-width">
        <div class="destaque__conteudo">
            <h1 class="destaque__titulo">
                Design e Tecnologia
            </h1>
            <h2 class="destaque__subtitulo">
                UX / UI / DESENVOLVIMENTO / 3d / VÍDEO / MOTION
            </h2>
            <h3 class="destaque__descricao">
                Tire seus projetos do papel e dê vida para eles.
            </h3>
            <a class="botao-padrao botao-padrao--branco" href="">
                <div class="botao-padrao__risca"></div>
                Saiba Mais
            </a>
        </div>
    </div>
</div>
<div class="container-fluid bg-cor-primaria">
    <div class="row row--sessoes align-items-center">
        <div class="col-md-8 col-sm-12">
            <div class="titulo-padrao-sessao titulo-padrao-sessao--escuro">
                <h3>Serviços</h3>
                <h4>O que eu faço</h4>
            </div>
            <p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Vivamus quis mi. Curabitur suscipit suscipit tellus. Aenean vulputate eleifend tellus.</p>
            <p>Donec mollis hendrerit risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Vestibulum eu odio. Sed a libero. Suspendisse pulvinar, augue ac venenatis condimentum, sem libero volutpat nibh, nec pellentesque velit pede quis nunc.</p>
            <ul class="lista-limpa">
                <li>UX / UI e Desenvolvimento</li>
                <li>3d / Vídeo e Motion</li>
                <li>Design e Branding</li>
                <li>Social</li>
            </ul>
            <a class="botao-padrao botao-padrao--branco" href="">
                <div class="botao-padrao__risca"></div>
                Saiba Mais
            </a>
        </div>
        <div class="col-md-4 col-sm-12">
            <img src="<?php bloginfo( 'template_url' ); ?>'/assets/imagens/mockup-servicos.png'" alt="Serviços">
        </div>
    </div>
</div>
<div class="container-fluid wrapper-portfolio">
    <div class="row row--sessoes">
        <div class="col-sm-12">
            <div class="titulo-padrao-sessao">
                <h3>Portfolio</h3>
                <h4>Alguns Projetos</h4>
            </div>
        </div>
    </div>
    <div class="row row--max-width">
        <?php
            $args = array(
                'posts_per_page' => 8,
                'category_name' => 'destaque-da-home' );

            $destaque = get_posts( $args );
            foreach ( $destaque as $post ) { setup_postdata( $post );
                $linkPost       = get_the_permalink();
                $thumbPost      = get_the_post_thumbnail_url( $post, 'thumb-portfolio' );
                $tituloPost     = get_the_title();
                $tagPost        = get_the_tags( $post ); ?>

                <div class="col-md-3 bloco-portfolio">
                    <a href="<?php echo $linkPost; ?>">
                        <div class="bloco-portfolio__container">
                            <div class="bloco-portfolio__hover">
                                <div class="bloco-portfolio__conteudo">
                                    <span class="bloco-portfolio__tag">#<?php echo $tagPost[0]->name; ?></span>
                                    <h3 class="bloco-portfolio__titulo"><?php echo $tituloPost; ?></h3>
                                </div>
                            </div>
                            <img src="<?php echo $thumbPost; ?>" alt="<?php echo $tituloPost; ?>">
                        </div>
                    </a>
                </div>

            <?php }
            wp_reset_postdata();
        ?>
    </div>
    <div class="container">
        <a class="botao-padrao" href="">
            <div class="botao-padrao__risca"></div>
            Mais Projetos
        </a>
    </div>
</div>
<div class="container-fluid bg-cor-primaria" style="padding-bottom: 50px;">
    <div class="row row--sessoes align-items-center">
        <div class="col-sm-12">
            <div class="titulo-padrao-sessao titulo-padrao-sessao--escuro">
                <h3>Skills</h3>
                <h4>O que eu uso</h4>
            </div>
        </div>
    </div>
    <div class="swiper-container row--max-width">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/imagens/skills/php.png" alt="PHP">
                <h3 class="swiper-titulo">PHP</h3>
            </div>
            <div class="swiper-slide">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/imagens/skills/javascript.png" alt="JavaScript">
                <h3 class="swiper-titulo">Java Script</h3>
            </div>
            <div class="swiper-slide">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/imagens/skills/css.png" alt="CSS">
                <h3 class="swiper-titulo">CSS</h3>
            </div>
            <div class="swiper-slide">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/imagens/skills/wordpress.png" alt="Wordpress">
                <h3 class="swiper-titulo">Wordpress</h3>
            </div>
            <div class="swiper-slide">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/imagens/skills/git.png" alt="Git">
                <h3 class="swiper-titulo">Git</h3>
            </div>
            <div class="swiper-slide">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/imagens/skills/photoshop.png" alt="Photoshop">
                <h3 class="swiper-titulo">Photoshop</h3>
            </div>
            <div class="swiper-slide">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/imagens/skills/illustrator.png" alt="Illustrator">
                <h3 class="swiper-titulo">Illustrator</h3>
            </div>
            <div class="swiper-slide">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/imagens/skills/after-effects.png" alt="After Effects">
                <h3 class="swiper-titulo">After Effects</h3>
            </div>
            <div class="swiper-slide">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/imagens/skills/premiere.png" alt="Premiere">
                <h3 class="swiper-titulo">Premiere</h3>
            </div>
            <div class="swiper-slide">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/imagens/skills/cinema-4d.png" alt="Cinema 4d">
                <h3 class="swiper-titulo">Cinema 4d</h3>
            </div>
            <div class="swiper-slide">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/imagens/skills/zbrush.png" alt="ZBrush">
                <h3 class="swiper-titulo">ZBrush</h3>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>