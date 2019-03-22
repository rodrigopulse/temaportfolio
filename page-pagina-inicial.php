<?php /* Template Name: Página Inicial */
    get_header();
    $templateUrl = get_bloginfo( 'template_url' );
    if( wp_is_mobile() ) {
        $thumbDestaque = $templateUrl.'/assets/imagens/topo-mobile.jpg';
    } else {
        $thumbDestaque = $templateUrl.'/assets/imagens/topo-desktop.jpg';
    }
?>
<div class="destaque parallax" style="background-image: url(<?php echo $thumbDestaque; ?>);">
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
    </div>
</div>
<div class="container-fluid bg-cor-primaria">
    <div class="row row--sessoes align-items-center">
        <div class="col-md-8 col-sm-12">
            <div class="titulo-padrao-sessao titulo-padrao-sessao--escuro">
                <h3>Serviços</h3>
                <h4>O que eu faço</h4>
            </div>
            <p>Sou o Rodrigo Godoy, Designer, Videomaker e Programador, tenho 31 anos e atualmente trabalho como Designer de Interfaces e Desenvolvimento Web na empresa Catraca Livre. Sou apaixonado por arte e ilustração, por esse motivo me dediquei a todas as formas de criar. Passei por agências de publicidade e áreas de criação dentro de empresas, desde desenhos para estampas de tênis, layout para apps e sites, editando e filmando casamentos em produtoras, fotos publicitárias em capas de revistas, animações e vídeos para comerciais e vídeos documentais.</p>
            <ul class="lista-limpa">
                <li>UX / UI e Desenvolvimento</li>
                <li>3d / Vídeo e Motion</li>
                <li>Design e Branding</li>
                <li>Social</li>
            </ul>
            <!--<a class="botao-padrao botao-padrao--branco" href="">
                <div class="botao-padrao__risca"></div>
                Saiba Mais
            </a>-->
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
                'post_type'         => 'post',
                'posts_per_page'    => -1,
                'meta_query' => array(
                            array(
                            'key' => 'featured-checkbox',
                            'value' => 'yes'
                        )
                    )
                );

            $destaque = get_posts( $args );
            foreach ( $destaque as $post ) { setup_postdata( $post );
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
            wp_reset_postdata();
        ?>
    </div>
    <div class="container wrapper-portfolio__container-botao-mais">
        <a class="botao-padrao" href="http://rodrigogodoy.com.br/portfolio">
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
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/imagens/skills/cinema-4d.png" alt="Cinema 4d">
                <h3 class="swiper-titulo">Cinema 4d</h3>
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
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/imagens/skills/zbrush.png" alt="ZBrush">
                <h3 class="swiper-titulo">ZBrush</h3>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>
<?php get_footer();?>