<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="<https://gmpg.org/xfn/11>">
  <?php wp_head(); ?>
</head>

<body>
  <span id="top"></span>
  <header class="site-header">
    <?php
    if (function_exists('the_custom_logo')) {
    ?>
      <div class="site-logo">
        <?= the_custom_logo() ?>
      </div>
    <?php
    } else {
    ?>
      <a href="<?php echo esc_url(home_url('/')); ?>" class="site-title">
        <?= bloginfo('name'); ?>
      </a>
    <?php
    }
    ?>
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