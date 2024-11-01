<?php get_template_part('header'); ?>
<main class="page-design">
  <section class="hero-section">
    <span><?php echo get_theme_mod('huettenbau-oberi-page-hero-span', __('Welcome on', 'huettenbau-oberi-theme')); ?></span>
    <h1><?php echo get_theme_mod('huettenbau-oberi-page-hero-title', __('Page Title', 'huettenbau-oberi-theme')); ?>
    </h1>
    <div class="image-overlay"></div>
  </section>
  <section class="section1">
    <h2>
      <?php echo get_theme_mod('huettenbau-oberi-page-section1-title', __('Section Title', 'huettenbau-oberi-theme')); ?>
    </h2>
    <?php echo get_theme_mod('huettenbau-oberi-page-section1-text', __('<p>Section Text</p>', 'huettenbau-oberi-theme')); ?>
  </section>
  <section class="section2">
    <h2>
      <?php echo get_theme_mod('huettenbau-oberi-page-section2-title', __('Section Title', 'huettenbau-oberi-theme')); ?>
    </h2>
    <?php echo get_theme_mod('huettenbau-oberi-page-section2-text', __('<p>Section Text</p>', 'huettenbau-oberi-theme')); ?>
  </section>
  <section class="section3">
    <h2>
      <?php echo get_theme_mod('huettenbau-oberi-page-section3-title', __('Section Title', 'huettenbau-oberi-theme')); ?>
    </h2>
    <?php echo get_theme_mod('huettenbau-oberi-page-section3-text', __('<p>Section Text</p>', 'huettenbau-oberi-theme')); ?>
  </section>
  <section class="section4">
    <h2>
      <?php echo get_theme_mod('huettenbau-oberi-page-section4-title', __('Section Title', 'huettenbau-oberi-theme')); ?>
    </h2>
    <?php echo get_theme_mod('huettenbau-oberi-page-section4-text', __('<p>Section Text</p>', 'huettenbau-oberi-theme')); ?>
  </section>
</main>
<?php get_template_part('footer') ?>