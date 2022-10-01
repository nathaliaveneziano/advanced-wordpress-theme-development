<?php

/**
 * Bootstraps the Theme.
 *
 * @package Advanced WordPress Theme Development
 */

namespace ADVANCED_WORDPRESS_THEME\Inc;

use ADVANCED_WORDPRESS_THEME\Inc\Traits\Singleton;

class ADVANCED_WORDPRESS_THEME {
  use Singleton;

  protected function __construct() {
    // load class.
    $this->set_hooks();
  }

protected function set_hooks() {
  // actions and filters
}
}
