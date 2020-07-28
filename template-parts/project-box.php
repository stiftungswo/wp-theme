<?php
/**
 * Displays menu boxes
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<?php

    //gets the name, description and image-post of the project by meta data
    $projectName = get_the_title( $postNr );
    $projectDescription = get_post_meta( $postNr, 'projektbeschreibung' );
    $projectImagePostNr = get_post_meta( $postNr, 'projektbild' );
    //gets permanentLink to the img url from the Post
    $projectImagePermalink = get_the_guid( $projectImagePostNr[0] );


    $specialclass = "";
    if($i >= 4) {
        $specialclass = "wrap-boxes-hidden";
    }

    if (!empty($projectName) && !empty($projectDescription[0]) && !empty($projectImagePostNr[0])) {

?>

<li class="wrap-boxes <?php echo $specialclass; ?>">
    <?php 
    echo '<div class="imageDiv img-background" style="background-image: url(' . $projectImagePermalink . ')" alt="Several hands holding beer glasses"></div>';
    ?>
    <div class="imageDiv bottomDiv classic-text">
        <h1>
            <?php echo $projectName; ?>
        </h1>
        <p>
            <?php echo $projectDescription[0]; ?>
        </p>
        <?php
            //permalink to foward to the specific project page
            $postPermalink = get_permalink( $post = $postNr, $leavename = false );
            echo '<a class="svg-button" href="' . $postPermalink . '">Weiterlesen</a>';
        ?>
    </div>
</li>

<?php $i++; }