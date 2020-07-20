<?php
/**
 * Template Name: Startseite Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
get_header();

get_template_part('template-parts/front-header');

?>

<div class="limit-content-width">

    <div class="front-page-title-text classic-text">
        <h1>Unsere Bereiche</h1>
        <hr/>
        <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis qui iste, cupiditate rerum dolorum quo tempore cumque excepturi deleniti tenetur, 
        culpa ut ducimus ex molestias ipsa sint voluptas laboriosam dolores?
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis qui iste, cupiditate rerum dolorum quo tempore cumque excepturi deleniti tenetur, 
        culpa ut ducimus ex molestias ipsa sint voluptas laboriosam dolores?
        <p/>

    </div>

    <div class="grid-container-fp1">

        <div class="Front-page-top-right">

            <a class=picture-link href="url">
                <div class="Bildung-forschung-entwicklung">
                    <div class="onpicture">Bildung, Forschung, Entwicklung</div>
                </div>
            </a>

            <a class=picture-link href="url">
                <div class="Bau">
                    <div class="onpicture">Bau</div>
                </div>
            </a>

            <a class=picture-link href="url">
                <div class="Zivildienst">         
                    <div class="onpicture">Zivildienst</div>
                </div>
            </a>

            <a class=picture-link href="url">
                <div class="Integration">
                    <div class="onpicture">Integration</div>
                </div>
            </a>

        </div>
        <div class="Front-page-top-left"></div>
    </div>


    <div class="front-page-title-text classic-text">
        <h1>Unsere Projekte</h1>
        <hr/>
    </div>

    <section class="boxes-container-menu">
        <ul>

            <?php

            get_template_part( 'template-parts/project-box' );
            get_template_part( 'template-parts/project-box' );
            get_template_part( 'template-parts/project-box' );
            get_template_part( 'template-parts/project-box' );

            ?>

        </ul>
    </section>
</div>

<?php

get_footer();

?>
