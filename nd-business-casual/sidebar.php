<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Business Casual
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
  return;
}
?>

<div id="secondary" class="widget-area col-md-3 col-md-offset-1 box" role="complementary">
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
