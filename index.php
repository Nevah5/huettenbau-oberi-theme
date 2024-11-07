<?php
function getCarousel()
{
  $images = "";
  for ($i = 1; $i <= 20; $i++) {
    $imgUrl = get_theme_mod('huettenbau-oberi-page-carousel-image' . $i, '');
    $imgCaption = get_theme_mod('huettenbau-oberi-page-carousel-image' . $i . '-caption-text', __('', 'huettenbau-oberi-theme'));

    if ($i === 1 && $imgUrl === '') {
      $exampleUrl = "https://photographylife.com/wp-content/uploads/2014/09/Nikon-D750-Image-Samples-2.jpg";
      $images .= "<div class=\"carousel__img\"
            style=\"background-image: url('" . $exampleUrl . "')\"
            src=\"" . $exampleUrl . "\" caption=\"Beispiel Image, bitte ersetzen!\"></div>";
      continue;
    }
    if ($imgUrl === '') {
      continue;
    }
    $images .= "<div class=\"carousel__img\"
          style=\"background-image: url('" . $imgUrl . "')\"
          src=\"" . $imgUrl . "\" caption=\"" . $imgCaption . "\"></div>";
  }
  return "
      <div class=\"carousel\" style=\"--amount-carousel-images: 6;\">
      <figure class=\"carousel__preview\">
        <img src=\"\" alt=\"\">
        <figcaption>
          <p></p>
        </figcaption>
      </figure>
      <div class=\"carousel__nav\" style=\"--slider-index: 0;\">
        <button class=\"carousel__button carousel__button--prev\"></button>
        " . $images . "
        <button class=\"carousel__button carousel__button--next\"></button>
      </div>
    </div>
  ";
}

?>
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
    <?= getCarousel() ?>
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