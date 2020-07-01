<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
			<footer id="site-footer" role="contentinfo" class="header-footer-group">

				<div class="section-inner">

					<div class="footer-credits">

						<p class="footer-copyright">&copy;
							<?php
							echo date_i18n(
								/* translators: Copyright date format, see https://www.php.net/date */
								_x( 'Y', 'copyright date format', 'swowptheme' )
							);
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						</p><!-- .footer-copyright -->

					</div><!-- .footer-credits -->

					<a class="to-the-top" href="#site-header">
						<span class="to-the-top-long">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'To the top %s', 'swowptheme' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-long -->
						<span class="to-the-top-short">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'Up %s', 'swowptheme' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-short -->
					</a><!-- .to-the-top -->
				
				</div><!-- .section-inner -->
				<hr/>			
				
				<div class="lt-grid-container">
  					<div class="lt-left">
					  	Stiftung Wirtschaft und Ökologie<br/>
						Bahnstrasse 18b<br/>
						8603 Schwerzenbach<br/>
					  </div>
					  <div class="lt-right">
					  	Phone: +41 43 355 58 44<br/>
						Email: swo@stiftungswo.ch<br/>
						Web: www.stiftungswo.ch<br/>
					  </div>
				</div>

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
