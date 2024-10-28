<?php
register_nav_menus(
  array(
    'menu-1' => __('Navigation Bar', 'huettenbau-oberi-theme')
  )
);

function huettenbau_oberi_theme_enqueue()
{
  wp_enqueue_style('huettenbau-oberi-theme', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'huettenbau_oberi_theme_enqueue');

add_theme_support('custom-logo');
