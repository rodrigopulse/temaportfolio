<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#222222">
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