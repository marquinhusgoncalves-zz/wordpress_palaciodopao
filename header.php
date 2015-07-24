<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset = "<?php bloginfo('charset'); ?>">
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
	<meta name="HandheldFriendly" content="True">
	<meta name = "format-detection" content = "telephone=no">
	<title><?php bloginfo('name'); ?></title>
	<link rel = "icon" href = "<?php bloginfo('stylesheet_directory');?>/img/favicon.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel = "stylesheet" id = "icons-css" href = "<?php bloginfo('stylesheet_directory');?>/css/font-awesome.min.css" type = "text/css" media = "all">
    <script src = "https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<?php wp_head(); ?>
</head>
<body>

<div id = "stage">
	<div class = "container">

		<header>
			<div class = "bg-menu">
			<a href = "<?php echo esc_url( home_url( '/' ) ); ?>"><img style = "height: 70px; margin: 10px 2%; position: absolute" src = "<?php bloginfo('stylesheet_directory');?>/img/logo_510.png" alt = "palácio do pão"></a>

			<input	type = "checkbox" id = "sidebartoggler" name = "" value = "">
				<label class = "toggle visible-xs-inline-block glyphicon glyphicon-menu-hamburger" for = "sidebartoggler"></label>
				<nav class = "sidebar visible-xs-inline-block"><?php wp_nav_menu('Principal'); ?></nav>
				<nav class = "hidden-xs" style = "margin: 10px 30px 0"><?php wp_nav_menu('Principal'); ?></nav>
			</div>

		</header>
