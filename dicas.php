<?php
/**
* The template name: Dicas
*
* @package palaciodopao
*
*/
get_header(); ?>

<h1 class = "title">confira nossas dicas</h1>

<section id = "container" class = "clearfix blog">

		<?php if ( have_posts() ) : ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

			get_template_part( 'content-dicas', get_post_format() );

		?>

		<?php endwhile;
		else :
			echo '';
			endif;
			?>

</section>

	<div class = "col-xs-12" style = "padding: 0; float: none">
		<?php
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page' ),
				'next_text'          => __( 'Next page' ),
				// 'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Página' ) . ' </span>',
			) );
		?>
	</div>

	<?php get_sidebar(); ?>


<?php get_footer(); ?>