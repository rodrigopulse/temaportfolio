<?php
    $templateUrl = get_bloginfo( 'template_url' );
    if( wp_is_mobile() ) {
        $thumbDestaque = '';
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
        <a class="botao-padrao botao-padrao--branco" href="">
            <div class="botao-padrao__risca"></div>
            Saiba Mais
        </a>
    </div>
</div>
<div class="container-fluid bg-cor-primaria">
    <div class="row row--sessoes">
        <div class="col-md-8 col-sm-12">
            teste
        </div>
        <div class="col-md-4 col-sm-12">
            teste
        </div>
        <img src="<?php echo $thumbDestaque; ?>" alt="">
    </div>
</div>