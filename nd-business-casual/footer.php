<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Business Casual
 */
?>

  </div><!-- #content -->

  <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <p>
            <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'business-casual' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'business-casual' ), 'WordPress' ); ?></a>
            <span class="sep"> | </span>
            <?php printf( __( 'Theme: %1$s by %2$s.', 'business-casual' ), 'Business Casual', '<a href="http://newdev.co/" rel="designer">Crissoca</a>' ); ?>
          </p>
        </div>
      </div>
    </div><!-- .site-info -->
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
