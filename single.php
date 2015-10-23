<?php
/**
 * The Template for displaying all single posts.
 *
 * @package palaciodopao
 */

get_header(); ?>

	<div class = "col-lg-8 content-post">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

		get_template_part( 'content', get_post_format() );

		// End the loop.
		endwhile;
		?>

		<div class = "hidden-lg pagination-mobile" style = "padding: 0">
			<?php
			// Previous/next post navigation.
			the_post_navigation( array(
				'prev_text' => __('Anterior: ') . '<span class="post-title">%title</span>',
				'next_text' => __('Próximo: ') . '<span class="post-title">%title</span>',
				) );
				?>
		</div>

	</div>

	<div class = "col-lg-4" style = "padding: 0">
		<?php get_sidebar(); ?>
	</div>

	<div class = "col-xs-12 col-lg-8 hidden-xs hidden-sm hidden-md" style = "padding: 0">
		<?php
		// Previous/next post navigation.
		the_post_navigation( array(
			'prev_text' => __('Próximo: ') . '<span class="post-title">%title</span>',
			'next_text' => __('Anterior: ') . '<span class="post-title">%title</span>',
			) );
			?>
	</div>

	<?php get_footer(); ?>
