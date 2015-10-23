<?php
	
	$pageId = 8;
	$args = array(
			'posts_per_page'	=> 8,
			'post_type' 		=> 'page',
			'post_parent' 		=>	$pageId,
			'orderby'			=> 'post_date',
			'order'				=> 'DESC',
			'post_status'		=> 'publish'
	);
	$temp = $wp_query;  // assign orginal query to temp variable for later use
	$wp_query = null;
	$wp_query = new WP_Query($args);
	if( have_posts() ) :
	while ($wp_query->have_posts()) : $wp_query->the_post();

?>

	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	<a class = "products-thumb col-xs-6 col-md-4 col-lg-3" style = "background:url('<?php echo $url; ?>') no-repeat" href = "<?php the_permalink(); ?>" rel = "bookmark"></a>

<?php
	endwhile;
	else :
		echo '';
		endif;
	?>