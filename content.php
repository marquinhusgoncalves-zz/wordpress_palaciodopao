<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package palaciodopao
 */
?>

<article id = "post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php the_time('j F, Y') ?><span>&emsp;&emsp;|</span><?php the_category() ?>

	<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		endif;
	?>

	<?php
		/* translators: %s: Name of current post */
		the_content( sprintf(
			__( 'Continue reading %s' ),
			the_title( '<span class="screen-reader-text">', '</span>', false )
		) );

		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );
	?>

</article><!-- #post-## -->
