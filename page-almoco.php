<?php get_header(); ?>

<div id = "btn-products"><a href = "#">lista de produtos</a></div>
<header class = "menulateral clearfix"><?php wp_nav_menu(array('theme_location' => 'products',));?></header>

<div class = "marcadagua"><?php include('header_produtos.php') ?></div>
<div class = "info-pizza"><p>Buffet de Almoço por Kg, todos os dias.</p></div>

<div class = "bg-cardapio">
	<div class = "clearfix cardapio">
		<div class = "col-lg-6 col-lg-offset-3"><img src = "<?php bloginfo('stylesheet_directory');?>/img/_cardapio/almoco.jpg" alt = "almoço" /></div>
	</div>
</div>

<?php get_footer(); ?>

<script src = "<?php bloginfo('stylesheet_directory');?>/js/menulateral.js"></script>