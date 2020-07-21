<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<header class="entry-header has-text-align-center bereich-header">

	<div class="entry-header-inner section-inner medium">

		<?php
			/**
			 * Allow child themes and plugins to filter the display of the categories in the entry header.
			 *
			 * @since Twenty Twenty 1.0
			 *
			 * @param bool   Whether to show the categories in header, Default true.
			 */
		$show_categories = apply_filters( 'swowptheme_show_categories_in_entry_header', true );

        ?><div class="bereich-title classic-text"><?php
        
        the_title( '<h1>', '</h1>' );

        ?>
    
        <p>In laoreet ut pretium nunc ac aliquam aliquam turpis. Lectus libero eget erat quis. Amet aliquam augue sit eget montes, nibh integer neque. Duis pretium leo risus volutpat nulla sollicitudin.
Enim, pellentesque a integer pharetra. Ultricies vel sit cras consequat a neque, suspendisse. Platea condimentum ut sapien interdum ac vitae orci.</p></div><?php


		if ( has_excerpt() && is_singular() ) {
			?>

			<div class="intro-text section-inner max-percentage<?php echo $intro_text_width; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>">
				<?php the_excerpt(); ?>
			</div>

			<?php
		}

		// Default to displaying the post meta.
		swowptheme_the_post_meta( get_the_ID(), 'single-top' );
		?>

	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
