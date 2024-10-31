<h2 class="farewell">Wie freuen uns auf dich!</h2>
<footer class="site-footer">
  <div class="wrapper-left">
    <div class="navigation-wrapper">

      <div class="navigation">
        <h3>Navigation</h3>
        <?php
        wp_nav_menu(array(
          'theme_location' => 'menu-footer-nav',
        ));
        ?>
      </div>
      <div class="navigation">
        <h3>Informationen</h3>
        <?php
        wp_nav_menu(array(
          'theme_location' => 'menu-footer-info',
        ));
        ?>
      </div>
      <div class="navigation">
        <h3>Diverses</h3>
        <?php
        wp_nav_menu(array(
          'theme_location' => 'menu-footer-div',
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
    <div class="navigation">
      <h3>Administration</h3>
      <?php
      wp_nav_menu(array(
        'theme_location' => 'menu-footer-admin',
      ));
      ?>
    </div>
    <div class="wp-block-buttons is-layout-flex wp-block-buttons-is-layout-flex">
      <?php
      $menu = wp_nav_menu(array(
        'theme_location' => 'menu-footer-buttons',
        'container' => false,
        'items_wrap' => '%3$s', // This removes the <ul> wrapper
        'link_before' => '<div class="wp-block-button is-style-fill style-plain"><a class="wp-block-button__link wp-element-button">',
        'link_after' => '</a></div>',
      ));

      $menu = preg_replace('/style-plain/', 'style-destructive', $menu, 1);

      echo $menu;
      ?>
    </div>
    <div class="legal">
      <p>Copyright © 2024 Hüttenbau Oberi<br>
        | Alle Rechte vorbehalten</p>
      <?php
      wp_nav_menu(array(
        'theme_location' => 'menu-footer-legal',
      ));
      ?>
    </div>
  </div>
</footer>
<div class="accent-bar"><span>&copy; <?php echo date("Y"); ?> - Hüttenbau Oberi</span></div>
</body>

</html>