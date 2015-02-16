<?php
/**
 * The final step is to enqueue the parent and child theme stylesheets. Note that the previous
 * method was to import the parent theme stylesheet using @import: this is no longer best practice.
 *
 * The first line of your child theme's functions.php will be an opening PHP tag (<?php),
 * after which you can enqueue your parent and child theme stylesheets. The following example function
 * will only work if your Parent Theme uses only one main style.css to hold all of the css.
 * If your theme has more than one .css file (eg. ie.css, style.css, main.css) then you will have
 * to make sure to maintain all of the Parent Theme dependencies.
 *
 */

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}