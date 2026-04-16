<footer role="contentinfo">
  <div>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo">
      Care<span>Match</span>
    </a>
    <div class="footer-tagline"><?php esc_html_e( 'A Life Outside the Lines Company', 'carematch' ); ?></div>
  </div>

  <?php if ( has_nav_menu( 'footer' ) ) : ?>
    <?php
    wp_nav_menu( array(
      'theme_location' => 'footer',
      'menu_class'     => 'footer-links',
      'container'      => false,
      'depth'          => 1,
    ) );
    ?>
  <?php else : ?>
    <ul class="footer-links">
      <li><a href="#how">How it Works</a></li>
      <li><a href="#for-who">For Families</a></li>
      <li><a href="#caregivers">For Caregivers</a></li>
      <li><a href="#mission">Mission</a></li>
      <li><a href="#waitlist">Join Waitlist</a></li>
    </ul>
  <?php endif; ?>

  <div class="footer-copy">
    &copy; <?php echo esc_html( gmdate( 'Y' ) ); ?>
    <?php bloginfo( 'name' ); ?> &middot; <?php esc_html_e( 'Life Outside the Lines, LLC', 'carematch' ); ?>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
