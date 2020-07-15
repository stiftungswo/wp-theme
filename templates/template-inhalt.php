<?php
/**
 * Template Name: Inhalt
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();

?>

<div class=content-container>
    <?php

if ( have_posts() ) {

    while ( have_posts() ) {
        the_post();

        get_template_part( 'template-parts/content' );
    }
}
    ?>

</div>





<?php get_footer(); ?>