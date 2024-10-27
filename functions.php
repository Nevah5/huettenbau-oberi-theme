<?php
register_nav_menus(
  array(
    'menu-1' => __('Primary Menu', 'my-custom-theme')
  )
);

function my_custom_theme_enqueue()
{
  wp_enqueue_style('my-custom-theme', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue');

add_theme_support('custom-logo');
