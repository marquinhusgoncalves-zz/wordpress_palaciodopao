<div class = "post-index clearfix">

<?php

	$args = array(
			'posts_per_page'	=> 2,
			'orderby'			=> 'post_date',
			'order'				=> 'DESC',
			'post_status'		=> 'publish'
	);
	$temp = $wp_query;  // assign orginal query to temp variable for later use
	$wp_query = null;
	$wp_query = new WP_Query($args);
	if( have_posts() ) : 
	while ($wp_query->have_posts()) : $wp_query->the_post();
	
	get_template_part( 'content-index', get_post_format() );

	endwhile;
	else :
		echo '';
		endif;
	?>

</div>