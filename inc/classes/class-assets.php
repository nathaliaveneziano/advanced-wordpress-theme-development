<?php

/**
 * Enqueue theme assets.
 *
 * @package Advanced WordPress Theme Development
 */

namespace ADVANCED_WORDPRESS_THEME\Inc;

use ADVANCED_WORDPRESS_THEME\Inc\Traits\Singleton;

class Assets
{
  use Singleton;

  protected function __construct()
  {
    // load class.
    $this->setup_hooks();
  }

  protected function setup_hooks()
  {
    // actions and filters

    /**
     * Actions.
     */
    add_action('wp_enqueue_scripts', [$this, 'register_styles']);
    add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
  }

  public function register_styles()
  {

    // Register Styles
    wp_register_style('style', get_stylesheet_uri(), [], filemtime(ADVANCED_WORDPRESS_DIR_PATH . '/style.css'), 'all');
    wp_register_style('bootstrap', ADVANCED_WORDPRESS_DIR_URI . '/assets/src/css/bootstrap.min.css', [], false, 'all');

    // Enqueue Styles
    wp_enqueue_style('style');
    wp_enqueue_style('bootstrap');
  }

  public function register_scripts()
  {
    // Register Scripts
    wp_register_script('main', ADVANCED_WORDPRESS_DIR_URI . '/assets/main.js', ['jquery'], filemtime(ADVANCED_WORDPRESS_DIR_PATH . '/assets/main.js'), true);
    wp_register_script('bootstrap', ADVANCED_WORDPRESS_DIR_URI . '/assets/src/js/bootstrap.bundle.min.js', ['jquery'], false, true);

    // Enqueue Scripts
    wp_enqueue_script('main');
    wp_enqueue_script('bootstrap');
  }
}
