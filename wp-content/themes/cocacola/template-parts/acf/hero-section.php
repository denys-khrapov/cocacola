<?php
$section_classes = 'hero-section full-width';
$title = get_field('title');
$subtitle = get_field('subtitle');
$link = get_field('link');
$text = get_field('text');
$image_id = get_field('image_id', false, false);
?>

<?php if ($title || $subtitle || $link || $text || $image_id) : ?>
  <section class="<?php echo $section_classes; ?> section">
    <div class="container">
      <?php if ($title || $subtitle || $link) : ?>
        <div class="col-left">
          <?php if ($title) : ?>
            <h1 class="main-title"><?php echo esc_html($title); ?></h1>
          <?php endif; ?>
          <?php if ($subtitle) : ?>
            <h2 class="subtitle"><?php echo esc_html($subtitle); ?></h2>
          <?php endif; ?>

          <?php if ($link):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="btn" href="<?php echo esc_url($link_url); ?>"
               target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
          <?php endif; ?>
        </div>
      <?php endif; ?>

      <?php if ($text || $image_id) : ?>
        <div class="col-right">
          <?php if ($text) : ?>
            <div class="text-holder"><?php echo wp_kses_post($text); ?></div>
          <?php endif; ?>

          <?php if ($image_id) : ?>
            <div class="image-holder"><?php echo wp_get_attachment_image($image_id, 'thumbnail_1000'); ?></div>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>
<?php endif; ?>