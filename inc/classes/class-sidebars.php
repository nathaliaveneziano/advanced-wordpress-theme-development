<?php

/**
 * Theme Sidebars.
 *
 * @package Advanced WordPress Theme Development
 */

namespace ADVANCED_WORDPRESS_THEME\Inc;

use ADVANCED_WORDPRESS_THEME\Inc\Traits\Singleton;

class Sidebars
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
    add_action('widgets_init', [$this, 'register_sidebars']);
    add_action('widgets_init', [$this, 'register_clock_widget']);
  }

  public function register_sidebars()
  {
    register_sidebar([
      'name'          => __('Sidebar', 'advanced-theme'),
      'id'            => 'sidebar-1',
      'description'   => __('Main sidebar', 'advanced-theme'),
      'before_widget' => '<div id="%1$s" class="widget widget-sidebar %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ]);

    register_sidebar([
      'name'          => __('Footer', 'advanced-theme'),
      'id'            => 'sidebar-2',
      'description'   => __('Main sidebar', 'advanced-theme'),
      'before_widget' => '<div id="%1$s" class="widget widget-footer cell column %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ]);
  }

  public function register_clock_widget()
  {
    register_widget('ADVANCED_WORDPRESS_THEME\Inc\Clock_Widget');
  }
}
