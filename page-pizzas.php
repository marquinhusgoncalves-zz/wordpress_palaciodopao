<?php get_header(); ?>

<div id = "btn-products"><a href = "#">lista de produtos</a></div>
<header class = "menulateral clearfix"><?php wp_nav_menu(array('theme_location' => 'products',));?></header>

<div class = "marcadagua"><?php include('header_produtos.php') ?></div>
<div class = "info-pizza"><p>o horário de início da comercialização das pizzas é a partir das 15h</p></div>

<div class = "bg-cardapio">
	<div class = "clearfix cardapio">
		<div class = "col-lg-6"><img src = "<?php bloginfo('stylesheet_directory');?>/img/_cardapio/pizza01.jpg" alt = "pizzas" /></div>
		<div class = "col-lg-6"><img src = "<?php bloginfo('stylesheet_directory');?>/img/_cardapio/pizza02.jpg" alt = "pizzas" /></div>
		<div class = "col-lg-6"><img src = "<?php bloginfo('stylesheet_directory');?>/img/_cardapio/pizza03.jpg" alt = "pizzas" /></div>
		<div class = "col-lg-6"><img src = "<?php bloginfo('stylesheet_directory');?>/img/_cardapio/pizza04.jpg" alt = "pizzas" /></div>
	</div>
</div>

<?php get_footer(); ?>

<script src = "<?php bloginfo('stylesheet_directory');?>/js/menulateral.js"></script>