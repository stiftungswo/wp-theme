<?php
/**
 * Template Name: Bereich Inhaltsseite Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();

get_template_part( 'template-parts/bereich-header' );

?>

<main id="site-content" role="main">

<div class="limit-content-width bereich-container">

    <div class="left-right">
    </div>


    <div class="front-page-title-text classic-text">
        <h1>Titel zu Thema in diesem Bereich</h1>
        <hr/>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis qui iste, cupiditate rerum dolorum quo tempore cumque excepturi deleniti tenetur, 
            culpa ut ducimus ex molestias ipsa sint voluptas laboriosam dolores?
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis qui iste, cupiditate rerum dolorum quo tempore cumque excepturi deleniti tenetur, 
            culpa ut ducimus ex molestias ipsa sint voluptas laboriosam dolores?
        </p>

    </div>


</div>

</main><!-- #site-content -->

<?php 

get_footer();

?>