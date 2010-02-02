<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head profile="http://gmpg.org/xfn/11">
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title('&mdash;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<section id="wrapper">
		<header>
			<hgroup>
				<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
				<h2><?php bloginfo('description'); ?></h2>
			</hgroup>
			<a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/feed.png"></a>
		</header>
