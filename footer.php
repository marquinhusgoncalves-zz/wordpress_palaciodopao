	<footer class = "site-footer">

	<div style = "width: 100%; height: 200px; display: table">	
		<div class = "socialbar">

		<div class = "adress hidden-xs col-sm-8 col-md-9">
			<p>Av. Itamarati, 1001 - Pq. Jaçatuba - Santo André - SP <br />
			11 <strong>4479 3574</strong> • 11 <strong>4479 3606</strong><br />
			<div style = "height: 10px"></div>
			<p>Funcionamento: Segunda a Domingo das 6h às 23h</p>
		</div>

		<div class = "adress visible-xs-block">
			<p>Av. Itamarati, 1001 - Pq. Jaçatuba <br /> Santo André - SP <br />
			11 <strong>4479 3574</strong> • 11 <strong>4479 3606</strong><br />
			<div style = "height: 10px"></div>
			Funcionamento:<br />Segunda a Domingo das 6h às 23h</p>
		</div>

		<div class = "col-xs-12 col-sm-4 col-md-3" style = "padding: 20px 4%; font-size: 1.2em">
			<p>Siga-nos</p>

			<div class = "social-icon" style = "background: #6678C5">
				<a href = "https://www.facebook.com/palaciodopao" target = "_blank">
					<img src = "<?php bloginfo('stylesheet_directory');?>/img/_icones/social_icons_facebook.png">
				</a>
			</div>

			<div class = "social-icon" style = "background: #F94877">
				<a href = "http://4sq.com/b39uLM" target = "_blank">
					<img src = "<?php bloginfo('stylesheet_directory');?>/img/_icones/social_icons_foursquare.png">
				</a>
			</div>

			<div class = "social-icon" style = "background: #55acee">
				<a href = "http://twitter.com/palaciodopao" target = "_blank">
					<img src = "<?php bloginfo('stylesheet_directory');?>/img/_icones/social_icons_twitter.png">
				</a>
			</div>
		</div>
		</div>  	
	</div>
	
	<div class = "info"><p style = "color: white"><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p></div>

	</footer>
		
</div><!-- container -->


<div class = "scroll-to-top"><i class = "fa fa-chevron-up"></i></div><!-- .scroll-to-top -->

<?php wp_footer(); ?>

</body>

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src = "<?php bloginfo('stylesheet_directory');?>//js/smooth-scroll.min.js"></script>
<script src = "<?php bloginfo('stylesheet_directory');?>//js/menulateral.min.js"></script>

<script>
	$(".toggle i").click(function() {
		 var $this = $(this);
		 if ($this.hasClass("fa-bars")) {
				$this.removeClass("fa-bars").addClass("fa-times");
				return;
		 }
		 if ($this.hasClass("fa-times")) {
				$this.removeClass("fa-times").addClass("fa-bars");
				return;
		 }
	});
</script>

<script>
	$(function(){
	 
		$(document).on( 'scroll', function(){
	 
			if ($(window).scrollTop() > 100) {
				$('.scroll-to-top').addClass('show');
			} else {
				$('.scroll-to-top').removeClass('show');
			}
		});
	 
		$('.scroll-to-top').on('click', scrollToTop);
	});

	function scrollToTop() {
		verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
		element = $('body');
		offset = element.offset();
		offsetTop = offset.top;
		$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
	}
</script>

</html>