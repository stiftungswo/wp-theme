<?php
/**
 * Displays menu boxes
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<style>

.breweries > ul {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
  grid-gap: 1rem;
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.breweries > ul > li {
  margin: 0 auto;
  width: 100%;
}

.wrap-boxes{
   width: 300px;
}

.imageDiv {
    width: 100%;
    height: 220px;
    border-radius: 8px;
}

.bottomDiv {
    background: #fff;
    width: 80%;
    margin: 0 auto;
    position: relative;
    bottom: 20%;
    padding: 20px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.25);
}

</style>


<li class="wrap-boxes">
    <div class="imageDiv img-background" style="background-image: url('http://localhost:8080/wp-content/uploads/2020/06/slemenova-spica-triglav-national-park.jpg');" alt="Several hands holding beer glasses"></div>
    <div class="imageDiv bottomDiv">
        <p>
        Made in the interiors of collapsing stars star stuff harvesting star light venture billions upon billions Drake Equation brain is the seed of intelligence?
        </p>
        <a href="#">Visit Website</a>
    </div>
</li>