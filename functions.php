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

if (!defined('ADVANCED_WORDPRESS_BUILD_URI')) {
  define('ADVANCED_WORDPRESS_BUILD_URI', untrailingslashit(get_template_directory_uri()) . '/build');
}

if (!defined('ADVANCED_WORDPRESS_BUILD_JS_URI')) {
  define('ADVANCED_WORDPRESS_BUILD_JS_URI', untrailingslashit(get_template_directory_uri()) . '/build/js');
}

if (!defined('ADVANCED_WORDPRESS_BUILD_JS_PATH')) {
  define('ADVANCED_WORDPRESS_BUILD_JS_PATH', untrailingslashit(get_template_directory()) . '/build/js');
}

if (!defined('ADVANCED_WORDPRESS_BUILD_IMG_URI')) {
  define('ADVANCED_WORDPRESS_BUILD_IMG_URI', untrailingslashit(get_template_directory_uri()) . '/build/src/img');
}

if (!defined('ADVANCED_WORDPRESS_BUILD_CSS_URI')) {
  define('ADVANCED_WORDPRESS_BUILD_CSS_URI', untrailingslashit(get_template_directory_uri()) . '/build/css');
}

if (!defined('ADVANCED_WORDPRESS_BUILD_CSS_PATH')) {
  define('ADVANCED_WORDPRESS_BUILD_CSS_PATH', untrailingslashit(get_template_directory()) . '/build/css');
}

require_once ADVANCED_WORDPRESS_DIR_PATH . '/inc/helpers/autoloader.php';
require_once ADVANCED_WORDPRESS_DIR_PATH . '/inc/helpers/template-tags.php';

function advanced_wordpress_get_theme_instance()
{
  \ADVANCED_WORDPRESS_THEME\Inc\ADVANCED_WORDPRESS_THEME::get_instance();
}
advanced_wordpress_get_theme_instance();
