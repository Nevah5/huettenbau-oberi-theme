<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="<https://gmpg.org/xfn/11>">
  <?php wp_head(); ?>
</head>

<body>
  <div class="preview-overlay">
    <div class="preview-overlay__close"></div>
    <svg class="preview-overlay__close-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
      <path d="M0 0h24v24H0z" fill="none" />
      <path
        d="M18.3 5.71a.996.996 0 0 0-1.41 0L12 10.59 7.11 5.7A.996.996 0 1 0 5.7 7.11L10.59 12 5.7 16.89a.996.996 0 1 0 1.41 1.41L12 13.41l4.89 4.89a.996.996 0 1 0 1.41-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4z" />
      <img class="preview-overlay__img" src="" alt="">
  </div>
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
        'theme_location' => 'menu-nav',
      ));
      ?>
    </div>
  </header><!-- .site-header -->