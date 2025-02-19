<?php
/**
 * Displays the menu icon and modal
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<div class="menu-modal cover-modal header-footer-group" data-modal-target-string=".menu-modal">

	<div class="menu-modal-inner modal-inner">

		<div class="menu-wrapper section-inner">

			<div class="menu-top">
				
				<!-- <div class="swo_logo_menu">
					<img src="/wp-content/uploads/2020/06/SWO_straight-pdf (2).png"/>
				</div>-->

				<button class="toggle close-nav-toggle fill-children-current-color" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".menu-modal">
					<?php swowptheme_the_theme_svg( 'cross' ); ?>
				</button><!-- .nav-toggle -->



				<?php
				
				$mobile_menu_location = '';

				// If the mobile menu location is not set, use the primary and expanded locations as fallbacks, in that order.
				if ( has_nav_menu( 'mobile' ) ) {
					$mobile_menu_location = 'mobile';
				} elseif ( has_nav_menu( 'primary' ) ) {
					$mobile_menu_location = 'primary';
				} elseif ( has_nav_menu( 'expanded' ) ) {
					$mobile_menu_location = 'expanded';
				}
				
				if ( has_nav_menu( 'expanded' ) ) {
					
					$expanded_nav_classes = '';
					
					if ( 'expanded' === $mobile_menu_location ) {
						$expanded_nav_classes .= ' mobile-menu';
					}
					
					?>
					

					<nav class="expanded-menu<?php echo esc_attr( $expanded_nav_classes ); ?>" aria-label="<?php esc_attr_e( 'Expanded', 'swowptheme' ); ?>" role="navigation">

						<ul class="modal-menu reset-list-style">
							<?php
							if ( has_nav_menu( 'expanded' ) ) {
								
								wp_nav_menu([
									'theme_location' => 'expanded', //location from WP-Admin Menu-Settings
									'container'		 => false, //surround the "List" of Navigation with a Container
									'container_class'=> 'expanded-menu-container', //adds CSS-class to the container
									'menu_class'     => 'expanded-menu-item', //adds CSS-class to the <ul> tags
									'fallback_cb'    => false, //If the menu doesn't exist, a callback function will fire
									'depht'			 => 2, //How many levels of the hierarchy are to be included
									'items_wrap'     => '%3$s', //How the list items should be wrapped
									'show_toggles'   => true, //shows the toggle to expand an item
									'walker'		 => new Custom_Expanded_Navigation_Walker(),
									]);
								}
								?>
						</ul>

					</nav>
					
					
					

					<?php
				}

				if ( 'expanded' !== $mobile_menu_location ) {
					?>

					<nav class="mobile-menu" aria-label="<?php esc_attr_e( 'Mobile', 'swowptheme' ); ?>" role="navigation">

						<ul class="modal-menu reset-list-style">

						<?php
							
							if ( has_nav_menu( 'mobile' ) ) {
								
								wp_nav_menu([
									'theme_location' => 'mobile', //location from WP-Admin Menu-Settings
									'container'		 => false, //surround the "List" of Navigation with a Container
									'container_class'=> 'mobile-menu-container', //adds CSS-class to the container
									'menu_class'     => 'mobile-menu-item', //adds CSS-class to the <ul> tags
									'fallback_cb'    => false, //If the menu doesn't exist, a callback function will fire
									'depht'			 => 2, //How many levels of the hierarchy are to be included
									'items_wrap'     => '%3$s', //How the list items should be wrapped
									'show_toggles'   => false, //shows the toggle to expand an item
									'walker'		 => new Custom_Mobile_Navigation_Walker(),
									]);
								}
						
						?>

						</ul>

					</nav>

					<?php
				}
				?>

			</div><!-- .menu-top -->

			<div class="menu-bottom">

				<?php if ( has_nav_menu( 'social' ) ) { ?>

					<nav aria-label="<?php esc_attr_e( 'Expanded Social links', 'swowptheme' ); ?>" role="navigation">
						<ul class="social-menu reset-list-style social-icons fill-children-current-color">

							<?php
							wp_nav_menu(
								array(
									'theme_location'  => 'social',
									'container'       => '',
									'container_class' => '',
									'items_wrap'      => '%3$s',
									'menu_id'         => '',
									'menu_class'      => '',
									'depth'           => 1,
									'link_before'     => '<span class="screen-reader-text">',
									'link_after'      => '</span>',
									'fallback_cb'     => '',
								)
							);
							?>

						</ul>
					</nav><!-- .social-menu -->

				<?php } ?>

			</div><!-- .menu-bottom -->

		</div><!-- .menu-wrapper -->

	</div><!-- .menu-modal-inner -->

</div><!-- .menu-modal -->
