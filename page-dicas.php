<article id="post-<?php the_ID(); ?>">
	<div class="blog-item-wrap">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ></a>
		
		<div class="blog-box">
			
			<!-- BLOG BOX 1 -->
			<div class="blog-box-01 hidden-xs">
				<div class="blog-data">				  
				  <div class="blog-dia">
				  	<?php the_time('j') ?>
				  </div>
  				  <div class="blog-mes">
				  	<?php the_time('M') ?>
				  </div>
				</div>
		  	</div><!-- END BLOG BOX 1 -->
			
			
			
		  <!-- BLOG BOX 2 -->
		  <div class="blog-box-02">
			<header class="entry-header page-header" style="margin: 0 !important;">
	  			<?php if ( 'post' == get_post_type() ) : ?>
	  				
					<div class="entry-meta">  
						<h1 class="entry-title" style="margin: 10px 0 !important;">
							<a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo wp_trim_words( get_the_title(), 5 ); ?></a>
						</h1>
					</div><!-- .entry-meta -->
				
				<?php endif; ?>
				  
			</header><!-- .entry-header -->
			
			<div class="entry-content" style="margin: 0 !important;">
				<?php the_excerpt(25); ?>
				
				<div style="display: inline-block"><a class="btn btn-default read-more" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php _e( 'Leia mais', 'sparkling' ); ?></a></div>

				<?php
					wp_link_pages( array(
						'before'            => '<div class="page-links">'.__( 'Pages:', 'sparkling' ),
						'after'             => '</div>',
						'link_before'       => '<span>',
						'link_after'        => '</span>',
						'pagelink'          => '%',
						'echo'              => 1
		       		) );
		    	?>
		    	
		    	
				<div style="float: right; padding-right: 20px">
					<div style="width: 40px; display: inline-block; margin-top: 5px;">
						<?php the_post_thumbnail( 'sparkling-featured', array( 'class' => 'single-featured' )); ?>
					</div>
					
					<p id="categoria-dicas"><?php
						$taxonomy = 'category';
						// get the term IDs assigned to post.
						$post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
						// separator between links
						$separator = ', ';
							if ( !empty( $post_terms ) && !is_wp_error( $post_terms ) ) {		
							$term_ids = implode( ',' , $post_terms );
							$terms = wp_list_categories( 'title_li=&style=none&echo=0&taxonomy=' . $taxonomy . '&include=' . $term_ids );
							$terms = rtrim( trim( str_replace( '<br />',  $separator, $terms ) ), $separator );
							// display post categories
							echo  $terms;
						}
						?>
					</p>
				</div>
			</div><!-- .entry-content -->

		</div><!-- END BLOG BOX 2 -->


		<!-- BLOG BOX 3 -->
		<div class="blog-box-03 hidden-xs hidden-sm">
			<div class="arrow_right"></div>
			<div class="blog-img" style="background: url(<?php echo catch_that_image() ?>)"></div>
		</div><!-- END BLOG BOX 3 -->
	  
	  
	  </div>
  </div>
</article><!-- #post-## -->