<?php

/**
 * Theme File
 *
 * @package Advanced WordPress Theme Development
 */

if (!defined('ADVANCED_WORDPRESS_DIR_PATH')) {
  define('ADVANCED_WORDPRESS_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('ADVANCED_WORDPRESS_DIR_URI')) {
  define('ADVANCED_WORDPRESS_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

require_once ADVANCED_WORDPRESS_DIR_PATH . '/inc/helpers/autoloader.php';
require_once ADVANCED_WORDPRESS_DIR_PATH . '/inc/helpers/template-tags.php';

function advanced_wordpress_get_theme_instance()
{
  \ADVANCED_WORDPRESS_THEME\Inc\ADVANCED_WORDPRESS_THEME::get_instance();
}
advanced_wordpress_get_theme_instance();
