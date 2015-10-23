<article id = "post-<?php the_ID(); ?>" class = "clearfix">

	<div class = "hidden-sm hidden-md hidden-lg blog-thumb-m">

		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
		<div class = "thumb" style = "background:url('<?php echo $url; ?>') no-repeat"></div>
	
	</div>

	<div class = "col-sm-12 blog-box">
	
		<div class = "blog-thumb hidden-xs">
			<div class = "arrow_right"></div>
			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
			<div class = "thumb" style = "background:url('<?php echo $url; ?>') no-repeat"></div>
		</div>

		<div class = "blog-excerpt">
			<?php the_time('j F, Y') ?><span>&emsp;|</span><?php the_category() ?>
			<h1><a href = "<?php the_permalink(); ?>" rel = "bookmark"><?php echo wp_trim_words( get_the_title(), 5 ); ?></a></h1>
			<p><?php echo wp_trim_words( get_the_excerpt(), 25 ); ?></p>
			<a class = "btn" href = "<?php the_permalink(); ?>" title = "<?php the_title_attribute(); ?>"><?php _e( 'Leia mais' ); ?></a>
		</div>
	
	</div>

</article>