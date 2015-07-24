<?php get_header(); ?>

<div class = "botao"><a href = "#">LISTA DE PRODUTOS</a></div>
<header class = "menulateral clearfix"><?php wp_nav_menu(array('theme_location' => 'extra-menu',));?></header>

<div class = "marcadagua"><?php include('header_produtos.php') ?></div>

<div class = "bg-cardapio">
	<div class = "clearfix produto cardapio">
    <div class = "col-lg-6"><img src = "<?php bloginfo('stylesheet_directory');?>/img/_encomendas/06.jpg" alt = "" /></div>
    <div class = "col-lg-6"><img src = "<?php bloginfo('stylesheet_directory');?>/img/_encomendas/07.jpg" alt = "" /></div>
    <div class = "col-lg-6"><img src = "<?php bloginfo('stylesheet_directory');?>/img/_encomendas/08.jpg" alt = "" /></div>
    <div class = "col-lg-6"><img src = "<?php bloginfo('stylesheet_directory');?>/img/_encomendas/09.jpg" alt = "" /></div>
  </div>
</div>

<?php get_footer(); ?>