<?php get_header(); ?>

<div class = "botao"><a href = "#">LISTA DE PRODUTOS</a></div>
<header class = "menulateral clearfix"><?php wp_nav_menu(array('theme_location' => 'extra-menu',));?></header>

<div class = "marcadagua"><?php include('header_produtos.php') ?></div>

<div class = "bg-cardapio">
	<div class = "clearfix produto cardapio">
		<div class = "col-lg-6 col-lg-offset-3 hidden-xs"><img src = "<?php bloginfo('stylesheet_directory');?>/img/_copa/05.jpg" alt = "" /></div>
	</div>
</div>

<?php get_footer(); ?>