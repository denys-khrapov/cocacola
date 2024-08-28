<?php
$section_classes = 'cta-section full-width';
$title = get_field('title');
$form_shortcode = get_field('form_shortcode');
$image_id = get_field('image_id', false, false);
$image_url = wp_get_attachment_url($image_id);
$background_style = $image_url ? "background-image: url('" . esc_url($image_url) . "'); background-size: cover; background-position: center;" : '';
?>

<?php if ($title || $form_shortcode || $image_id) : ?>
  <section class="<?php echo $section_classes; ?> section" style="<?php echo esc_attr($background_style); ?>">
    <div class="container">
      <h2 class="title"><?php echo wp_kses_post($title); ?></h2>

      <?php echo do_shortcode($form_shortcode); ?>
    </div>
  </section>
<?php endif; ?>