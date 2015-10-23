<article id = "post-<?php the_ID(); ?>" class = "clearfix">

	<div class = "hidden-md hidden-lg cultural-img-m">

		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
		<img src = "<?php echo $url; ?>" />
	
	</div>

	<div class = "col-sm-12 blog-box">
	
		<div class = "cultural-img hidden-xs hidden-sm">

			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
			<img src = "<?php echo $url; ?>" />

		</div>

		<div class = "cultural-excerpt">

			<h1><?php the_title(); ?></h1>
			<p><?php the_content() ?></p>
		
			<!-- <a class = "btn btn-default" href = "http://www.caproducoes.com.br" target = "_blank" style = "margin-top: 15px">mais informações</a> -->

		</div>

	</div>

</article>