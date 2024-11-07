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
    <div class="carousel" style="--amount-carousel-images: 6;">
      <figure class="carousel__preview">
        <img src="https://huettenbau-oberi.ch/wp-content/uploads/2023/11/IMG_3717-scaled.jpeg" alt="Code Preview">
        <figcaption>
          <p>A fancy code preview just as a placeholder.</p>
        </figcaption>
      </figure>
      <div class="carousel__nav" style="--slider-index: 0;">
        <button class="carousel__button carousel__button--prev">
          <img src="<?php esc_url(get_parent_theme_file_uri('assets/icons/arrow-left.svg')) ?>" alt="Previous icon" />
        </button>
        <div class="carousel__img carousel__img--active"
          style="background-image: url('https://huettenbau-oberi.ch/wp-content/uploads/2023/11/IMG_3717-scaled.jpeg')"
          src="https://huettenbau-oberi.ch/wp-content/uploads/2023/11/IMG_3717-scaled.jpeg" caption="Code 1"></div>
        <div class="carousel__img"
          style="background-image: url('https://huettenbau-oberi.ch/wp-content/uploads/2023/11/IMG_3717-scaled.jpeg')"
          src="https://huettenbau-oberi.ch/wp-content/uploads/2023/11/IMG_3717-scaled.jpeg" caption="Vertical 2"></div>
        <div class="carousel__img"
          style="background-image: url('https://huettenbau-oberi.ch/wp-content/uploads/2023/11/IMG_3717-scaled.jpeg')"
          src="https://huettenbau-oberi.ch/wp-content/uploads/2023/11/IMG_3717-scaled.jpeg" caption="Code 3"></div>
        <div class="carousel__img"
          style="background-image: url('https://huettenbau-oberi.ch/wp-content/uploads/2023/11/IMG_3717-scaled.jpeg')"
          src="https://huettenbau-oberi.ch/wp-content/uploads/2023/11/IMG_3717-scaled.jpeg" caption="Code 4"></div>
        <div class="carousel__img"
          style="background-image: url('https://huettenbau-oberi.ch/wp-content/uploads/2023/11/IMG_3717-scaled.jpeg')"
          src="https://huettenbau-oberi.ch/wp-content/uploads/2023/11/IMG_3717-scaled.jpeg" caption="Code 5"></div>
        <div class="carousel__img"
          style="background-image: url('https://huettenbau-oberi.ch/wp-content/uploads/2023/11/IMG_3717-scaled.jpeg')"
          src="https://huettenbau-oberi.ch/wp-content/uploads/2023/11/IMG_3717-scaled.jpeg" caption="Code 6"></div>
        <div class="carousel__img"
          style="background-image: url('https://huettenbau-oberi.ch/wp-content/uploads/2023/11/IMG_3717-scaled.jpeg')"
          src="https://huettenbau-oberi.ch/wp-content/uploads/2023/11/IMG_3717-scaled.jpeg" caption="Code 7"></div>
        <div class="carousel__img"
          style="background-image: url('https://huettenbau-oberi.ch/wp-content/uploads/2023/11/IMG_3717-scaled.jpeg')"
          src="https://huettenbau-oberi.ch/wp-content/uploads/2023/11/IMG_3717-scaled.jpeg" caption="Code 8"></div>
        <div class="carousel__img"
          style="background-image: url('https://huettenbau-oberi.ch/wp-content/uploads/2023/11/IMG_3717-scaled.jpeg')"
          src="https://huettenbau-oberi.ch/wp-content/uploads/2023/11/IMG_3717-scaled.jpeg" caption="Code 9"></div>
        <div class="carousel__img"
          style="background-image: url('https://huettenbau-oberi.ch/wp-content/uploads/2023/11/IMG_3717-scaled.jpeg')"
          src="https://huettenbau-oberi.ch/wp-content/uploads/2023/11/IMG_3717-scaled.jpeg" caption="Code 10"></div>
        <div class="carousel__img"
          style="background-image: url('https://huettenbau-oberi.ch/wp-content/uploads/2023/11/IMG_3717-scaled.jpeg')"
          src="https://huettenbau-oberi.ch/wp-content/uploads/2023/11/IMG_3717-scaled.jpeg" caption="Code 10"></div>
        <div class="carousel__img"
          style="background-image: url('https://huettenbau-oberi.ch/wp-content/uploads/2023/11/IMG_3717-scaled.jpeg')"
          src="https://huettenbau-oberi.ch/wp-content/uploads/2023/11/IMG_3717-scaled.jpeg" caption="Code 10"></div>
        <button class="carousel__button carousel__button--next">
          <img src="<?php esc_url(get_parent_theme_file_uri('assets/icons/arrow-right.svg')) ?>" alt="Next icon" />
        </button>
      </div>
    </div>
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