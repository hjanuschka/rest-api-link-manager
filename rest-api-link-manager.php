<?php
/**
 * Plugin Name: REST API Link Manager
 * Plugin URI: https://github.com/PrysPlugins/rest-api-link-manager
 * Description: Add endpoints for managaing links to the REST API.
 * Version: 1.0
 * Author: Jeremy Pry
 * Author URI: http://jeremypry.com/
 * License: GPL2
 */

// Prevent direct access to this file
if ( ! defined( 'ABSPATH' ) ) {
	die( "You can't do anything by accessing this file directly." );
}

// Try loading our class
if ( class_exists( 'WP_REST_Controller' ) ) {
	require_once( __DIR__ . '/includes/class-jpry-rest-link-controller.php' );
	define( 'JPRY_REST_LINK_LOADED', true );
}

/**
 * Require a file.
 *
 * This is intended to be used inside class methods to ensure that the
 * included file doesn't have access to the class scope.
 *
 * @param string $file The full path to the file.
 */
function jpry_require_once_file( $file ) {
	if ( ! file_exists( $file ) ) {
		return;
	}

	require_once( $file );
}

