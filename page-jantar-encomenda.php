<?php
get_header();
?>

<div class="row container">

<div class="botao"><a href="#">LISTA DE PRODUTOS</a></div>

	<header class="menulateral clearfix">
		<?php wp_nav_menu(array('theme_location' => 'extra-menu',));?>
	</header>

<!-- TITULO -->
<div style="background-color: #EFEEEA">
	<p style="color: #6B6B6B; font-size: 35px; font-weight: 800; line-height: 50px; padding: 0px 12%; padding-top: 40px;">JANTAR</p>
	
	<div class="hidden-xs" style="padding-top: 20px">
		<img src="<?php bloginfo('stylesheet_directory');?>/img/_produtos/_jantar/cabeca-jantar-grelhados_massas.png" width="100%" height="auto" />
	</div>
	
	<div style="padding: 0 12%; padding-bottom: 40px">
		<p style="color: #6B6B6B; font-size: 25px; font-weight: 800; line-height: 30px">
		Todos os dias das 18:00 as 23:00 Buffet Self-Service de Sopas*, Massas, molhos e acompanhamento à sua escolha.</p>
		</hr>
		</hr>
		<p style="color: #6B6B6B; font-size: 25px; font-weight: 800; line-height: 30px">
		Saladas, Grelhados a La Carte</p>          
	</div>
</div> <!-- END TITULO -->


	<!-- PRODUTOS -->
	<div class="row" style="background-color: #C8C6BF; color: #6b6b6b !important; padding-top: 20px; margin: 0 !important">

		<div class="col-lg-4 col-sm-6" style="margin: 20px 0; padding-left: 5%">
			<div style="width: auto; height: 150px; margin: 0 auto">
				<img src="<?php bloginfo('stylesheet_directory');?>/img/_produtos/_jantar/mignom.png" />
			</div>
			<p style="font-size: 30px; font-weight: 400; line-height: 40px;">Mignon Grelhado</p>
			02 filés mignon</br>acompanhados de tomate e</br>cebola gratinados.
		</div>
				
		<div class="col-lg-4 col-sm-6" style="margin: 20px 0; padding-left: 5%">
			<div style="width: auto; height: 150px; margin: 0 auto">
				<img src="<?php bloginfo('stylesheet_directory');?>/img/_produtos/_jantar/frango.png" />
			</div>
			<p style="font-size: 30px; font-weight: 400; line-height: 40px;">Frango Grelhado</p>
			02 filés de frango</br>acompanhados de tomate e</br>cebola gratinados.
		</div>
				
		<div class="col-lg-4 col-sm-6" style="margin: 20px 0; padding-left: 5%">
			<div style="width: auto; height: 150px; margin: 0 auto">
				<img src="<?php bloginfo('stylesheet_directory');?>/img/_produtos/_jantar/picanha.png" />
			</div>
			<p style="font-size: 30px; font-weight: 400; line-height: 40px;">Picanha Grelhada</p>
			02 filés de picanha</br>acompanhados de tomate e</br>cebola gratinados.
		</div>
				
		<div class="col-lg-4 col-sm-6" style="margin: 20px 0; padding-left: 5%">
			<div style="width: auto; height: 150px; margin: 0 auto">
				<img src="<?php bloginfo('stylesheet_directory');?>/img/_produtos/_jantar/salmao.png" />
			</div>
			<p style="font-size: 30px; font-weight: 400; line-height: 40px;">Salmão Grelhado</p>
			01 filé de salmão</br>acompanhado de tomate e</br>cebola gratinados.
		</div>
				
		<div class="col-lg-4 col-sm-6" style="margin: 20px 0; padding-left: 5%">
			<div style="width: auto; height: 150px; margin: 0 auto">
				<img src="<?php bloginfo('stylesheet_directory');?>/img/_produtos/_jantar/salada.png" />
			</div>
			<p style="font-size: 30px; font-weight: 400; line-height: 40px;">Saladas</p>
			• 3 Tipos de folhas rasgadas;</br>
			• 6 Diferentes ingredientes;</br>
			• 2 Tipos de molhos
		</div>
			

		<div class="col-lg-12 col-md-12 col-sm-12" style="background-color: #F2F2F2; padding: 20px 12%; margin-top: 20px">
			CRIANÇAS</br>
			• Crianças de 0 à 5 anos* completos, não Pagam o Buffet de Massas/Sopas.</br>
			• Crianças de 5 à 10 anos completos Pagam metade do valor do Buffet de Massas/Sopas.</br>
			• Crianças acima de 10 anos Pagam o valor integral do Buffet de Massas/Sopas.</br>
			Imagens meramente ilustrativas.
		</div>
	</div>

</div>

<?php
get_footer();
?>