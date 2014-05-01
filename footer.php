<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Classic Theme
 */
?>


</div><!-- #page -->
<div class="clear"></div>
</div><!-- .geral -->
	
	<footer class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="direitos">Todos os direitos reservados</div>	

			
			<div id="redes">
				<div id="facebook">
					<a class="a-redes" href="<?php echo of_get_option( 'mo_facebook' ); ?>"></a>
				</div><!-- #facebook -->
				
				<div id="twitter">
					<a class="a-redes" href="<?php echo of_get_option( 'mo_twitter' ); ?>"></a>
				</div><!-- #twitter-->
			</div><!-- #redes -->
		</div><!-- .site-info -->
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
