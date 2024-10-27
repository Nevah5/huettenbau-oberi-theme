<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="<https://gmpg.org/xfn/11>">
  <?php wp_head(); ?>
</head>

<body>
  <header class="site-header">
    <p class="site-title">
      <?php
      if (function_exists('the_custom_logo')) {
        the_custom_logo();
      } else {
      ?>
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <?= bloginfo('name'); ?>
        </a>
      <?php
      }
      ?>
    </p>
    <div class="navigation-menu">
      <input type="checkbox" name="nav-toggle" id="nav-toggle">
      <label class="nav-toggle-label" for="nav-toggle">
        <span></span>
      </label>
      <?php
      wp_nav_menu(array(
        'theme_location' => 'menu-1',
      ));
      ?>
    </div>
  </header><!-- .site-header -->