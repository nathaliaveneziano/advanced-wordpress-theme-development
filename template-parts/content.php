<?php

/**
 * Content template.
 *
 * @package Advanced WordPress Theme Development
 */

get_header();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('mb-5'); ?>>
  <?php get_template_part('template-parts/components/blog/entry-header'); ?>
  <?php get_template_part('template-parts/components/blog/entry-meta'); ?>
  <?php get_template_part('template-parts/components/blog/entry-content'); ?>
  <?php get_template_part('template-parts/components/blog/entry-footer'); ?>
</article>

<!-- <h3><?php the_title(); ?></h3>
<div><?php the_excerpt(); ?></div> -->
