<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="<https://gmpg.org/xfn/11>">
  <?php wp_head(); ?>
</head>
<header class="site-header">
  <p class="site-title">
    <a href="<?php echo esc_url(home_url('/')); ?>">
      <?php
      if (function_exists('the_custom_logo')) {
        the_custom_logo();
      } else {
        bloginfo('name');
      }
      ?>
    </a>
  </p>
  <?php
  wp_nav_menu(array(
    'theme_location' => 'menu-1',
  ));
  ?>
</header><!-- .site-header -->