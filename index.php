<?php
get_header();
?>

<div class="container row hidden-xs">
	<?php echo do_shortcode("[metaslider id=50]"); ?>
</div>

<div class="container row visible-xs-block">
	<?php echo do_shortcode("[metaslider id=144]"); ?>
</div>

<div class="container row">
	<div class="clearfix postagem-index" style="background-color: #EFEEEA !important; height: auto">
	<?php
	if (have_posts()) :
			$aRecentPosts = new WP_Query("showposts=2"); // 2 é o número de posts recentes
			while($aRecentPosts->have_posts()) : $aRecentPosts->the_post();
		?>
		<div>
			<?php
			/* chamar conteudo-___.php*/
			get_template_part( 'content-index', get_post_format()); ?>
		</div>
			<?php endwhile;
				else :
					echo '';
				endif;
			?>

	</div>
</div>

<!-- CHAMADA PODUTOS -->
<div>
	<div class="container row" style="text-align: center">
		<a href="../palaciodopao/produtos/">
		<div style="width: 250px; margin: 0 auto">
			<div id="produtos-frase">
				<p>CONHEÇA<br>NOSSOS<br>PRODUTOS</p>
			</div>
		</div>
		</a>

		<div id="produtos" class="col-lg-3 col-md-4 col-sm-6 col-xs-6" style="background-image: url(<?php bloginfo('stylesheet_directory');?>/img/paes.jpg);"></div>
		<div id="produtos" class="col-lg-3 col-md-4 col-sm-6 col-xs-6" style="background-image: url(<?php bloginfo('stylesheet_directory');?>/img/cafemanha.jpg);"></div>
		<div id="produtos" class="col-lg-3 col-md-4  hidden-sm hidden-xs" style="background-image: url(<?php bloginfo('stylesheet_directory');?>/img/bolo.jpg);"></div>
		<div id="produtos" class="col-lg-3 hidden-md hidden-sm hidden-xs" style="background-image: url(<?php bloginfo('stylesheet_directory');?>/img/torta.jpg);"></div>
		<div id="produtos" class="col-lg-3 col-md-4 col-sm-6 col-xs-6" style="background-image: url(<?php bloginfo('stylesheet_directory');?>/img/pizza.jpg);"></div>
		<div id="produtos" class="col-lg-3 col-md-4 col-sm-6 col-xs-6" style="background-image: url(<?php bloginfo('stylesheet_directory');?>/img/massa.jpg);"></div>
		<div id="produtos" class="col-lg-3 col-md-4  hidden-sm hidden-xs" style="background-image: url(<?php bloginfo('stylesheet_directory');?>/img/almoco.jpg);"></div>
		<div id="produtos" class="col-lg-3 hidden-md hidden-sm hidden-xs" style="background-image: url(<?php bloginfo('stylesheet_directory');?>/img/doce.jpg);"></div>
	</div>
</div> <!-- /CHAMADA PODUTOS -->

<?php
get_footer();

?>