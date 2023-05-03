<?php
/**
 * Theme bootstrap
 *
 * @package Yuki Graceful
 */

// don't call the file directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'YUKI_GRACEFUL_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'YUKI_GRACEFUL_VERSION', '1.0.0' );
}

if ( ! defined( 'YUKI_GRACEFUL_PATH' ) ) {
	define( 'YUKI_GRACEFUL_PATH', trailingslashit( get_stylesheet_directory() ) );
}

if ( ! defined( 'YUKI_GRACEFUL_URL' ) ) {
	define( 'YUKI_GRACEFUL_URL', trailingslashit( get_stylesheet_directory_uri() ) );
}

if ( ! defined( 'YUKI_GRACEFUL_ASSETS_URL' ) ) {
	define( 'YUKI_GRACEFUL_ASSETS_URL', YUKI_GRACEFUL_URL . 'assets/' );
}

if ( ! function_exists( 'yuki_graceful_image_url' ) ) {
	/**
	 * Get image url
	 *
	 * @param $image
	 *
	 * @return string
	 */
	function yuki_graceful_image_url( $image ) {
		return YUKI_GRACEFUL_ASSETS_URL . 'images/' . $image;
	}
}

// require customizer options
require_once YUKI_GRACEFUL_PATH . 'customizer.php';
// require theme starter content
require_once YUKI_GRACEFUL_PATH . 'starter-content.php';
