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

/** IN THE FUTURE: while statements for as many menu boxes as needed: */

?>

<main id="site-content" role="main">
    

        <section class="breweries" id="breweries">
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

</main><!-- #site-content -->

<?php 

get_footer();

?>