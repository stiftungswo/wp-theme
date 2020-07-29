<?php
/**
 * Template Name: Team Seite Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();

get_template_part( 'template-parts/entry-header' );

if ( ! is_search() ) {
    get_template_part( 'template-parts/featured-image' );
}

/** IN THE FUTURE: while statements for as many menu boxes for team members as needed: */

?>

<main id="site-content" role="main">
    
<div class="limit-content-width">

        <section class="boxes-container-team">

        <?php 
        
            the_post();

            the_content( __( 'Continue reading', 'swowptheme' ) ); ?>

        <ul>

            <?php

            get_template_part( 'template-parts/team-box' );
            get_template_part( 'template-parts/team-box' );
            get_template_part( 'template-parts/team-box' );
            get_template_part( 'template-parts/team-box' );
            get_template_part( 'template-parts/team-box' );
            get_template_part( 'template-parts/team-box' );

            ?>

        </ul>
    </section>

</div>

</main><!-- #site-content -->

<?php 

get_footer();

?>