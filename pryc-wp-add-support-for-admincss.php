<?php
/*
 * Plugin Name: PRyC WP: Add support for admin.css
 * Plugin URI: 
 * Description: Add support for admin.css @ THEME_DIR (normal or child)
 * Author: PRyC
 * Author URI: http://PRyC.pl
 * Version: 1.1.4
 */
 


/* CODE: */

if ( ! defined( 'ABSPATH' ) ) exit;

add_action('admin_head', 'pryc_wp_admin_css');

if ( !function_exists("pryc_wp_admin_css") ) {
	function pryc_wp_admin_css() {
		
		$adminCssFileUri = get_stylesheet_directory_uri().'/admin.css';
		$adminCssFile = get_stylesheet_directory().'/admin.css';
		
		if ( file_exists($adminCssFile) ) {	
		echo '<link rel="stylesheet" href="'.$adminCssFileUri.'" type="text/css" media="all" />';
	
		} else { 
				$makeFile = fopen($adminCssFile, "w"); }
	}
}

/* END */

