<?php
/** Enqueue scripts */
require_once( 'library/theme-enqueue-scripts.php' );

/** Theme Functions */
require_once( 'library/theme-functions.php' );

/** Theme Menus */
require_once('library/theme-menus.php');

/** Theme Shortcodes */
require_once( 'library/theme-shortcodes.php' );

/** Theme Post Types */
require_once( 'library/theme-post-types.php' );

/** Theme ACF Options */
require_once('library/theme-acf-options.php');

//Kill Auto P for CF7
define( 'WPCF7_AUTOP', false );
?>