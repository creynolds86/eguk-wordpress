<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _egukbasetheme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="entry-meta">
    <span class="entry-date"><?php echo esc_html( get_the_date('j') ); ?></span>
    <span class="entry-month"><?php echo esc_html( get_the_date('M') ); ?></span>
  </div><!-- .entry-meta -->
  <header class="entry-header">
    <?php the_title( '<h1 class="entry-title"><a href="' . get_permalink() . '">', '</a></h1>' ); ?>
  </header><!-- .entry-header -->

  <div class="entry-summary">
    <?php the_excerpt(); ?>
    <?php
      wp_link_pages( array(
        'before' => '<div class="page-links">' . __( 'Pages:', '_egukbasetheme' ),
        'after'  => '</div>',
      ) );
    ?>
  </div><!-- .entry-content -->

  <?php if (current_user_can('edit_posts')) : ?>
  <footer class="entry-footer">
    <?php edit_post_link( __( 'Edit post', '_egukbasetheme' ), '<p class="edit-link">', '</p>' ); ?>
  </footer><!-- .entry-footer -->
  <?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
