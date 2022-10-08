<?php

/**
 * Register Menus.
 *
 * @package Advanced WordPress Theme Development
 */

namespace ADVANCED_WORDPRESS_THEME\Inc;

use ADVANCED_WORDPRESS_THEME\Inc\Traits\Singleton;

class Menus
{
  use Singleton;

  protected function __construct()
  {
    // load class.
    $this->setup_hooks();
  }

  protected function setup_hooks()
  {
    /**
     * Actions.
     */
    add_action('init', [$this, 'register_menus']);
  }

  public function register_menus()
  {
    register_nav_menus([
      'advanced-theme-header-menu' => esc_html__('Header Menu', 'advanced-theme'),
      'advanced-theme-footer-menu' => esc_html__('Footer Menu', 'advanced-theme'),
    ]);
  }
}
