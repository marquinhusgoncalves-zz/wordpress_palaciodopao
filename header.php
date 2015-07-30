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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	
	<?php wp_head(); ?>
</head>
<body>

<div id = "stage">
	<div class = "container">

		<header>
			<div class = "bg-menu">
			<a href = "<?php echo esc_url( home_url( '/' ) ); ?>"><img style = "height: 70px; margin: 10px 2%; position: absolute" src = "<?php bloginfo('stylesheet_directory');?>/img/logo_510.png" alt = "palácio do pão"></a>

			<input	type = "checkbox" id = "sidebartoggler" name = "" value = "">
				<label class = "toggle visible-xs-inline-block" for = "sidebartoggler"><i class = "fa fa-bars"></i></label>
				<nav class = "sidebar visible-xs-inline-block"><?php wp_nav_menu('Principal'); ?></nav>
				<nav class = "hidden-xs" style = "margin: 10px 30px 0"><?php wp_nav_menu('Principal'); ?></nav>
			</div>

		</header>
