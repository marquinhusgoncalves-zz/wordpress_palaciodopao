<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package palaciodopao
 */
?>

<section class = "no-results not-found" style = "padding: 30px; background: #EFEEEA;">
	<header class = "page-header page-header">
	  <h1 class = "page-title" style = "color: #6B6B6B"><?php _e( 'Nada encontrado', 'sparkling' ); ?></h1>
	</header><!-- .page-header -->

	<div class = "page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			<p><?php printf( __( 'Pronto para publicar o seu primeiro post? <a href="%1$s">Get started here</a>.', 'sparkling' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

	  <p><?php _e( 'Desculpe, mas nada foi encontrado termos da sua pesquisa.</br>Por favor, tente novamente com algumas palavras-chave diferentes.', 'sparkling' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'Parece que não consigo encontrar o que procura.</br>Talvez a pesquisa pode ajudar.', 'sparkling' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->