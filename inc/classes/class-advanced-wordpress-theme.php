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
  }
}