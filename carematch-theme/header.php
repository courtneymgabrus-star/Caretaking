<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav id="site-nav" role="navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'carematch' ); ?>">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo" aria-label="<?php bloginfo( 'name' ); ?>">
    Care<span>Match</span>
  </a>

  <?php if ( has_nav_menu( 'primary' ) ) : ?>
    <?php
    wp_nav_menu( array(
      'theme_location' => 'primary',
      'menu_class'     => 'nav-links',
      'container'      => false,
      'depth'          => 1,
    ) );
    ?>
  <?php else : ?>
    <ul class="nav-links">
      <li><a href="#how">How it Works</a></li>
      <li><a href="#for-who">For Families</a></li>
      <li><a href="#caregivers">For Caregivers</a></li>
      <li><a href="#mission">Our Mission</a></li>
      <li><a href="#waitlist" class="nav-cta">Join Waitlist</a></li>
    </ul>
  <?php endif; ?>
</nav>
