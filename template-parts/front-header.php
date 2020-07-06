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
<div class="mySlides fade">
  <img src="http://localhost:8080/wp-content/uploads/2020/06/Start-Test.jpg" style="width:100%">
  <div class="text">
    <h1>Was ist die SWO?<h1/>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint est, in similique labore exercitationem sequi, quisquam hic, 
      accusantium fugiat officia assumenda quia et a! Cupiditate doloribus consequuntur excepturi iusto a?<p/>
  </div>
</div>


<div class="mySlides fade">
  <img src="http://localhost:8080/wp-content/uploads/2020/06/slemenova-spica-triglav-national-park.jpg" style="width:100%">
  <div class="text">
  <h1>Titel 2<h1/>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint est, in similique labore exercitationem sequi, quisquam hic, 
      accusantium fugiat officia assumenda quia et a! Cupiditate doloribus consequuntur excepturi iusto a?<p/>
  </div>
</div>

<div class="mySlides fade">
    <img src="http://localhost:8080/wp-content/uploads/2020/06/slid2.jpg" style="width:100%">
    <div class="text">
    <h1>Titel 3?<h1/>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint est, in similique labore exercitationem sequi, quisquam hic, 
      accusantium fugiat officia assumenda quia et a! Cupiditate doloribus consequuntur excepturi iusto a?<p/>
    </div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
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
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>