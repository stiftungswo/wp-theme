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
        <div class="bereich-left"></div>
        <div class="bereich-right classic-text">
            <h5 class="no-serif-heading">Feld- Zivis</h5>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis qui iste, cupiditate rerum dolorum quo tempore cumque excepturi deleniti tenetur, 
                culpa ut ducimus ex molestias ipsa sint voluptas laboriosam dolores?</p>
            <ul class="feature-list">
                <li><span>&#10003;</span>   Revitalisierung von Fliess- und Stillgewässern</li>
                <li><span>&#10003;</span>	Begleitung von Schulklassen bei Umwelteinsätzen</li>
                <li><span>&#10003;</span>	Heckenpflege</li>
                <li><span>&#10003;</span>	Revitalisierung von Fliess- und Stillgewässern</li>
            </ul>
            <br>
            <a href="#" class="swo-button zivi-braun" style="color: #61330E !important;
	border: 2px solid #61330E;">Jetzt Feld- Zivi Werden!</a>
        </div>
    </div>
</div>

</main><!-- #site-content -->

<?php 

get_footer();

?>