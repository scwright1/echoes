<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<title><?php wp_title( ' | ', true, 'right' ); ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="wrapper" class="hfeed">
			<header id="header" role="banner">
				<section id="branding">
					<div id="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src='wp-content/themes/Echoes/heading.png' width='500px' height='160px' /></a>
					</div>
					<!--<div id="site-description"><?php bloginfo( 'description' ); ?></div>-->
				</section>
				<div id="menu">
					<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'theme-navigation', 'menu_class' => 'top-menu' ) ); ?>
				</div>
			</header>
			<div id="container">