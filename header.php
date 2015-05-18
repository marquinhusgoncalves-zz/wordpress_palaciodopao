<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="HandheldFriendly" content="True">
	<meta name="format-detection" content="telephone=no">
	<title><?php bloginfo('name'); ?></title>
	<link rel="icon" href="<?php bloginfo('stylesheet_directory');?>/img/favicon.png">
	<?php wp_enqueue_script( 'functions', get_bloginfo( 'template_directory' ) . '/js/bootstrap.js', array( 'jquery' ) ); ?>
	<?php wp_enqueue_style('style-custom', get_bloginfo('template_directory') . '/css/bootstrap.css'); ?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" id="icons-css" href="<?php bloginfo('stylesheet_directory');?>/css/font-awesome.min.css" type="text/css" media="all">
	
	    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>	
	    <script type="text/javascript">
	
	        function initialize() {
	            var myLatlng = new google.maps.LatLng(-23.646776, -46.514396,17);
	            var mapOptions = {
	                zoom: 17,
	                center: myLatlng,
	                disableDefaultUI: false,
	                scrollwheel: false,
	                draggable: false
	            }
	            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
	
	            var marker = new google.maps.Marker({
	                position: myLatlng,
	                map: map,
	                title: 'Palácio do Pão'
	            });
	
	            var styles = [
	                {
	                    stylers: [
	                        { hue: "#23408F" },
	                        { saturation: -20 }
	                    ]
	                },{
	                    featureType: "road",
	                    elementType: "geometry",
	                    stylers: [
	                        { lightness: 100 },
	                        { visibility: "simplified" }
	                    ]
	                },{
	                    featureType: "road.local",
	                    elementType: "labels",
	                }
	            ];
	
	            map.setOptions({styles: styles});
	        }
	
	        google.maps.event.addDomListener(window, 'load', initialize);
	
	    </script>

	    <script type="text/javascript">
			// fix IE bug where hash anchors don't update scrolltop on some occasions
			if (window.location.hash)
			window.location = window.location.hash;
		</script>
      
      <script type="text/javascript">
      	$(document).ready(function() {  
			$("#panzoom").panzoom({
			    contain: 'invert',
    			minScale: 1
			});
		};
      </script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> onload="initialize()">

<div id="stage">
	<div class="container">
	
		<!-- site-header -->
		<header id="masthead" class="row container site-header" role="banner">

			<nav class="navbar navbar-inverse menu-principal" role="navigation">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">	
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span id="menu-icon" class="glyphicon glyphicon-align-justify"></span>
					</button>
					
					<div class="navbar-header">
						<a id="link-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img alt="Palácio do Pão" src="<?php bloginfo('stylesheet_directory');?>/img/logo_510.png" style="height: 70px; margin: 9px 20px; border-bottom: 0 !important">
						</a>
					</div>	
				</div>
					
				<div class="collapse navbar-collapse" id="navbar-collapse" style="float: right;">
					<ul class="nav navbar-nav">
						<?php wp_nav_menu(); ?>
					</ul>
				</div>
			</nav>

		</header>