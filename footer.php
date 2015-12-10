	</div> <!-- #main -->

	<footer id = "footer-site">
		<div class = "footer-info">
			<div class = "col-sm-8">
				<div class = "adress col-md-6">
					<p>Av. Itamarati, 1001 - Pq. Jaçatuba <br /> Santo André - SP <br />
					11 <strong>4479 3574</strong> • 11 <strong>4479 3606</strong> <br /></p>
				</div>
				<div class = "adress col-md-6">
					<p>Funcionamento:<br />Dom à Qui: 06h20 às 22h40<br>Sex e Sab: <span style="margin-left: 10px;">06h20 às 23h00</span></p>
				</div>
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