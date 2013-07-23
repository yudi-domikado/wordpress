<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title><?php the_title(); ?> | <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/parallax.css"/>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.1.8.3min.js"></script>
  <!--[if lt IE 9]>
    <script src="<?php bloginfo('template_directory'); ?>/js/html5shiv.js"></script>
  <![endif]-->
</head>
<body>
	<div id="container">
		<div id="menu">
			<a href="<?php bloginfo('url'); ?>"><div id="logo"></div></a>
			<?php wp_nav_menu(array('menu' => 'Main Menu')); ?>
		</div> <!-- end menu -->
<?php wp_head(); ?>