<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<title><?php wp_title( ' | ', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
		<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="wrapper" class="hfeed">
			<header id="header" role="banner">
				<section id="branding">
					<div id="site-title">
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					</div>
					<!--<div id="site-description"><?php bloginfo( 'description' ); ?></div>-->
				</section>
				<div id="menu">
					<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'theme-navigation', 'menu_class' => 'top-menu' ) ); ?>
				</div>
				<div class='social-nav'>
					<a class='soc-button' href='http://www.instagram.com/USER'><i class='fa fa-instagram'></i></a>
					<a class='soc-button' href='http://USER.tumblr.com'><i class='fa fa-tumblr'></i></a>
					<a class='soc-button' href='http://www.pinterest.com/USER'><i class='fa fa-pinterest'></i></a>
					<a class='soc-button' href='https://www.bloglovin.com/blog/USER/'><i class='fa fa-heart'></i></a>
					<a class='soc-button' href='http://www.google.com/plus/USER'><i class='fa fa-google-plus'></i></a>
					<a class='soc-button' href="<?php echo esc_url( home_url( '/feed' ) ); ?>"><i class='fa fa-rss'></i></a>
				</div>
				<div class='nav-separator'></div>
			</header>
			<div id="container">