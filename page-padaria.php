<?php get_header(); ?>

<div>

	<div class = "container wrap hidden-xs hidden-sm" id = "stickyribbon">
		<ul class = "menu-padaria">
			<li role = "presentation"><a href = "#historia">história</a></li>
			<li role = "presentation"><a href = "#sustentabilidade">sustentabilidade</a></li>
			<li role = "presentation"><a href = "#premios">prêmios</a></li>
		</ul>
	</div>

	<div class = "hidden-xs hidden-sm"><?php include("menuspace.php") ?></div>
	
	<?php //echo do_shortcode("[metaslider id=63]"); ?>

	<!-- HISTÓRIA -->
	<section>
		<a id = "anchor-name" name = "historia"></a>
		<?php include("historia.php"); ?>
	</section>

	<!-- SUSTENTABILIDADE -->
	<section>
		<a id = "anchor-name" name = "sustentabilidade"></a>
		<?php include("sustentabilidade.php"); ?>
	</section>

	<!-- PRÊMIOS -->
	<section>
		<a id = "anchor-name" name = "premios"></a>
		<?php include("premios.php"); ?>
	</section>

</div>

<?php get_footer(); ?>


<script>
	$(document).ready(function() {
			var stickyNavTop = $('#stickyribbon').offset().top;
			var stickyNav = function(){  
			var scrollTop = $(window).scrollTop();  
			if (scrollTop > stickyNavTop) {   
				$('#stickyribbon').addClass('fixed', 'container');  
				} else {
					$('#stickyribbon').removeClass('fixed', 'container');   
				}
			};
			stickyNav();
			$(window).scroll(function() {  
				stickyNav();  
			});
	});
</script>