<?php

function theme_scripts()
{

	// Enqueue the main Stylesheet.
	wp_enqueue_style( 'theme', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all' );

	// Deregister the jquery version bundled with WordPress.
	wp_deregister_script( 'jquery' );

	// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false );

	//Main JS
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );