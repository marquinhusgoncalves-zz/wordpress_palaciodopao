<?php
get_header();
?>

<div class="row container">

<div class="botao"><a href="#">LISTA DE PRODUTOS</a></div>

	<header class="menulateral clearfix">
		<?php wp_nav_menu(array('theme_location' => 'extra-menu',));?>
	</header>

<div class="" style="width: 100%; height: 150px; color: white; background: #789 url(<?php bloginfo('stylesheet_directory');?>/img/marcadagua.png); padding: 0 50px; margin: 0; display: table">
  <div style="display: table-cell; vertical-align: middle">
	<h1 style="font-weight: 400; display: inline-block; line-height: 6px;">11 <strong>4479 3574</strong></h1>
	<div class="hidden-xs" style="font-size: 30px; font-weight: 400; display: inline-block;">&nbsp;•&nbsp;</div>
	<h1 style="font-weight: 400; display: inline-block; line-height: 6px;">11 <strong>4479 3606</strong></h1>
	<p style="font-weight: 400; display: block">Encomendas com 24h de antecedência</p>
  </div>	
</div>

<div style="background-color: #EFEEEA; padding: 2%">

	<div class="row encomendas" style="width: auto; margin: 0 auto; text-align: center;">
 		
		<div class="col-lg-6 col-lg-offset-3 hidden-xs">
		  <img src="<?php bloginfo('stylesheet_directory');?>/img/_copa/05.jpg" alt="" />
		</div>

		<div id="mycontainer" class="visible-xs-block" style="width: auto; height: 520px; padding: 0 !important; margin-left: 10%">
			<canvas id="mycanvas" style="width: 100%; height: 100%"></canvas>
		</div>

	</div>
	
</div>

</div>

	<script>
		var gesturableImg = new ImgTouchCanvas({
			canvas: document.getElementById('mycanvas'),
			path: "<?php bloginfo('stylesheet_directory');?>/img/_copa/05.jpg",
			desktop: false
		});
	</script>

<?php
get_footer();
?>


