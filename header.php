<!DOCTYPE html>
<html>
	<head>
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>	
	<!--[if lt IE 9]><script src="http://html5shim.google.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?> type="text/css" media="screen" />
    <link rel="pingback"  href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="application/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="shortcut icon"  href="<?php bloginfo('stylsesheet_directory')?>/favicon.ico" type="image/x-icon" />
    <?php wp_head(); ?>
    <body>

        <div id= "wrapper">
        	<div id = "container" class ="group">
        		<header class ="group">
        			<h2><?php bloginfo('stylesheet_directory'); ?></a></h2>
        			<h1> <img src="<?php print IMAGES; ?>/logo.jpg" alt="<?php bloginfo('name'); ?> /></h1> <!-- mostrar una imagen-->
        			<?php get_search_form(); ?>
        			<?php wp_nav_menu(array('menu'=>'Main','container'=>'nav')); ?>
        		</header> <!-- Fin headear-->
        		        	</div> <!--Fin del contenedor-->