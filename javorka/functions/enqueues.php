<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

function javorka_enqueue_scripts() {
  // CSS
  wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', false );
  wp_enqueue_style( 'javorka', get_stylesheet_directory_uri() . '/style.css', [], '0.1.33' );

  // JS
  wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', false );
  wp_enqueue_script( 'javorka', get_template_directory_uri() . '/assets/js/main.js', [], '0.1.0', true );
}
 
add_action( 'wp_enqueue_scripts', 'javorka_enqueue_scripts' );