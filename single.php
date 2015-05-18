<?php
/**
 * The Template for displaying all single posts.
 *
 * @package palaciodopao
 */

get_header(); ?>

	<div id="content" class="site-content">

		<div class="main-content-area">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
	
			<?php while ( have_posts() ) : the_post(); ?>
	
			  <?php get_template_part( 'content', 'single' ); ?>
		
			<?php endwhile; // end of the loop. ?>
	
			</main><!-- #main -->
		</div><!-- #primary -->
		
		

<?php get_footer(); ?>