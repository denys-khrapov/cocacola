<?php
$section_classes = 'tabs-section full-width';
$title = get_field('title');
$subtitle = get_field('subtitle');
$image_id = get_field('background_image_id', false, false);
$image_url = wp_get_attachment_url($image_id);
$background_style = $image_url ? "background-image: url('" . esc_url($image_url) . "'); background-size: cover; background-position: center;" : '';
?>

<?php if ($title || $subtitle || have_rows('tabs') || $image_id) : ?>
  <section class="<?php echo $section_classes; ?> section" style="<?php echo esc_attr($background_style); ?>">
    <div class="container">
      <div class="col-left">
        <?php if ($title) : ?>
          <h2 class="title"><?php echo esc_html($title); ?></h2>
        <?php endif; ?>

        <?php if ($subtitle) : ?>
          <h3 class="subtitle"><?php echo esc_html($subtitle); ?></h3>
        <?php endif; ?>

        <?php if (have_rows('tabs')): ?>
          <ul class="tabs-nav">
            <?php while (have_rows('tabs')): the_row();
              $tab_image_id = get_sub_field('tab_image_id', false);
              ?>
              <li class="nav-item">
                <?php echo wp_get_attachment_image($tab_image_id, 'thumbnail_150'); ?>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>

      </div>
      <?php if (have_rows('tabs')): ?>
        <div class="col-right">
          <div class="tabs-content">
            <?php while (have_rows('tabs')): the_row();
              $tab_title = get_sub_field('tab_title');
              $tab_text = get_sub_field('tab_text');
              $tab_image_id = get_sub_field('tab_image_id', false);
              ?>
              <div class="tab-item">
                <?php if ($tab_title || $tab_text) : ?>
                  <div class="col-text">
                    <?php if ($tab_title) : ?>
                      <h4 class="tab-title"><?php echo esc_html($tab_title); ?></h4>
                    <?php endif; ?>

                    <?php if ($tab_text) : ?>
                      <div class="text-holder"><?php echo wp_kses_post($tab_text); ?></div>
                    <?php endif; ?>
                  </div>
                <?php endif; ?>

                <?php if ($tab_image_id) : ?>
                  <div class="col-image">
                    <?php echo wp_get_attachment_image($tab_image_id, 'thumbnail_150'); ?>
                  </div>
                <?php endif; ?>

              </div>
            <?php endwhile; ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </section>
<?php endif; ?>