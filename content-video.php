<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _egukbasetheme
 */
  
  $id = get_the_ID();
  $media = get_attached_media('', $id);
?>

<?php foreach ( $media as $video ) : ?>

  <article id="video-<?php the_ID(); ?>" <?php post_class( 'col-md-4 col-sm-6' ); ?>>

    <div class="entry-content">

      <?php echo wp_get_attachment_image($video->ID, 'gallery_thumb'); ?>

      <h2><?php echo $video->post_title; ?></h2>

    </div>
    
    <div class="entry-content">
        <?php the_content(); ?>
        <?php
            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', '_egukbasetheme' ),
                'after'  => '</div>',
            ) );
        ?>
    </div><!-- .entry-content -->
  </article><!-- #post-## -->

<?php endforeach; ?>

<pre class="col-md-12"><?php print_r($media); ?></pre>
