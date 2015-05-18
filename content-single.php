<article class="row container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="col-lg-8" style="padding: 0">
		<div class="artigo">
		
		<h1 class="entry-title" style="font-size: 4.4rem !important; margin-bottom: 10px; color: #23408F; padding: 0 20px"><?php the_title(); ?></h1>
	
		<div class="entry-meta" style="text-align: justify; padding: 0 20px">
				<?php
					$categories_list = get_the_category_list( __( ', ' ) );
					if ( $categories_list ) :
					?>
				
				<span id="meta-post" class="cat-links"><i class="fa fa-folder-open-o"></i>
					<?php printf( __( ' %1$s' ), $categories_list ); ?>
				</span>
				
				<?php endif; // End if categories ?>
	
		</div><!-- .entry-meta -->
	
	
	
		<div class="entry-content" style="margin-top: 20px; text-align: justify; padding: 0 20px">
			<?php
				/* translators: %s: Name of current post */
				the_content( sprintf(
					__( 'Continue reading %s', 'pp' ),
					the_title( '<span class="screen-reader-text">', '</span>', false )
				) );
	
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'pp' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'pp' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-meta" style="margin-top: 20px; text-align: justify; padding: 0 20px">

	    	<?php if(has_tag()) : ?>
	      <!-- tags -->
	      <div class="tagcloud">

	          <?php
	              $tags = get_the_tags(get_the_ID());
	              foreach($tags as $tag){
	                  echo '<a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a> ';
	              } ?>

	      </div>
	      <!-- end tags -->
	      <?php endif; ?>

		</footer><!-- .entry-meta -->


		</div>
	</div>


	<div class="col-lg-4" style="padding: 0">
		<?php get_sidebar(); ?>
	</div>


</article><!-- #post-## -->