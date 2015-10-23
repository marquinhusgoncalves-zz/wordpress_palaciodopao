<?php get_header(); ?>

<div id = "btn-products"><a href = "#">lista de produtos</a></div>
<header class = "menulateral clearfix"><?php wp_nav_menu(array('theme_location' => 'products',));?></header>

<div class = "marcadagua"><?php include('header_produtos_24h.php') ?></div>

<div class = "bg-cardapio">
	<div class = "clearfix cardapio">
		<div class = "col-lg-6"><img src = "<?php bloginfo('stylesheet_directory');?>/img/_cardapio/lanche-metro01.jpg" alt = "lanche de metro" /></div>
		<div class = "col-lg-6"><img src = "<?php bloginfo('stylesheet_directory');?>/img/_cardapio/lanche-metro02.jpg" alt = "lanche de metro" /></div>
	</div>
</div>

<?php get_footer(); ?>

<script src = "<?php bloginfo('stylesheet_directory');?>/js/menulateral.js"></script>