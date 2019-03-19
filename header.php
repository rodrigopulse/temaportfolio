<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo( 'template_url' ); ?>/assets/imagens/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo( 'template_url' ); ?>/assets/imagens/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo( 'template_url' ); ?>/assets/imagens/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo( 'template_url' ); ?>/site.webmanifest">
	<link rel="mask-icon" href="<?php bloginfo( 'template_url' ); ?>/assets/imagens/safari-pinned-tab.svg" color="#333333">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#333333">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php
	$enderecoSite = get_site_url();
	$classeTopo = '';
	if( !is_page_template( 'page-pagina-inicial.php' ) ) {
		$classeTopo = 'topo-principal--conteudo';
	} ?>
	<header class="topo-principal <?php echo $classeTopo; ?>">
		<div class="topo-principal__container">
			<button class="botao-hamburguer js-abrir-menu">
				<span></span>
				<span></span>
				<span></span>
			</button>
			<a href="<?php echo $enderecoSite; ?>" class="titulo-site">
				Rodrigo Godoy
			</a>
		</div>
		<nav class="menu">
			<button class="botao-fechar js-fechar-menu">
				<span></span>
				<span></span>
			</button>
			<?php wp_nav_menu( array(
				'theme_location' 	=> 'header-menu',
				'container'			=> 'ul',
				'menu_id'			=> 'menu-lista',
				'menu_class'		=> 'menu-lista'
			) ); ?>
		</nav>
	</header>