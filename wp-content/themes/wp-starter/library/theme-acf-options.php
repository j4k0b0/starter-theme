<?php
//Adds Options Page
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
		'page_title' 	=> 'Mega Menu',
		'menu_title'	=> 'Mega Menu',
		'menu_slug' 	=> 'megamenu-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
  acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}
?>