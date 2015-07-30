<?php get_header(); ?>

	<div id = "carousel-index" class = "carousel slide" data-ride = "carousel" style = "height: auto">
	  <!-- Indicators -->
	  <ol class = "carousel-indicators">
		<li data-target = "#carousel-index" data-slide-to = "0" class = "active"></li>
		<li data-target = "#carousel-index" data-slide-to = "1"></li>
		<li data-target = "#carousel-index" data-slide-to = "2"></li>
		<li data-target = "#carousel-index" data-slide-to = "3"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class = "carousel-inner" role = "listbox">
		<div class = "item active">
		  <a href = "../palaciodopao/broaportuguesa/"><img src = "<?php bloginfo('stylesheet_directory');?>/img/_banner/broaportuga.jpg" alt = "Broa Portuguesa"></a>
		</div>

		<div class = "item">
		  <img src = "<?php bloginfo('stylesheet_directory');?>/img/_banner/paobaby.jpg" alt = "Pão Baby">
		</div>

		<div class = "item">
		  <img src = "<?php bloginfo('stylesheet_directory');?>/img/_banner/03.jpg" alt = "Pastel de Belém">
		</div>

		<div class = "item">
		  <img src = "<?php bloginfo('stylesheet_directory');?>/img/_banner/04.jpg" alt = "Pizzas">
		</div>

	  </div>
	</div>

	<div class = "clearfix postagem-index" style = "background-color: #EFEEEA !important; height: auto">
	<?php
	if (have_posts()) :
		  $aRecentPosts = new WP_Query("showposts=2");
		  while($aRecentPosts->have_posts()) : $aRecentPosts->the_post();
		?>
		<div>
		  <?php
		  get_template_part( 'content-index', get_post_format()); ?>
		</div>
		  <?php endwhile;
			else :
			  echo '';
			endif;
		  ?>
	</div>

	<img class = "col-xs-12 hidden-xs" src = "<?php bloginfo('stylesheet_directory');?>/img/_banner/banner_site_institucional.jpg" alt = "fiorino e caixas novas" style = "padding: 0">
	<img class = "col-xs-12 visible-xs-block" src = "<?php bloginfo('stylesheet_directory');?>/img/_banner/banner_site_institucional_fiorino.jpg" alt = "fiorinos" style = "padding: 0">
	<img class = "col-xs-12 visible-xs-block" src = "<?php bloginfo('stylesheet_directory');?>/img/_banner/banner_site_institucional_caixas.jpg" alt = "caixas" style = "padding: 0">

	<a href = "../palaciodopao/produtos/sobremesa/"><img class = "col-xs-12" src = "<?php bloginfo('stylesheet_directory');?>/img/_banner/sobremesas.jpg" alt = "sobremesas" style = "padding: 0"></a>

	<?php include("produtos.php"); ?>

<?php get_footer(); ?>