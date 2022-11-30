<?php

/**
 * Template for entry content.
 * To be used inside WordPress The Loop.
 *
 * @package Advanced WordPress Theme Development
 */
?>

<div class="entry-content">
  <?php
  if (is_single()) {
    the_content(
      sprintf(
        wp_kses(
          __('Continue reading %s <span class="meta-nav">&rArr;</span>', 'advanced-theme'),
          [
            'span' => ['class' => []]
          ]
        ),
        the_title('<span class="screen-reader-text">', '</span>', false)
      )
    );
  } else {
    advanced_theme_the_excerpt(150);
    echo advanced_theme_excerpt_more();
  }

  wp_link_pages([
    'before' => '<div class="page-links">' . esc_html__('Pages:', 'advanced-theme'),
    'after' => '</div>',
  ])
  ?>
</div>
