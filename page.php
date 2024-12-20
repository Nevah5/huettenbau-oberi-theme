<?php get_template_part('header'); ?>
<div class="content-wrapper">
  <div class="site-content">
    <?php
    if (have_posts()) :
      while (have_posts()) :
        the_post();
    ?>
        <article <?php post_class(); ?>>
          <header class="entry-header">
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
          </header><!-- .entry-header -->
          <div class="entry-content">
            <?php the_content(); ?>
          </div><!-- .entry-content -->
        </article><!-- #post-## -->
    <?php
        if (comments_open() || get_comments_number()) :
          comments_template();
        endif;
      endwhile;
    else :
      get_template_part('content-none');
    endif;
    ?>
  </div><!-- .site-content -->
</div>
<?php get_template_part('footer') ?>