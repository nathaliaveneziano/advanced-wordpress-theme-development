<?php

/**
 * Main template file.
 *
 * @package Advanced WordPress Theme Development
 */

get_header();
?>

<div id="primary">
  <main id="main" class="site-main mt-5" role="main">
    <?php
    if (have_posts()) {
    ?>
      <div class="container">
        <?php
        if (is_home() && !is_front_page()) {
        ?>
          <header class="mb-5">
            <h1 class="page-title">
              <!-- screen-reader-text -->
              <?php single_post_title(); ?>
            </h1>
          </header>
        <?php
        }
        ?>

        <div class="row">
          <?php
          $index = 0;
          $number_columns = 3;

          // Start the loop.
          while (have_posts()) : the_post();
            if ($index % $number_columns === 0) {
          ?>
              <div class="col-lg-4 col-md-6 col-sm-12">
              <?php
            }

              ?>
              <h3><?php the_title(); ?></h3>
              <div><?php the_excerpt(); ?></div>
              <?php

              $index++;

              if ($index !== 0 && $index % $number_columns === 0) {
              ?>
              </div>
          <?php
              }
            endwhile;
          ?>
        </div>
      </div>
    <?php
    }
    ?>
  </main>
</div>

<?php
get_footer();
