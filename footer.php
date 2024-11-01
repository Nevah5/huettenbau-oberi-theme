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
    <?php
    if (function_exists('wp_nav_menu')) {
      $menu = wp_nav_menu([
        'theme_location' => 'menu-footer-buttons',
        'container_class' => 'button-wrapper',
        'echo' => false,
      ]);
      $menu = str_replace('class="menu-item', 'class="menu-item style-plain', $menu);
      $menu = preg_replace('/style-plain/', 'style-destructive', $menu, 1);
      echo $menu;
    }
    ?>
    <div class="legal">
      <p>&copy; 2024 - Hüttenbau Oberi<br />
        Alle Rechte vorbehalten</p>
      <?php
      wp_nav_menu(array(
        'theme_location' => 'menu-footer-legal',
      ));
      ?>
    </div>
  </div>
</footer>
<div class="accent-bar"><span>&copy; <?php echo date("Y"); ?> - Hüttenbau Oberi</span></div>
<?php wp_footer(); ?>
</body>

<!--
    |\__/,|   (`\
  _.|o o  |_   ) )
-(((---(((--------
Designed by Noah Geeler
-->

</html>