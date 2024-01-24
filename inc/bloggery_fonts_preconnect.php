<?php

/**
 * Preconnect to Google Fonts.
 *
 * This function adds the necessary preconnect links to the head of the document
 * in order to establish a connection with the Google Fonts API and its resources.
 * This helps to improve the performance of loading Google Fonts on the website.
 * 
 * @return void
 */
function bloggery_fonts_preconnect() {
?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<?php
}
?>