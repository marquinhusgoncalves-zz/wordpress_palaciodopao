<?php
/**
 * @package palaciodopao
 */
?>

<div class = "article-index col-sm-6">

	<article id = "post-<?php the_ID(); ?>">

		<?php the_time('j F, Y') ?><span>&emsp;|</span><?php the_category() ?>

		<h1>
			<a href = "<?php the_permalink(); ?>" rel = "bookmark"><?php echo wp_trim_words( get_the_title(), 5 ); ?></a>
		</h1>
		
		<p><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
		
		<a class = "btn read-more" href = "<?php the_permalink(); ?>" title = "<?php the_title_attribute(); ?>"><?php _e( 'Leia mais' ); ?></a>


	</article><!-- #post-## -->

</div>

