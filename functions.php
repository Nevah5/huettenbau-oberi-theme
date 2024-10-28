<?php
register_nav_menus(
  array(
    'menu-1' => __('Primary Menu', 'huettenbau-oberi-theme')
  )
);

function my_custom_theme_enqueue()
{
  wp_enqueue_style('huettenbau-oberi-theme', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue');

add_theme_support('custom-logo');
