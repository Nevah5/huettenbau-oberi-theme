<?php
register_nav_menus(
  array(
    'menu-1' => __('Navigation Bar', 'huettenbau-oberi-theme')
  )
);

function huettenbau_oberi_theme_enqueue()
{
  wp_enqueue_style('huettenbau-oberi-theme', get_stylesheet_uri());

  // Set link icons background images
  $internal_link_icon = esc_url(get_parent_theme_file_uri('assets/icons/download-icon.svg'));

  $link_icons_css = "
    p a.link-internal::before,
    p a.link-internal-before::before,
    p a.link-internal-after::after {
        background-image: url('{$internal_link_icon}');
    }
  ";
  wp_add_inline_style('huettenbau-oberi-link-icons', $link_icons_css);
}

add_action('wp_enqueue_scripts', 'huettenbau_oberi_theme_enqueue');

add_theme_support('custom-logo');
