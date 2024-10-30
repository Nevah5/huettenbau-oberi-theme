<h2 class="farewell">Wie freuen uns auf dich!</h2>
<footer class="site-footer">
  <div class="wrapper-left">
    <div class="navigation-wrapper">

      <div class="navigation">
        <h3>Navigation</h3>
        <?php
        wp_nav_menu(array(
          'theme_location' => 'menu-2',
        ));
        ?>
      </div>
      <div class="navigation">
        <h3>Informationen</h3>
        <?php
        wp_nav_menu(array(
          'theme_location' => 'menu-3',
        ));
        ?>
      </div>
      <div class="navigation">
        <h3>Diverses</h3>
        <?php
        wp_nav_menu(array(
          'theme_location' => 'menu-4',
        ));
        ?>
      </div>
    </div>
    <div class="logo">
      <?php
      if (function_exists('the_custom_logo')) {
      ?>
      <div class="site-logo">
        <?= the_custom_logo() ?>
      </div>
      <?php
      } else {
      ?>
      <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
        <?= bloginfo('name'); ?>
      </a>
      <?php
      }
      ?>

    </div>
  </div>
  <div class="wrapper-right">
    <div class="legal">
      <p>Copyright © 2024 Hüttenbau Oberi<br>
        | Alle Rechte vorbehalten</p>
      <?php
      wp_nav_menu(array(
        'theme_location' => 'menu-5',
      ));
      ?>
    </div>
  </div>
</footer>
</body>

</html>