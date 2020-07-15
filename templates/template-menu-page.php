<?php
/**
 * Template Name: Menu Seite Template
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

/** IN THE FUTURE: while statements for as many menu boxes as needed: */

?>

<main id="site-content" role="main">
    
<div class="limit-content-width">

        <section class="boxes-container-menu">
        <ul>

        <?php

        get_template_part( 'template-parts/menu-box' );
        get_template_part( 'template-parts/menu-box' );
        get_template_part( 'template-parts/menu-box' );
        get_template_part( 'template-parts/menu-box' );
        get_template_part( 'template-parts/menu-box' );
        get_template_part( 'template-parts/menu-box' );

        ?>

    </ul>
    </section>

</div>

</main><!-- #site-content -->

<?php 

get_footer();

?>