<?php
/**
 * Check and setup theme's default settings
 *
 * @package javorka5
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'javorka_setup_theme_default_settings' ) ) {
	/**
	 * Store default theme settings in database.
	 */
	function javorka_setup_theme_default_settings() {
		$defaults = javorka_get_theme_default_settings();
		$settings = get_theme_mods();
		foreach ( $defaults as $setting_id => $default_value ) {
			// Check if setting is set, if not set it to its default value.
			if ( ! isset( $settings[ $setting_id ] ) ) {
				set_theme_mod( $setting_id, $default_value );
			}
		}
	}
}

if ( ! function_exists( 'javorka_get_theme_default_settings' ) ) {
	/**
	 * Retrieve default theme settings.
	 *
	 * @return array
	 */
	function javorka_get_theme_default_settings() {
		$defaults = array(
			'javorka_posts_index_style' => 'default',   // Latest blog posts style.
			'javorka_sidebar_position'  => 'right',     // Sidebar position.
			'javorka_container_type'    => 'container', // Container width.
		);

		/**
		 * Filters the default theme settings.
		 *
		 * @param array $defaults Array of default theme settings.
		 */
		return apply_filters( 'javorka_theme_default_settings', $defaults );
	}
}

// as per https://livecanvas.com/faq/which-themes-with-livecanvas/
function lc_theme_is_livecanvas_friendly(){}

// expose to the livecanvas plugin the active Bootstrap version
function lc_theme_bootstrap_version(){ return 5; }

// Limits a number of characters shown in excerpt
function custom_excerpt_length( $length ) { return 15; }
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Changes default excerpt ending to a custom one
function javorka_excerpt_more($more) { return '&hellip;'; }
add_filter( 'excerpt_more', 'javorka_excerpt_more');

add_action( 'wp_head', 'javorka_wp_head' );
if ( !function_exists( 'javorka_wp_head' ) ) {
  function javorka_wp_head() {
    ?>
    <style>
      body.logged-in .navbar.fixed-top { top: 32px !important; }
    </style>
    <?php
  }
}