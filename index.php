<?php get_header(); ?>

<div class = "hidden-xs"><?php echo do_shortcode("[metaslider id=50]"); ?></div>
<div class = "visible-xs-block"><?php echo do_shortcode("[metaslider id=144]"); ?></div>

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

<?php include("produtos.php"); ?>

<?php get_footer(); ?>