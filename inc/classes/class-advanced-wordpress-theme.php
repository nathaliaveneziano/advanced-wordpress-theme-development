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
    Menus::get_instance();
    Meta_Boxes::get_instance();
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

  /**
   * Setup theme.
   *
   * @return void
   */
  public function setup_theme()
  {
    /**
     * Let WordPress manage the document title.
     * By adding theme support, we declare taht this theme does not use a
     * hard-coded <title> tag in the document head, and except WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /**
     * Custom logo.
     *
     * @see Adding custom logo
     * @link http://developer.wordpress.org/themes/functionality/custom-logo/#adding-custom-logo-support-to-your-theme
     */
    add_theme_support('custom-logo', [
      'header-text' => ['site-title', 'site-description'],
      'height' => 50,
      'width' => 100,
      'flex-height' => true,
      'flex-width' => true,
    ]);

    /**
     * Adds Custom background panel to customizer.
     *
     * @see Enable Custom Backgrounds
     * @link https://developer.wordpress.org/themes/functionality/custom-backgrounds/#enable-custom-backgrounds
     */
    add_theme_support('custom-background', [
      'default-color' => '#ffffff',
      'default-image' => '',
      'default-repeat' => 'no-repeat',
    ]);

    /**
     * Enable suport for Post Thumbnails on posts and pages.
     *
     * Adding this will allow you to select the featured image on posts and pages.
     *
     * @link http://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Register image sizes.
     */
    add_image_size('featured-thumbnail', 350, 233, true);

    // Add theme support for selective refresh for widgets.
    /**
     * WordPress 4.5 includes a new Customizer framework called selective refresh
     *
     * Selective refresh is a hybrid preview mechanism that has the performance benefit of not having to refresh the entire preview window.
     *
     * @link https://make.wordpress.org/core/2016/03/22/implementing-selective-refresh-support-for-widgets/
     */
    add_theme_support('customize-selective-refresh-widgets');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /**
     * Switch default core markup for search form, comment form, comment-list, gallery, caption, script and style
     * to output valid HTML5.
     */
    add_theme_support('html5', [
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'script',
      'style',
    ]);
    add_editor_style();


    // Gutenberg theme support.

    /**
     * Some blocks in Gutenberg like tables, quotes, separator benefit from structural styles (margin, padding, border etc…)
     * They are applied visually only in the editor (back-end) but not on the front-end to avoid the risk of conflicts with the styles wanted in the theme.
     * If you want to display them on front to have a base to work with, in this case, you can add support for wp-block-styles, as done below.
     * @see Theme Styles.
     * @link https://make.wordpress.org/core/2018/06/05/whats-new-in-gutenberg-5th-june/, https://developer.wordpress.org/block-editor/developers/themes/theme-support/#default-block-styles
     */
    add_theme_support('wp-block-styles');


    /**
     * Some blocks such as the image block have the possibility to define
     * a “wide” or “full” alignment by adding the corresponding classname
     * to the block’s wrapper ( alignwide or alignfull ). A theme can opt-in for this feature by calling
     * add_theme_support( 'align-wide' ), like we have done below.
     *
     * @see Wide Alignment
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#wide-alignment
     */
    add_theme_support('align-wide');

    global $content_width;
    if (!isset($content_width)) {
      $content_width = 1240;
    }
  }
}
