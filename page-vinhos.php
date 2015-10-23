<?php get_header(); ?>

<div id = "btn-products"><a href = "#">lista de produtos</a></div>
<header class = "menulateral clearfix"><?php wp_nav_menu(array('theme_location' => 'products',));?></header>

<div class = "marcadagua"><?php include('header_produtos.php') ?></div>

<div class = "bg-cardapio">
	<div class = "clearfix cardapio">
		<div class = "col-lg-6"><img src = "<?php bloginfo('stylesheet_directory');?>/img/_cardapio/vinhos01.jpg" alt = "vinhos" /></div>
		<div class = "col-lg-6"><img src = "<?php bloginfo('stylesheet_directory');?>/img/_cardapio/vinhos02.jpg" alt = "vinhos" /></div>
		<div class = "col-lg-6"><img src = "<?php bloginfo('stylesheet_directory');?>/img/_cardapio/vinhos03.jpg" alt = "vinhos" /></div>
		<div class = "col-lg-6"><img src = "<?php bloginfo('stylesheet_directory');?>/img/_cardapio/vinhos04.jpg" alt = "vinhos" /></div>
		<div class = "col-lg-6"><img src = "<?php bloginfo('stylesheet_directory');?>/img/_cardapio/vinhos05.jpg" alt = "vinhos" /></div>
		<div class = "col-lg-6"><img src = "<?php bloginfo('stylesheet_directory');?>/img/_cardapio/vinhos06.jpg" alt = "vinhos" /></div>
		<div class = "col-lg-6"><img src = "<?php bloginfo('stylesheet_directory');?>/img/_cardapio/vinhos07.jpg" alt = "vinhos" /></div>
		<div class = "col-lg-6"><img src = "<?php bloginfo('stylesheet_directory');?>/img/_cardapio/vinhos08.jpg" alt = "vinhos" /></div>
		<div class = "col-lg-6"><img src = "<?php bloginfo('stylesheet_directory');?>/img/_cardapio/vinhos09.jpg" alt = "vinhos" /></div>
		<div class = "col-lg-6"><img src = "<?php bloginfo('stylesheet_directory');?>/img/_cardapio/vinhos10.jpg" alt = "vinhos" /></div>
		<div class = "col-lg-6"><img src = "<?php bloginfo('stylesheet_directory');?>/img/_cardapio/vinhos11.jpg" alt = "vinhos" /></div>
	</div>
</div>

<?php get_footer(); ?>

<script src = "<?php bloginfo('stylesheet_directory');?>/js/menulateral.js"></script>