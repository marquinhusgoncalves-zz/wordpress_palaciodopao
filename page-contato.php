<?php
get_header();
?>

<div class="row container">

	<div class="encomenda-box-title" style="background: #789 url(<?php bloginfo('stylesheet_directory');?>/img/marcadagua.png);">
		<h1 class="encomenda-title">ENTRE EM CONTATO COM A GENTE</h1>
	</div>

	<div class="clearfix" style="background-color: #EFEEEA; margin-top: -1px">

	  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 3%; color: #6B6B6B; font-weight: 300">
		<form role="form">
		    <div class="form-group">
		      <label for="InputName">Qual o seu nome?</label>
		      <input type="text" class="form-control" id="InputName" placeholder="Coloque seu nome aqui">
		    </div>
		    
		    <div class="form-group">
		      <label for="InputContactEmail">Seu e-mail?</label>
		      <input type="email" class="form-control" id="InputContactEmail" placeholder="Coloque seu email">
		    </div>
		    
		    <div class="form-group">
		      <label for="InputMsg">Sua mensagem</label>
		      <textarea class="form-control" rows="3" id="InputMsg" placeholder="Escreva para nós"></textarea>
		    </div>
		
		    <button type="submit" class="btn btn-default" style="display: block; margin-bottom: 25px">Enviar</button>

		    <a style="font-size: 1.5em; font-weight: 400; line-height: 1.4; color: #6B6B6B !important" href="mailto:contato@palaciodopao.com.br">Ou clique aqui e envie um e-mail</a>
		</form>
	  </div>
	 
	  <div class="box-pagamento col-lg-6 col-md-6 col-sm-12 col-xs-12" role="form">
		<div style="display: table-cell; vertical-align: middle">
			<img class="pagamento" src="<?php bloginfo('stylesheet_directory');?>/img/pagamento.png">			

		</div>
	  </div>

	</div>

	<div id="map-canvas"></div>


</div>

<?php
get_footer();

?>