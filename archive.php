<?php
/**
 * @package palaciodopao
 */

get_header(); ?>

<div id = "content" class = "site-content">

  <div class = "main-content-area">
	<section id = "primary" class = "content-area">
	  <main class = "site-main" role = "main">
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
	  </main>
	</section>
  </div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>