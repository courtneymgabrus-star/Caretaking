<?php
/**
 * Main Index Template
 * Fallback for any content not covered by a more specific template.
 *
 * @package CareMatch
 */

get_header();
?>

<main id="main-content" role="main" style="padding: 120px 60px 80px; max-width: 900px; margin: 0 auto;">

  <?php if ( have_posts() ) : ?>

    <h1 class="section-title" style="margin-bottom: 40px;">
      <?php
      if ( is_archive() ) {
        the_archive_title();
      } elseif ( is_search() ) {
        printf(
          /* translators: %s: search query */
          esc_html__( 'Search Results for: %s', 'carematch' ),
          '<span>' . get_search_query() . '</span>'
        );
      } else {
        esc_html_e( 'Latest Posts', 'carematch' );
      }
      ?>
    </h1>

    <div class="testimonial-grid" style="grid-template-columns: 1fr;">
      <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'testimonial' ); ?>>
          <h2 style="font-family: var(--font-display); font-size: 22px; margin-bottom: 12px;">
            <a href="<?php the_permalink(); ?>" style="color: var(--teal); text-decoration: none;">
              <?php the_title(); ?>
            </a>
          </h2>
          <p style="font-size: 13px; color: var(--gray); margin-bottom: 16px;">
            <?php echo esc_html( get_the_date() ); ?>
            <?php esc_html_e( 'by', 'carematch' ); ?>
            <?php the_author(); ?>
          </p>
          <div style="font-size: 15px; color: var(--charcoal); line-height: 1.7;">
            <?php the_excerpt(); ?>
          </div>
          <a href="<?php the_permalink(); ?>" class="btn-primary" style="margin-top: 20px; display: inline-flex;">
            <?php esc_html_e( 'Read More →', 'carematch' ); ?>
          </a>
        </article>
      <?php endwhile; ?>
    </div>

    <div style="margin-top: 48px;">
      <?php the_posts_pagination( array(
        'prev_text' => '← ' . esc_html__( 'Previous', 'carematch' ),
        'next_text' => esc_html__( 'Next', 'carematch' ) . ' →',
      ) ); ?>
    </div>

  <?php else : ?>

    <div class="testimonial" style="text-align: center; padding: 60px;">
      <p style="font-size: 18px; color: var(--gray);">
        <?php esc_html_e( 'Nothing found. Check back soon!', 'carematch' ); ?>
      </p>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-primary" style="margin-top: 24px; display: inline-flex;">
        <?php esc_html_e( '← Back to Home', 'carematch' ); ?>
      </a>
    </div>

  <?php endif; ?>

</main>

<?php get_footer(); ?>
