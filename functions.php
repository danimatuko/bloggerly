<?php
// Variables

// Includes
include get_theme_file_path('/inc/enqueue.php');
include get_theme_file_path('/inc/bloggery_head.php');

// Hooks
add_action('wp_enqueue_scripts', 'bloggery_styles');
add_action('wp_head', 'bloggery_fonts_preconnect', 5);
