<?php
/**
* The template name: Dicas
*
* @package palaciodopao
*
*/
get_header(); ?>

<h1 class = "title">confira nossa agenda cultural</h1>

<section id = "containerScroll" class = "clearfix blog">

	<?php
		// Define custom query parameters
		$custom_query_args = array(
			'posts_per_page'	=> -1,
			'post_type'			=> 'jetpack-portfolio',
			'order'				=> 'ASC',
			'orderby'			=> 'date',
			'post_status'		=> 'publish',
			‘paged’ 			=> $paged
		);

		//'jetpack-portfolio-tag&tag_ID=2&post_type=jetpack-portfolio'

		// Get current page and append to custom query parameters array
		//$custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

		// Instantiate custom query
		$custom_query = new WP_Query( $custom_query_args );

		// Pagination fix
		$temp_query = $wp_query;
		$wp_query   = NULL;
		$wp_query   = $custom_query;

		// Output custom query loop
		if ( $custom_query->have_posts() ) :
			while ( $custom_query->have_posts() ) :	$custom_query->the_post();
				
				// Loop output goes here
				get_template_part( 'content-cultural', get_post_format() );

			endwhile;
		endif;
		// Reset postdata
		wp_reset_postdata();

		// Reset main query object
		$wp_query = NULL;
		$wp_query = $temp_query;

		?>

</section>

<?php get_footer(); ?>

<script>

	$('.cultural-excerpt a').addClass('btn').text('Mais informações').attr('target', '_blank');

</script>
