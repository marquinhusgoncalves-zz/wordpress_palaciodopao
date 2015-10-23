<?php
/**
* The template name: Dicas
*
* @package palaciodopao
*
*/
get_header(); ?>

<h1 class = "title">confira nossas dicas</h1>

<section id = "containerScroll" class = "clearfix blog">


	<?php
		// Define custom query parameters
		$custom_query_args = array( 
			'orderby'			=> 'post_date',
			'order'				=> 'DESC',
			'post_status'		=> 'publish',
			‘paged’ 			=> $paged
		);

		// Get current page and append to custom query parameters array
		$custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

		// Instantiate custom query
		$custom_query = new WP_Query( $custom_query_args );

		// Pagination fix
		$temp_query = $wp_query;
		$wp_query   = NULL;
		$wp_query   = $custom_query;

		// Output custom query loop
		if ( $custom_query->have_posts() ) :
		    while ( $custom_query->have_posts() ) :
		        $custom_query->the_post();
		        
		        // Loop output goes here
		    	get_template_part( 'content-dicas', get_post_format() );

		    endwhile;
		endif;
		// Reset postdata
		wp_reset_postdata();

		?>
	
		<div class = "col-xs-12" style = "padding: 0; float: none">
			<?php
				// Custom query loop pagination
				the_posts_pagination( array(
					'prev_text'          => __( 'Anterior' ),
					'next_text'          => __( 'Próxima', $custom_query->max_num_pages )
				) );
			?>
		</div>

		<?php
		// Reset main query object
		$wp_query = NULL;
		$wp_query = $temp_query;

		?>

</section>

	<?php get_sidebar(); ?>

		<div class = "col-xs-12" style = "padding: 0; float: none">
			<?php
				// the_posts_pagination( array(
				// 	'prev_text'          => __( 'Previous page' ),
				// 	'next_text'          => __( 'Next page' ),
				// 	// 'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Página' ) . ' </span>',
				// ) );
			?>
		</div>

<?php get_footer(); ?>