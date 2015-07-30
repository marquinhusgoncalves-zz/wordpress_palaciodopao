<?php
/**
* The template name: Dicas
*
*/
get_header(); ?>

<div class = "produto-box-title" style = "background: #789 url(<?php bloginfo('stylesheet_directory');?>/img/marcadagua.png);">
	<h1 class = "produto-title">confira nossas dicas</h1>
</div>

<div id = "content">
	<div class = "main-content-area">
	<section id = "primary">
		<main role = "main">

		<?php if ( have_posts() ) : ?>
		<?php
			$query = array( 'posts_per_page' => -1, 'order' => 'DESC' );
			$aRecentPosts = new WP_Query($query);
	
			while($aRecentPosts->have_posts()) : $aRecentPosts->the_post();?>
	
				<div class = ".entry-meta a {font-size: 4.4rem;}">	<?php
					get_template_part( 'content' , 'dicas' , get_post_format() ); ?>
				</div>
	
			<?php endwhile; ?>
			<?php else : ?>
	
			<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>

		<?php get_sidebar(); ?>

		</main>
	</section>
	</div>

</div>

<?php get_footer(); ?>