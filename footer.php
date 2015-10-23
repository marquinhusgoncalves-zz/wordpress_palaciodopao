	</div> <!-- #main -->

	<footer id = "footer-site">

		<div class = "footer-info">

			<div class = "adress col-sm-8">
				<p>Av. Itamarati, 1001 - Pq. Jaçatuba <br /> Santo André - SP <br />
					11 <strong>4479 3574</strong> • 11 <strong>4479 3606</strong> <br /></p>
					<p>Funcionamento:<br />Segunda a Domingo das 6h às 23h</p>
				</div>

				<div class = "social col-sm-4">
					<p>Siga-nos</p>

					<?php wp_nav_menu(array('theme_location' => 'footer',)); ?>

				</div>
			</div>

			<div class = "site-info">
				<p class = "col-sm-offset-8 col-sm-4"><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
			</div>

		</footer> 
	
		<div class = "scroll-to-top"><i class = "fa fa-chevron-up"></i></div> <!-- .scroll-to-top -->

	</div> <!-- container -->
</div> <!-- #stage -->

<?php wp_footer(); ?>

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src = "<?php bloginfo('stylesheet_directory');?>/js/functions.js"></script>
<script src = "<?php bloginfo('stylesheet_directory');?>/js/scrolltop.js"></script>
<script src = "<?php bloginfo('stylesheet_directory');?>/js/smooth-scroll.js"></script>

</body>
</html>