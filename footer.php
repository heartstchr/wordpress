<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage manageScripts
 * @since manageScripts 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the manageScripts footer text for footer customization.
				 *
				  * @since manageScripts 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
			<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" width="50px" height="22px"/>
			<a><?php printf( __( '&copy; 2015 %s', 'manageScripts' ), 'manageAdwords.com' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
