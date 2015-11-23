<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset = "<?php bloginfo( 'charset' ); ?>">
	<meta name = "viewport" content="width=device-width">
	<meta name = "format-detection" content = "telephone=no">
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href = "<?php bloginfo('stylesheet_directory');?>/css/produtos.css" rel = "stylesheet">
	<link href = "<?php bloginfo('stylesheet_directory');?>/css/galeria.css" rel = "stylesheet">
	<link href = "<?php bloginfo('stylesheet_url'); ?>" rel = "stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php include_once("analyticstracking.php") ?>
<div id = "stage">
<div class = "container">

		<header id = "header-nav">
			<a href = "<?php echo esc_url( home_url( '/' ) ); ?>"><img id = "logo" src = "<?php bloginfo('stylesheet_directory');?>/img/logo.svg" alt = "Palácio do Pão"></a>

			<input	type = "checkbox" id = "sidebartoggler">
				<label class = "toggle visible-xs-inline-block" for = "sidebartoggler"><i class = "fa fa-bars"></i></label>
				<nav class = "nav-sidebar visible-xs-inline-block"><?php wp_nav_menu(array('theme_location' => 'primary',)); ?></nav>
				<nav class = "hidden-xs"><?php wp_nav_menu(array('theme_location' => 'primary',)); ?></nav>
		</header>

		<div id = "main">