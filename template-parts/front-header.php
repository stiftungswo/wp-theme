<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>


 <!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="frontslides fade" style="background-image: url('http://localhost:8080/wp-content/uploads/2020/06/844198.jpg');">
  <div class="slider-box classic-text">
    <h3>Was ist die SWO?</h3>
    <p><?php echo get_post_meta( get_the_ID(), 'main-heading-1', true ); ?></p>
  </div>
</div>


<div class="frontslides fade" style="background-image: url('http://localhost:8080/wp-content/uploads/2020/06/slemenova-spica-triglav-national-park.jpg');">
  <div class="slider-box box-right classic-text">
    <h3>Was ist die SWO?</h3>
    <p>Sociis mi, quis dictumst ac pellentesque. Enim, sed orci nullam sed integer eget aliquam lectus. Mauris neque ullamcorper pulvinar sit faucibus praesent parturient iaculis. Morbi scelerisque nec lectus non ut in. </p>
  </div>
</div>

<div class="frontslides fade" style="background-image: url('http://localhost:8080/wp-content/uploads/2020/06/slid2.jpg');">
  <div class="slider-box classic-text">
    <h3>Was ist die SWO?</h3>
    <p>Sociis mi, quis dictumst ac pellentesque. Enim, sed orci nullam sed integer eget aliquam lectus. Mauris neque ullamcorper pulvinar sit faucibus praesent parturient iaculis. Morbi scelerisque nec lectus non ut in. </p>
  </div>
</div>

</div>


<!-- Next and previous buttons -->
<a class="slideshow-slide prev-slide grow" onclick="plusSlides(-1)">&#10094;</a>
<a class="slideshow-slide next-slide grow" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div class="dots-slideshow">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("frontslides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active-dot", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active-dot";
}
</script>