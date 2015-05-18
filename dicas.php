<?php
/**
* The template name: Dicas
*
*/

get_header(); ?>

<div class="row container">

<div class="encomenda-box-title" style="background: #789 url(<?php bloginfo('stylesheet_directory');?>/img/marcadagua.png);">
	<h1 class="encomenda-title">CONFIRA NOSSAS DICAS</h1>
	</div>
</div>


<div id="content">

	<div class="main-content-area">

	<section id="primary">
		<main role="main">

				<?php if ( have_posts() ) : ?>
			  
				<?php /* Start the Loop */ ?>
				
				<?php
					$query = array( 'posts_per_page' => -1, 'order' => 'DESC' );
	
					$aRecentPosts = new WP_Query($query);
	
					while($aRecentPosts->have_posts()) : $aRecentPosts->the_post();?>
	
						<div class=".entry-meta a {font-size: 4.4rem;}">	<?php
							/* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							get_template_part( 'content' , 'dicas' , get_post_format() ); ?>
						</div>
	
					<?php endwhile; ?>
	
					<?php else : ?>
	
					<?php get_template_part( 'content', 'none' ); ?>
			  
					  <?php endif; ?>

			<div class="row container">
				<?php get_sidebar(); ?>
			</div>

		</main><!-- #main -->
	</section><!-- #primary -->
	
	</div>
	

<?php get_footer(); ?>