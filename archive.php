<?php
/**
 * The template for displaying Archive pages.
 * @package palaciodopao
 */

get_header(); ?>

<div id="content" class="container site-content">

	<div class="main-content-area">

	<section id="primary" class="row content-area">
		<main id="main" class="site-main" role="main">
			<?php if ( have_posts() ) : ?>
	
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
	
					<?php
						get_template_part( 'content-dicas', get_post_format() );
					?>
	
				<?php endwhile; ?>
	
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			  
			<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->
	
	</div>

</div>

<div class="row container">
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>