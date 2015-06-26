<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package cmh3258
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer white bg-black"  role="contentinfo">
    <div class="">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'cmh3258' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'cmh3258' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'cmh3258' ), 'cmh3258', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
  </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
