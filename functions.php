<?php
/**
 * Theme bootstrap
 *
 * @package Yuki Elegant
 */

// don't call the file directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'YUKI_ELEGANT_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'YUKI_ELEGANT_VERSION', '1.0.1' );
}

if ( ! defined( 'YUKI_ELEGANT_PATH' ) ) {
	define( 'YUKI_ELEGANT_PATH', trailingslashit( get_stylesheet_directory() ) );
}

if ( ! defined( 'YUKI_ELEGANT_URL' ) ) {
	define( 'YUKI_ELEGANT_URL', trailingslashit( get_stylesheet_directory_uri() ) );
}

if ( ! defined( 'YUKI_ELEGANT_ASSETS_URL' ) ) {
	define( 'YUKI_ELEGANT_ASSETS_URL', YUKI_ELEGANT_URL . 'assets/' );
}

if ( ! function_exists( 'yuki_elegant_image_url' ) ) {
	/**
	 * Get image url
	 *
	 * @param $image
	 *
	 * @return string
	 */
	function yuki_elegant_image_url( $image ) {
		return YUKI_ELEGANT_ASSETS_URL . 'images/' . $image;
	}
}

// require customizer options
require_once YUKI_ELEGANT_PATH . 'customizer.php';
// require theme starter content
require_once YUKI_ELEGANT_PATH . 'starter-content.php';
