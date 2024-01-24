<?php

/**
 * Enqueue styles
 *
 * Registers and enqueues necessary styles for the Bloggery theme.
 * 
 */
function bloggery_styles() {
    wp_register_style('bloggery-fonts', 'https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap', [], null);
    wp_register_style('bloggery-bootstrap-icons', get_theme_file_uri('assets/bootstrap-icons/bootstrap-icons.css'));
    wp_register_style('bloggery-main', get_theme_file_uri('assets/public/index.css'));
}

wp_enqueue_style('bloggery-fonts');
wp_enqueue_style('bloggery-bootstrap-icons');
wp_enqueue_style('bloggery-main');
