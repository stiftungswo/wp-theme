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
<!------------------------------------------------------------------------------------------------- Upper Footer --------------------------------------------------------------------->
				<div class="grid-container">
					
					<div class="a"><a href="">Kontakt</a></div>
  					<div class="b"><a href="">Lern- & Wissensplattform</a></div>
  					<div class="c"><a href="">Job & Praktika</a></div>
  					<div class="logo"><img src="/wp-content/uploads/2020/06/SWO_straight-pdf (2).png"/></div>
  					<div class="d"><a href="">Zivildienst Intern</a></div>
  					<div class="f"><a href="">AGBs</a></div>
  					<div class="g"><a href="">Datenschutzerklärung</a></div>

				</div>
				
<!------------------------------------------------------------------------------------------------- Lower Footer --------------------------------------------------------------------->
				<hr style="height:1px; border:none; background-color:#000; width:90%; margin-bottom:3.5em; margin-top:3em; position: center">

				<div class="lt-grid-container">
  					<div class="lt-left">
					  	Stiftung Wirtschaft und Ökologie<br/>
						Bahnstrasse 18b<br/>
						8603 Schwerzenbach<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						© 2010 -
						<?php
							echo date_i18n(
								/* translators: Copyright date format, see https://www.php.net/date */
								_x( 'Y', 'copyright date format', 'swowptheme' )
							);
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
					  </div>
					  <div class="lt-right">
					  	Phone: +41 43 355 58 44<br/>
						Email: swo@stiftungswo.ch<br/>
						Web: www.stiftungswo.ch<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<a href="/datenschutzerklaerung/">Unsere AGBs</a>

					  </div>
				</div>

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
