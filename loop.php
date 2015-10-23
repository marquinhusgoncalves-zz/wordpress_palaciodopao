<?php

		if( have_posts() ) :
		while ( have_posts() ) : the_post();

		get_template_part( 'content-dicas', get_post_format() );

		?>

		<?php endwhile;
		else :
			echo '';
			endif;
			?>