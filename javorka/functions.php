<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


$includes = [
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/clean-head.php',							// Eliminates useless meta tags, emojis, etc            
	'/enqueues.php', 							// Enqueue scripts and styles.     
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/picostrap/picostrap/issues/567
	'/editor.php',                          // Load Editor functions.
  '/disable-comments.php',  // Disable wordpress comments
  '/back-to-top.php' // Back to top component
  // '/lightbox.php' // Lightbox gallery component
];

foreach ( $includes as $file ) {
	require_once get_template_directory() . '/functions' . $file;
}

