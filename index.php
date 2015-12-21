<?php get_header(); ?>
	<?php include('carousel-index.php'); ?>
	<?php include('post-index.php'); ?>
	<div class = "clearfix banner-institucional">
			<img class = "col-xs-12 hidden-xs" src = "<?php bloginfo('stylesheet_directory');?>/img/_banner/institucional.jpg" alt = "fiorino e caixas novas">
			<img class = "col-xs-12 visible-xs-block" src = "<?php bloginfo('stylesheet_directory');?>/img/_banner/institucional_fiorino.jpg" alt = "fiorinos">
			<img class = "col-xs-12 visible-xs-block" src = "<?php bloginfo('stylesheet_directory');?>/img/_banner/institucional_caixas.jpg" alt = "caixas">
			<a href = "<?php get_site_url(); ?>/produtos/sobremesa/">
				<img class = "col-xs-12" src = "<?php bloginfo('stylesheet_directory');?>/img/_banner/sobremesas.jpg" alt = "sobremesas">
			</a>
	</div>
	<div id = "produtos-index">
		<div id = "pop-produtos">
			<a href = "<?php get_site_url(); ?>/produtos/"><span>conheça nossos produtos</span></a>
		</div>

		<?php include('produtos-index.php'); ?>
	</div>
<?php get_footer(); ?>