<!-- header.php -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>
	/styles/normalize.css">

	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

<!--[if IE]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<div id="main">
	<body <?php body_class( ); ?>>

		<header role="banner" class="header">
			<div class="site-name">
				<?php get_search_form(); ?>
				<div class="site-titles">
					<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1> 
					<h2><?php bloginfo('description'); ?></h2>
				</div>
			</div>
			<?php wp_nav_menu(array(
				'theme_location' => 'main_menu',
				'menu_class' => 'menu clearfix',
				)); ?> 
				<div id="hdr" ><?php rad_slider() ?></div>




			</header>
