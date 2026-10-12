<?php
/**
 * Theme basic setup
 *
 * @package javorka5
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Set the content width based on the theme's design and stylesheet.
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

add_action( 'after_setup_theme', 'javorka_setup' );

if ( ! function_exists( 'javorka_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function javorka_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on javorka, use a find and replace
		 * to change 'javorka' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'javorka', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			[
				'primary' => __( 'Hlavná navigácia', 'javorka' ),
				'secondary' => __( 'Sekundárna navigácia', 'javorka' ),
        'footer-1' => __( 'Navigácia v pätičke #1', 'javorka' ),
        'footer-2' => __( 'Navigácia v pätičke #2', 'javorka' ),
        'footer-3' => __( 'Navigácia v pätičke #3', 'javorka' ),
      ]
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			[
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
      ]
		);

		/*
		 * Adding Thumbnail basic support
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Adding support for Widget edit icons in customizer
		 */
		add_theme_support( 'customize-selective-refresh-widgets' );

		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
			)
		);

		// WordPress handles background uploads, preview, and safe output.
		add_theme_support( 'custom-background', array(
			'default-color'      => 'ffffff',
			'default-image'      => get_template_directory_uri() . '/assets/images/background-new.png',
			'default-position-x' => 'center',
			'default-position-y' => 'center',
			'default-size'       => 'cover',
			'default-repeat'     => 'no-repeat',
			'default-attachment' => 'fixed',
		) );

		// Set up the WordPress Theme logo feature.
		add_theme_support( 'custom-logo' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Check and setup theme default settings.
		javorka_setup_theme_default_settings();

	}
}

// FIX WORDPRESS CATEGORY / ARCHIVE TITLES /////////
add_filter( 'get_the_archive_title', function ($title) {
  if ( is_category() ) {
    $title = single_cat_title( '', false );
  } elseif ( is_tag() ) {
    $title = single_tag_title( '', false );
  } elseif ( is_author() ) {
    $title = '<span class="vcard">' . get_the_author() . '</span>' ;
  }
  return $title;
});

// RESPONSIVE VIDEO EMBEDS
if ( !function_exists( 'bootstrap_wrap_oembed' ) ) {
  function bootstrap_wrap_oembed( $html ){
    $html = preg_replace( '/(width|height)="\d*"\s/', "", $html ); // Strip width and height #1
    return'<div class="embed-responsive embed-responsive-16by9">'.$html.'</div>'; // Wrap in div element and return #3 and #4
  }
}
add_filter( 'embed_oembed_html','bootstrap_wrap_oembed',10,1);
