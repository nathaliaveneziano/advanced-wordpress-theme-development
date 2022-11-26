<?php

/**
 * Register Meta Boxes.
 *
 * @package Advanced WordPress Theme Development
 */

namespace ADVANCED_WORDPRESS_THEME\Inc;

use ADVANCED_WORDPRESS_THEME\Inc\Traits\Singleton;

class Meta_Boxes
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
    add_action('add_meta_boxes', [$this, 'add_custom_meta_box']);
  }

  public function add_custom_meta_box()
  {
    $screens = ['post'];
    foreach ($screens as $screen) {
      add_meta_box(
        'hide-page-title',                        // Unique ID
        __('Hide page title', 'advanced-theme'),  // Box title
        [$this, 'custom_meta_box_html'],          // Content callback, must be of type callable
        $screen,                                   // Post type
        'side'
      );
    }
  }

  public function custom_meta_box_html($post)
  {
    $value = get_post_meta($post->ID, '_hide_page_title', true);
?>
    <label for="advanced-theme-field">
      <?php esc_html_e('Hide the page title', 'advanced-theme'); ?>
    </label>
    <select name="advanced-theme_field" id="advanced-theme-field" class="postbox">
      <option value="">
        <?php esc_html_e('Select', 'advanced-theme'); ?>
      </option>
      <option value="yes" <?php selected($value, 'Yes'); ?>>
        <?php esc_html_e('Yes', 'advanced-theme'); ?>
      </option>
      <option value="no" <?php selected($value, 'No'); ?>>
        <?php esc_html_e('No', 'advanced-theme'); ?>
      </option>
    </select>
<?php
  }
}
