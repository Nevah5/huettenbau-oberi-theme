<?php
register_nav_menus(
  array(
    'menu-nav' => __('Navigation Bar', 'huettenbau-oberi-theme'),
    'menu-footer-nav' => __('Footer - Navigation', 'huettenbau-oberi-theme'),
    'menu-footer-info' => __('Footer - Informationen', 'huettenbau-oberi-theme'),
    'menu-footer-div' => __('Footer - Diverses', 'huettenbau-oberi-theme'),
    'menu-footer-legal' => __('Footer - Legal', 'huettenbau-oberi-theme'),
    'menu-footer-admin' => __('Footer - Administration', 'huettenbau-oberi-theme'),
    'menu-footer-buttons' => __('Footer - Buttons', 'huettenbau-oberi-theme'),
  )
);

function huettenbau_oberi_theme_enqueue()
{
  wp_enqueue_style('huettenbau-oberi-theme', get_stylesheet_uri());

  // Set link icons background images
  $internal_link_icon = esc_url(get_parent_theme_file_uri('assets/icons/internal-icon.svg'));
  $external_link_icon = esc_url(get_parent_theme_file_uri('assets/icons/external-icon.svg'));
  $download_link_icon = esc_url(get_parent_theme_file_uri('assets/icons/download-icon.svg'));

  $link_icons_css = "
    p a.link-internal::before,
    p a.link-internal-before::before,
    p a.link-internal-after::after {
      background-image: url('{$internal_link_icon}');
    }
    p a.link-external::before,
    p a.link-external-before::before,
    p a.link-external-after::after {
      background-image: url('{$external_link_icon}');
    }
    p a.link-download::before,
    p a.link-download-before::before,
    p a.link-download-after::after {
      background-image: url('{$download_link_icon}');
    }
  ";
  wp_add_inline_style('huettenbau-oberi-theme', $link_icons_css);
}

add_action('wp_enqueue_scripts', 'huettenbau_oberi_theme_enqueue');

add_theme_support('custom-logo');
