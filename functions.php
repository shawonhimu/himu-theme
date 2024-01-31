<?php


add_theme_support('title-tag');

add_theme_support('custom-header', array(
	'default-image' => get_template_directory_uri() . '/img/banner.jpg'
));

add_theme_support('custom-background');

//load textdomain
load_theme_textdomain('orange',get_template_directory_uri() . '/languages');

/*
*Register
*/
/* register_nav_menu('mainmenu',__('Main manu','orange'));
register_nav_menu('footermenu',__('Footer manu','orange'));
register_nav_menu('sidebarmenu',__('Sidebar manu','orange'));
**Or we can apply the shortcut below.......
 */
register_nav_menus(array(
	'mainmenu' => __('Main manu','orange'),
	'sidebarmenu' => __('Sidebar manu','orange'),
	'footermenu' => __('Footer manu','orange')
));

add_theme_support('post-thumbnails');

function orange_sidebar(){
	register_sidebar(array(
		'name' => 'Left sidebar',
		'description' => 'Put here left sidebar content',
		'id' => 'left_sidebar',
		'before_widget' => '',
		'after_widget' => '',
	));
	
	register_sidebar(array(
		'name' => 'Right sidebar',
		'description' => 'Put here right sidebar content',
		'id' => 'right_sidebar',
		'before_widget' => '',
		'after_widget' => '',
	));
}
add_action('widgets_init','orange_sidebar');


?>