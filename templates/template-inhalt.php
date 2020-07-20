<?php
/**
 * Template Name: Inhaltsseite Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();

?>

<?php get_template_part( 'template-parts/entry-header' );?>

<div class="limit-content-width">
    <div class=content-container>


        
        <div class="main-inhalt">
            <?php the_post();?>
            <?php get_template_part( 'template-parts/content-2' ); ?>
        </div>



        <div class="side-inhalt">
                <h5><?php echo get_post_meta( get_the_ID(), 'Projektstart', true ); ?></h5>
                <p>Projektstart<p>

                <h5><?php echo get_post_meta( get_the_ID(), 'Bereich', true ); ?></h5>
                <p>Bereich<p>

                <h5><?php echo get_post_meta( get_the_ID(), 'Ort', true ); ?></h5>
                <p>Ort<p>

                <hr/>

                <p><?php echo get_post_meta( get_the_ID(), 'Hashtags', true ); ?><p/>

                <hr/>

                <h5>Kontakt</h5>
                <p><?php echo get_post_meta( get_the_ID(), 'Kontakt', true ); ?></p>

        </div>

    </div>
</div>




<?php get_footer(); ?>