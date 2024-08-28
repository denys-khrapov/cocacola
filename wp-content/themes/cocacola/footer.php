</main>
</div>
</div>
<?php
$footer_copyright = get_theme_mod( 'footer_copyright' );
$footer_logo      = get_theme_mod( 'footer_logo' );
?>

<footer class="footer">

  <?php if ( $footer_logo ) : ?>
    <div class="footer-logo" itemscope itemtype="http://schema.org/Brand">
      <a
        href="<?php echo home_url( '/' ); ?>"><?php echo wp_get_attachment_image( $footer_logo, 'full' ); ?></a>
    </div>
  <?php endif; ?>


  <?php if ( has_nav_menu( 'footer-navigation' ) ) : ?>
    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'footer-navigation',
      'menu_id' => 'footer-navigation',
      'menu_class' => 'footer-navigation',
      'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    ) ); ?>
  <?php endif; ?>

  <?php if ( $footer_copyright ) : ?>
    <p class="copyright">
      <?php echo str_replace( '[year]', date( 'Y' ), $footer_copyright ); ?>
    </p>
  <?php endif; ?>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>