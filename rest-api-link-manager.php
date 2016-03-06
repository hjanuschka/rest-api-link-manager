<?php
/**
 * Plugin Name: REST API Link Manager
 * Plugin URI:  https://github.com/PrysPlugins/rest-api-link-manager
 * Description: Add endpoints for managing links to the REST API.
 * Version:     1.0.0
 * Author:      Jeremy Pry
 * Author URI:  http://jeremypry.com/
 * License:     GPL2
 * Text Domain: rest-api-link-manager
 * Domain Path: /languages
 */

// Prevent direct access to this file
if ( ! defined( 'ABSPATH' ) ) {
	die( "You can't do anything by accessing this file directly." );
}

// Hook our class to the REST API.
add_action( 'rest_api_init', 'jpry_register_rest_link_routes' );
/**
 * Register our routes with the REST API.
 * 
 * @since 1.0.0
 */
function jpry_register_rest_link_routes() {
	jpry_require_once_file( __DIR__ . '/includes/class-jpry-rest-link-controller.php' );
	$link_controller = new JPry_REST_Link_Controller();
	$link_controller->register_routes();
}

// Hook up the translations
add_action( 'init', 'jpry_rest_link_manager_translations' );
/**
 * Load our text domain translations.
 *
 * @since 1.0.0
 */
function jpry_rest_link_manager_translations() {
	load_plugin_textdomain( 'rest-api-link-manager', false, dirname( __FILE__ ) . '/languages' );
}

/**
 * Require a file.
 *
 * This is intended to be used inside class methods to ensure that the
 * included file doesn't have access to the class scope.
 * 
 * @since 1.0.0
 *
 * @param string $file The full path to the file.
 */
function jpry_require_once_file( $file ) {
	if ( ! file_exists( $file ) ) {
		return;
	}

	require_once( $file );
}
