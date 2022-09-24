<?php

/**
 * Theme File
 *
 * @package Advanced WordPress Theme Development
 */

function pedagogia_concursos_enqueue_scripts()
{
  wp_enqueue_style('stylesheet', get_stylesheet_uri() . '/style.css', [], filemtime(get_template_directory() . '/style.css'), 'all');
}
add_action('wp_enqueue_scripts', 'pedagogia_concursos_enqueue_scripts');
