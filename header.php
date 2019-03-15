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
	$classeTopo = '';
	if( !is_home() ) {
		$classeTopo = 'topo-principal--conteudo';
	} ?>
	<header class="topo-principal <?php echo $classeTopo; ?>">
		<div class="topo-principal__conteudo">
			<button class="botao-hamburguer">
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div>
	</header>