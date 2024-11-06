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

function huettenbau_oberi_theme_customize_register($wp_customize)
{
  // Add a section
  $wp_customize->add_section('huettenbau-oberi-page-section', array(
    'title' => __('Main Page', 'huettenbau-oberi-theme'),
    'priority' => 30,
  ));

  // Add a setting
  $wp_customize->add_setting('huettenbau-oberi-page-hero-span', array(
    'default' => __('Wilkommen beim', 'huettenbau-oberi-theme'),
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_setting('huettenbau-oberi-page-hero-title', array(
    'default' => __('Hüttenbau Oberi', 'huettenbau-oberi-theme'),
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_setting('huettenbau-oberi-page-hero-image', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_setting('huettenbau-oberi-page-section1-title', array(
    'default' => __('Section Title', 'huettenbau-oberi-theme'),
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_setting('huettenbau-oberi-page-section1-text', array(
    'default' => __('Example Text', 'huettenbau-oberi-theme'),
  ));
  $wp_customize->add_setting('huettenbau-oberi-page-section2-title', array(
    'default' => __('Section Title', 'huettenbau-oberi-theme'),
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_setting('huettenbau-oberi-page-section2-text', array(
    'default' => __('Example Text', 'huettenbau-oberi-theme'),
  ));
  $wp_customize->add_setting('huettenbau-oberi-page-section3-title', array(
    'default' => __('Section Title', 'huettenbau-oberi-theme'),
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_setting('huettenbau-oberi-page-section3-text', array(
    'default' => __('Example Text', 'huettenbau-oberi-theme'),
  ));
  $wp_customize->add_setting('huettenbau-oberi-page-section4-title', array(
    'default' => __('Section Title', 'huettenbau-oberi-theme'),
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_setting('huettenbau-oberi-page-section4-text', array(
    'default' => __('Example Text', 'huettenbau-oberi-theme'),
  ));

  // Add a control
  $wp_customize->add_control('huettenbau-oberi-page-hero-span-control', array(
    'label' => __('Hero (pre)', 'huettenbau-oberi-theme'),
    'section' => 'huettenbau-oberi-page-section',
    'settings' => 'huettenbau-oberi-page-hero-span',
    'type' => 'text',
  ));
  $wp_customize->add_control('huettenbau-oberi-page-hero-title-control', array(
    'label' => __('Hero Title', 'huettenbau-oberi-theme'),
    'section' => 'huettenbau-oberi-page-section',
    'settings' => 'huettenbau-oberi-page-hero-title',
    'type' => 'text',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'huettenbau-oberi-page-hero-image-control', array(
    'label' => __('Hero Image', 'huettenbau-oberi-theme'),
    'section' => 'huettenbau-oberi-page-section',
    'settings' => 'huettenbau-oberi-page-hero-image',
  )));
  $wp_customize->add_control('huettenbau-oberi-page-section1-title-control', array(
    'label' => __('Section 1 - Title', 'huettenbau-oberi-theme'),
    'section' => 'huettenbau-oberi-page-section',
    'settings' => 'huettenbau-oberi-page-section1-title',
    'type' => 'text',
  ));
  $wp_customize->add_control('huettenbau-oberi-page-section1-text-control', array(
    'label' => __('Section 1 - Text', 'huettenbau-oberi-theme'),
    'section' => 'huettenbau-oberi-page-section',
    'settings' => 'huettenbau-oberi-page-section1-text',
    'type' => 'text',
  ));
  $wp_customize->add_control('huettenbau-oberi-page-section2-title-control', array(
    'label' => __('Section 2 - Title', 'huettenbau-oberi-theme'),
    'section' => 'huettenbau-oberi-page-section',
    'settings' => 'huettenbau-oberi-page-section2-title',
    'type' => 'text',
  ));
  $wp_customize->add_control('huettenbau-oberi-page-section2-text-control', array(
    'label' => __('Section 2 - Text', 'huettenbau-oberi-theme'),
    'section' => 'huettenbau-oberi-page-section',
    'settings' => 'huettenbau-oberi-page-section2-text',
    'type' => 'text',
  ));
  $wp_customize->add_control('huettenbau-oberi-page-section3-title-control', array(
    'label' => __('Section 3 - Title', 'huettenbau-oberi-theme'),
    'section' => 'huettenbau-oberi-page-section',
    'settings' => 'huettenbau-oberi-page-section3-title',
    'type' => 'text',
  ));
  $wp_customize->add_control('huettenbau-oberi-page-section3-text-control', array(
    'label' => __('Section 3 - Text', 'huettenbau-oberi-theme'),
    'section' => 'huettenbau-oberi-page-section',
    'settings' => 'huettenbau-oberi-page-section3-text',
    'type' => 'text',
  ));
  $wp_customize->add_control('huettenbau-oberi-page-section4-title-control', array(
    'label' => __('Section 4 - Title', 'huettenbau-oberi-theme'),
    'section' => 'huettenbau-oberi-page-section',
    'settings' => 'huettenbau-oberi-page-section4-title',
    'type' => 'text',
  ));
  $wp_customize->add_control('huettenbau-oberi-page-section4-text-control', array(
    'label' => __('Section 4 - Text', 'huettenbau-oberi-theme'),
    'section' => 'huettenbau-oberi-page-section',
    'settings' => 'huettenbau-oberi-page-section4-text',
    'type' => 'text',
  ));
}
add_action('customize_register', 'huettenbau_oberi_theme_customize_register');

function huettenbau_oberi_theme_customize_register_enqueue()
{
  wp_enqueue_style('huettenbau-oberi-theme', get_stylesheet_uri());

  // Set link icons background images
  $internal_link_icon = esc_url(get_parent_theme_file_uri('assets/icons/internal-icon.svg'));
  $external_link_icon = esc_url(get_parent_theme_file_uri('assets/icons/external-icon.svg'));
  $download_link_icon = esc_url(get_parent_theme_file_uri('assets/icons/download-icon.svg'));

  $link_icons_css = "
    section.hero-section {
      background-image: url('" . get_theme_mod('huettenbau-oberi-page-hero-image', '') . "');
    }

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
  wp_enqueue_script('carousel', get_template_directory_uri() . 'carousel.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'huettenbau_oberi_theme_customize_register_enqueue');

add_theme_support('custom-logo');
