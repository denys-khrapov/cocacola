<?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>
<div class="container">
  <?php if (is_front_page()) : ?>
    <div id="fullpage">
      <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    </div>
  <?php else : ?>
    <?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
  <?php endif; ?>
</div>
<?php get_footer();