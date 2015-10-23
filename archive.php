<?php
/**
* @package palaciodopao
*
*/
get_header(); ?>

<h1 class = "title">arquivo</h1>

<section id = "containerScroll" class = "clearfix blog">

	<?php

		if( have_posts() ) :
		while ( have_posts() ) : the_post();

		get_template_part( 'content-dicas', get_post_format() );

		?>

		<?php endwhile;
		else :
			echo '';
			endif;
			?>

</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>