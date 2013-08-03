<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
		<div id="social">
			<a href="https://facebook.com/CalPolyIWDSA" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook-32.png" class="si-facebook" /></a>
			<a href="https://plus.google.com/u/0/114126299739473374383" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/googleplus-32.png" class="si-google-plus" /></a>
			<a href="http://www.linkedin.com/groups?gid=4116734" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linkedin-32.png" class="si-linkedin" /></a>
			<a href="https://twitter.com/CalPolyIWDSA" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/twitter-32.png" class="si-twitter" /></a>
		</div><!-- #social-networking -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>