<?php wp_footer() ?>

        </div><!-- #content -->
    <footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'demo-starter-theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'demo-starter-theme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'demo-starter-theme' ), 'demo-starter-theme', '<a href="http://underscores.me/">shivam sharma</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
        </div> <!-- #footer -->

</body>
</html>