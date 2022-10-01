<?php

/**
 * Theme File
 *
 * @package Advanced WordPress Theme Development
 */

use ADVANCED_WORDPRESS_THEME\Inc\ADVANCED_WORDPRESS_THEME;

if (!defined('ADVANCED_WORDPRESS_DIR_PATH')) {
  define('ADVANCED_WORDPRESS_DIR_PATH', untrailingslashit(get_template_directory()));
}

require_once ADVANCED_WORDPRESS_DIR_PATH . '/inc/helpers/autoloader.php';

function advanced_wordpress_theme_instance()
{
  \ADVANCED_WORDPRESS_THEME\Inc\ADVANCED_WORDPRESS_THEME::get_instance();
}
advanced_wordpress_theme_instance();

function advanced_wordpress_theme_enqueue_scripts()
{
  // Register Styles
  wp_register_style('style', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
  wp_register_style('bootstrap', get_template_directory_uri() . '/assets/src/css/bootstrap.min.css', [], false, 'all');

  // Register Scripts
  wp_register_script('main', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);
  wp_register_script('bootstrap', get_template_directory_uri() . '/assets/src/js/bootstrap.bundle.min.js', ['jquery'], false, true);

  // Enqueue Styles
  wp_enqueue_style('style');
  wp_enqueue_style('bootstrap');

  // Enqueue Scripts
  wp_enqueue_script('main');
  wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'advanced_wordpress_theme_enqueue_scripts');
