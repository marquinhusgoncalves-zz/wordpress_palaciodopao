<?php get_header(); ?>

<div>

	<div id = "space-top" class = "hidden-xs"></div>
	<div class = "container wrap hidden-xs" id = "stickyribbon">
		<ul class = "menu-padaria">
			<li role = "presentation"><a href = "#historia">história</a></li>
			<li role = "presentation"><a href = "#sustentabilidade">sustentabilidade</a></li>
			<li role = "presentation"><a href = "#premios">prêmios</a></li>
		</ul>
	</div>

	<!-- HISTÓRIA -->
	<section>
		<a id = "anchor-name" name = "historia"></a>
		<div id = "history"><?php include("historia.php"); ?></div>
	</section>

	<!-- SUSTENTABILIDADE -->
	<section >
		<a id = "anchor-name" name = "sustentabilidade"></a>
		<div id = "sustainability"><?php include("sustentabilidade.php"); ?></div>
	</section>

	<!-- PRÊMIOS -->
	<section>
		<a id = "anchor-name" name = "premios"></a>
		<div id = "awards"><?php include("premios.php"); ?></div>
	</section>

</div>

<?php get_footer(); ?>

<script src = "<?php bloginfo('stylesheet_directory');?>/js/stick.js"></script>