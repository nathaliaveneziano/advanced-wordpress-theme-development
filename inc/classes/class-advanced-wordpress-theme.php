<?php

/**
 * Bootstraps the Theme.
 *
 * @package Advanced WordPress Theme Development
 */

namespace ADVANCED_WORDPRESS_THEME\Inc;

use ADVANCED_WORDPRESS_THEME\Inc\Traits\Singleton;

class ADVANCED_WORDPRESS_THEME
{
  use Singleton;

  protected function __construct()
  {
    // load class.
    Assets::get_instance();
    $this->setup_hooks();
  }

  protected function setup_hooks()
  {
    // actions and filters

    /**
     * Actions.
     */
    add_action('after_setup_theme', [$this, 'setup_theme']);
  }

  public function setup_theme()
  {
    add_theme_support('title-tag');
    add_theme_support('custom-logo', [
      'header-text' => ['site-title', 'site-description'],
      'height' => 50,
      'width' => 100,
      'flex-height' => true,
      'flex-width' => true,
    ]);
    add_theme_support('custom-background', [
      'default-color' => '#ffffff',
      'default-image' => '',
    ]);
  }
}
