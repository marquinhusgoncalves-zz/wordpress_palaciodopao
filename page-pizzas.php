<?php get_header(); ?>
<?php include('menu-produtos.php'); ?>

<div class = "secao-pizzas clearfix">
	<div class="cabeca_pizzas">
		<div class="cabeca_box_pizzas">
			<p class="cabeca_text_pizzas">Pizzas</p>
		</div>
	</div>	
	<div class = "info-rodape">
		<p>o horário de início da comercialização das pizzas é a partir das 15h</p>
		<span class = "obs">Todos os preços podem sofrer alteração sem aviso prévio.</span>
	</div>

	<div style = "margin: 0 15px">
		<?php
		$newsArgs = array( 'post_type' => 'pizza', 'orderby'=> 'title', 'order'	=> 'ASC', 'posts_per_page' => '-1');
		$newsLoop = new WP_Query( $newsArgs );
		while ( $newsLoop->have_posts() ) : $newsLoop->the_post(); ?>
		<section class = "bloco-pizza clearfix col-lg-6">
			<h1 class = "col-xs-12 titulo-produto"><?php the_title(); ?></h1>
			<span class = "col-sm-7 col-lg-6 descricao-produto"><?php the_content(); ?></span>
			<div class = "col-sm-5 col-lg-6 bloco-dados">
				<div class = "pizza-dados">
					<h3 class = "pizza-tamanho">Família</h3>
					<h5 class = "pizza-cod"><?= get_post_meta($post->ID, "_codigo-familia", true); ?></h5>
					<h4 class = "pizza-valor">R$ <?= get_post_meta($post->ID, "_familia", true); ?></h4>
				</div>
				<div class = "pizza-dados">
					<h3 class = "pizza-tamanho">Broto</h3>
					<h5 class = "pizza-cod"><?= get_post_meta( $post->ID, '_codigo-broto', true ); ?></h5>
					<h4 class = "pizza-valor">R$ <?= get_post_meta( $post->ID, '_broto', true ); ?></h4>
				</div>
				<div class = "pizza-dados">
					<h3 class = "pizza-tamanho">Individual</h3>
					<h5 class = "pizza-cod"><?= get_post_meta( $post->ID, '_codigo-individual', true ); ?></h5>
					<h4 class = "pizza-valor">R$ <?= get_post_meta( $post->ID, '_individual', true ); ?></h4>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
</div>
</div>

<?php get_footer(); ?>

<script src = "<?php bloginfo('stylesheet_directory');?>/js/menulateral.js"></script>
<script src = "<?php bloginfo('stylesheet_directory');?>/js/jquery.matchHeight-min.js"></script>

<script>
	$(function() {
		$('.bloco-pizza').matchHeight();
	});
</script>