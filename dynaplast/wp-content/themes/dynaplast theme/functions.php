<?php 
add_theme_support( 'menus' );
register_nav_menus( array(
	'header_menu' => 'Header menu',
	'footer_menu' => 'Footer menu'
));


function home_excerpt_length($length) { 
	return 8;
}
add_filter('excerpt_length', 'home_excerpt_length');

function custom_excerpt($text)
{
    return str_replace('[...]', '..', $text);
}
add_filter('the_excerpt', 'custom_excerpt');