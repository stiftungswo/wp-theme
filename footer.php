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

						

					</div><!-- .footer-credits -->

					
				
				</div><!-- .section-inner -->
				<div class="swo-footer-wrap">
					<div class="swo-footer">
						<div class="footer-left">
							Stiftung Wirtschaft und Ökologie<br/>
							Bahnstrasse 18b<br/>
							8603 Schwerzenbach
						</div>
						<div class="footer-logo"><img src="/wp-content/uploads/2020/06/SWO_straight-pdf (2).png"/></div>
						<div class="footer-right">
							Telefon: +41 43 355 58 44<br/>
							E-Mail: swo@stiftungswo.ch<br/>
							Web: www.stiftungswo.ch
						</div>
					</div>
					<div class="footer-copyright">
						© 2010 -
						<?php
							echo date_i18n(
								/* translators: Copyright date format, see https://www.php.net/date */
								_x( 'Y', 'copyright date format', 'swowptheme' )
							);
							?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						&#124;<a href="/datenschutzerklaerung/">Unsere AGBs</a>
						<!-- Credits NICHT entfernen, dies wurde so abgesprochen. Danke. Sie können mich hier konntaktieren: me@davidkessler.ch oder 076 308 42 22 -->
						&#124;<a target="_blank" href="https://davidkessler.ch">Entwicklung: davidkessler.ch</a>
					</div>
				</div>
			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
