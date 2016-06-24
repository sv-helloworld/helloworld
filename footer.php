<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package helloworld
 */

?>
				</div>
			</div>
		</div>
	</section><!-- / Content -->

	<footer id="footer" class="site-footer" role="contentinfo">
		<div class="container-fluid">
			<div class="container-inner">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
						<span>&copy; <?php echo date("Y"); ?> Studievereniging "Hello World"</span>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 md-text-right lg-text-right">
						<div class="site-info">
							<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'helloworld' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'helloworld' ), 'WordPress' ); ?></a>
							<span class="sep"> | </span>
							<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'helloworld' ), '"Hello World"', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- / Footer -->
</div><!-- / Page -->

<?php wp_footer(); ?>

</body>
</html>
