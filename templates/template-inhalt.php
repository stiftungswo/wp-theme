<?php
/**
 * Template Name: Inhalt Template
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


        
        <div class="main-inhalt">
            <?php the_post();?>
            <?php get_template_part( 'template-parts/content-2' ); ?>
        </div>
</div>
