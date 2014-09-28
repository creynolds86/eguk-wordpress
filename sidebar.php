<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package _egukbasetheme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) )
	return;
?>

<section id="secondary" class="widget-area col-md-3" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</section><!-- #secondary -->
