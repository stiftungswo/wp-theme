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
        </p>

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
        <div class="Front-page-top-left classic-text">
            <p>Ullamcorper in eget a diam, neque. Et sagittis cursus arcu blandit faucibus. Convallis tristique purus sit nunc. Pretium nulla condimentum iaculis nisi.
Sed nisl facilisis non lectus imperdiet. Integer pretium varius vulputate est magna nunc.</p>
        </div>
    </div>


    <div class="front-page-title-text classic-text">
        <h1>Unsere Projekte</h1>
        <hr/>
    </div>

    <section class="boxes-container-menu">
        <ul>
            <?php
            $args = array(
              'post_parent' => 8334 //parent of all "Project-Posts"
            );
            //gets all posts with "Project" as parent
            $children = get_children($args, $output = OBJECT ); 
            $i=0;
            ?>
            <?php foreach($children as $postNr => $postObjectByNr) : 
            
                include get_template_directory() . '/template-parts/project-box.php';
                
                $i++;
                endforeach; 
            ?>

        </ul>

        <div style="width=100%;text-align:center;"><button class="swo-button" onclick="extendBoxes()" id="showAllBoxesButton">Alle Projekte Anzeigen</button></div>

    </section>
</div>

<script type="text/javascript">
    function extendBoxes() {
        var moreBoxes = document.getElementsByClassName("wrap-boxes-hidden");
        var btnText = document.getElementById("showAllBoxesButton");
        if (moreBoxes[1].style.display !== 'block') {
            btnText.innerHTML = "Weniger Projekte Anzeigen";
            for (var i = 0; i < moreBoxes.length; i++) {
                moreBoxes[i].style.display = 'block';
            }
        } else {
            btnText.innerHTML = "Alle Projekte Anzeigen";
            for (var i = 0; i < moreBoxes.length; i++) {
                moreBoxes[i].style.display = 'none';
            }
        }
    }
</script>

<?php

get_footer();

?>
