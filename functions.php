<?php
// Variables

// Includes
include get_theme_file_path('inc/enqueue.php');
include get_theme_file_path('inc/bloggery_fonts_preconnect.php');
include get_theme_file_path('inc/bloggery_setup.php');

// Hooks
add_action('wp_enqueue_scripts', 'bloggery_styles');
// add preconnect links to the head tag
add_action('wp_head', 'bloggery_fonts_preconnect', 5);
add_action('after_setup_theme', 'bloggery_setup');
