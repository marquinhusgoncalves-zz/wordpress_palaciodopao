<?php get_header(); ?>
<?php include('menu-produtos.php'); ?>
<div class = "bg-cardapio clearfix">
	<div class="cabeca cabeca_jantar">
		<div class = "cabeca_box">
			<div class="cabeca_text_jantar">
				<h3>Buffet de Massas e Sopas</h3>
				<p style = "margin-bottom: 15px">Todos os dias das 18h às 23h</p>
				<h5 class = "cod-produto">24024</h5>
				<p class = "unid-jantar">De 2ª à 5ª feira.</p>
				<h4 class = "valor-produto">R$ 35,60</h4>
				<h5 class = "cod-produto">24028</h5>
				<p class = "unid-jantar">6ª feira, Sábados, Domingos e Feriados</p>
				<h4 class = "valor-produto">R$ 38,75</h4>
			</div>
		</div>
	</div>
	<div class = "info-rodape">
		<p>• Crianças de 0 à 5 anos* completos (*Válido somente para crianças com acompanhantes pagantes no buffet de Massas/Sopas), não pagam o buffet de Massas/Sopas.<br>• Crianças acima de 5 à 10 anos completos pagam metade do valor do buffet de Massas/Sopas.<br>• Crianças acima de 10 anos pagam o valor integral do buffet de Massas/Sopas.<br>* Todos os preços podem sofrer alterações sem aviso prévio.</p>
	</div>
	<section class = "col-sm-6 col-lg-4 clearfix bloco-jantar">
		<img class = "img-bolos" src = "<?php bloginfo('stylesheet_directory');?>/img/_produtos/jantar/salada.png" alt = "">
		<h5 class = "col-xs-2 cod-produto">24091</h5>
		<span class = "col-xs-10">
			<h1 class = "titulo-produto">Saladas</h1>
			<p>MONTE A SUA ESCOLHENDO:
				<ul>
					<li>3 Tipos de folhas rasgadas</li>
					<li>6 Diferentes ingredientes</li>
					<li>2 Tipos de molhos</li>
				</ul>
			</p>
			<h4 class = "valor-produto">R$ 27,20</h4>
		</span>
	</section>
	<section class = "col-sm-6 col-lg-4 clearfix bloco-jantar">
		<img class = "img-bolos" src = "<?php bloginfo('stylesheet_directory');?>/img/_produtos/jantar/mignon.png" alt = "">
		<h5 class = "col-xs-2 cod-produto">24094</h5>
		<span class = "col-xs-10">
			<h1 class = "titulo-produto">Mignon Grelhado</h1>
			<p>02 filés mignon acompanhados de tomate e cebola gratinados.</p>
			<p class = "unid-jantar">Prato</p><h4 class = "valor-produto">R$ 34,55</h4>
			<p class = "unid-jantar">+ Salada - 24092</p><h4 class = "valor-produto">R$ 20,90</h4>
		</span>
	</section>
	<section class = "col-sm-6 col-lg-4 clearfix bloco-jantar">
		<img class = "img-bolos" src = "<?php bloginfo('stylesheet_directory');?>/img/_produtos/jantar/frango.png" alt = "">
		<h5 class = "col-xs-2 cod-produto">24098</h5>
		<span class = "col-xs-10">
			<h1 class = "titulo-produto">Frango Grelhado</h1>
			<p>02 filés frango acompanhados de tomate e cebola gratinados.</p>
			<p class = "unid-jantar">Prato</p><h4 class = "valor-produto">R$ 17,50</h4>
			<p class = "unid-jantar">+ Salada - 24092</p><h4 class = "valor-produto">R$ 20,90</h4>
		</span>
	</section>
	<section class = "col-sm-6 col-lg-4 clearfix bloco-jantar">
		<img class = "img-bolos" src = "<?php bloginfo('stylesheet_directory');?>/img/_produtos/jantar/picanha.png" alt = "">
		<h5 class = "col-xs-2 cod-produto">24096</h5>
		<span class = "col-xs-10">
			<h1 class = "titulo-produto">Picanha Grelhada</h1>
			<p>02 filés Picanha acompanhados de tomate e cebola gratinados.</p>
			<p class = "unid-jantar">Prato</p><h4 class = "valor-produto">R$ 34,55</h4>
			<p class = "unid-jantar">+ Salada - 24092</p><h4 class = "valor-produto">R$ 20,90</h4>
		</span>
	</section>
	<section class = "col-sm-6 col-lg-4 clearfix bloco-jantar">
		<img class = "img-bolos" src = "<?php bloginfo('stylesheet_directory');?>/img/_produtos/jantar/salmao.png" alt = "">
		<h5 class = "col-xs-2 cod-produto">24099</h5>
		<span class = "col-xs-10">
			<h1 class = "titulo-produto">Salmão Grelhado</h1>
			<p>01 filé de salmão acompanhado de tomate e cebola gratinados.</p>
			<p class = "unid-jantar">Prato</p><h4 class = "valor-produto">R$ 28,80</h4>
			<p class = "unid-jantar">+ Salada - 24092</p><h4 class = "valor-produto">R$ 20,90</h4>
		</span>
	</section>
</div>
<?php get_footer(); ?>
<script src = "<?php bloginfo('stylesheet_directory');?>/js/menulateral.js"></script>
<script src = "<?php bloginfo('stylesheet_directory');?>/js/jquery.matchHeight-min.js"></script>
<script>
	$(function() {
		$('.bloco-jantar').matchHeight();
	});
</script>