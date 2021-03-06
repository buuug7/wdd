<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package seo_wp
 */

?>
</div>
</div><!-- #content -->
<footer id="colophon" class="site-footer page-footer" role="contentinfo" itemscope="" itemtype="http://schema.org/WPFooter">
	<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : ?>
		<div class="container">
			<div class="row">
				<div id="sidebar-footer-1" class="widget-area col m4 s12" role="complementary">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div>
				<!-- #sidebar-footer-1 -->
				<div id="sidebar-footer-2" class="widget-area col m4 s12" role="complementary">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div>
				<!-- #sidebar-footer-2 -->
				<div id="sidebar-footer-3" class="widget-area col m4 s12" role="complementary">
					<?php dynamic_sidebar( 'footer-3' ); ?>
				</div>
				<!-- #sidebar-footer-3 -->
			</div>
		</div>
	<?php endif; ?>
	<div class="site-info footer-copyright">
		<div class="container">
			<?php printf( esc_html__( '%s by WPArena.', 'seo-wp' ), '<a href="https://wparena.com/">' . __( 'SEO WP Theme', 'seo-wp' ) . '</a>' ); ?>
		</div>
		<!-- .container -->
	</div>

	<!-- .site-info -->
</footer><!-- #colophon -->

<div class="fixed-action-btn to-top">
	<a class="btn-floating btn-large waves-effect waves-light">
		<i class="mdi-hardware-keyboard-arrow-up"></i>
	</a>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
