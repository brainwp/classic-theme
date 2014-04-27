<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Classic Theme
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="site-description"><?php bloginfo( 'description' ); ?></div>	
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'classic-theme' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'classic-theme' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'classic-theme' ), 'Classic Theme', '<a href="http://brasa.art.br" rel="designer">Brasa</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</div> <!-- .content-definition  -->

</body>
</html>
