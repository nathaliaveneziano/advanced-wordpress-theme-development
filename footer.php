<?php

/**
 * Footer theme.
 *
 * @package Advanced WordPress Theme Development
 */
?>

<footer>
  <?php
  if (is_active_sidebar('sidebar-2')) {
  ?>
    <aside>
      <?php dynamic_sidebar('sidebar-2'); ?>
    </aside>
  <?php
  }
  ?>
  <div class="copyright">
    <span>Feito com &hearts; por <a href="https://www.nathaliaveneziano.dev">Nathália Veneziano</a></span>
  </div>

</footer>
</div>
</div>

<?php wp_footer(); ?>
</body>

</html>
