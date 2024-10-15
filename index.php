<?php get_template_part('header'); ?>
<div class="site-content">
  <?php
  if (have_posts()) :

    while (have_posts()) :

      the_post();
  ?>

  <article <?php post_class(); ?>>

    <header class="entry-header">
      <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
      <?php
          wp_nav_menu(array(
            'theme_location' => 'menu-1',
          ));
          ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
      <?php the_content(esc_html__('Continue reading &rarr;', 'my-custom-theme')); ?>
    </div><!-- .entry-content -->

  </article><!-- #post-## -->

  <?php
      // If comments are open or we have at least one comment, load up the comment template.
      if (comments_open() || get_comments_number()) :
        comments_template();
      endif;
    endwhile;
  else :
    ?>
  <article class="no-results">

    <header class="entry-header">
      <h1 class="page-title"><?php esc_html_e('Nothing Found', 'my-custom-theme'); ?></h1>
    </header><!-- .entry-header -->

    <div class="entry-content">
      <p><?php esc_html_e('It looks like nothing was found at this location.', 'my-custom-theme'); ?></p>
    </div><!-- .entry-content -->

  </article><!-- .no-results -->
  <?php
  endif;
  ?>
</div><!-- .site-content -->
<?php get_template_part('footer') ?>