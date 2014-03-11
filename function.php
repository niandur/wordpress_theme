<?php
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
define( 'IMAGES', TEMPPATH. "/images");
add_theme_support('nav-menus');
if(function_exists ('register_nav_menus'))
{
	register_nav_menus(
	array('main' => 'Main Nav')
	)
}
?>