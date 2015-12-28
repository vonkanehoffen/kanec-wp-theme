<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kanec
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-widgets">
			<aside id="footer-1" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</aside><!-- .widget-area -->
			<aside id="footer-2" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'footer-2' ); ?>
			</aside><!-- .widget-area -->
			<aside id="footer-3" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'footer-3' ); ?>
			</aside><!-- .widget-area -->			
			<aside id="footer-4" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'footer-4' ); ?>
			</aside><!-- .widget-area -->
		</div>
		<div class="container">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'kanec' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'kanec' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				Theme by Kane using <a href="http://underscores.me/" rel="designer">_s</a>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
