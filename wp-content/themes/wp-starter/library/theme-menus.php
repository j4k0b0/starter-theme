<?php
function register_my_menus() {
  register_nav_menus(
    array(
    	'top-menu'    => __( 'Main Navigation Menu' ),
    	'footer-menu' => __( 'Footer Menu' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );
?>