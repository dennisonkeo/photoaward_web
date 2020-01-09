<!DOCTYPE html>
<html>

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title>PICTURE+254</title>
  <meta name="keywords" content="PICTURE+254, contest, photographer, photography, entries, owner, Professionals, compete, competition, Contestants,image, photos, Gallery,categories, submit, photograph, winners, Stock, Content, album." />
  <meta name="description" content="This exciting contest gives everyday ordinary people, developing and professional photographers a chance to express themselves to a global audience through the medium of photography." />
  <meta name="author" content="PICTURE+254" />
  <meta property="og:title" content="PICTURE+254" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://picture254.com/" />
  <meta property="og:image" content="www.picture254.com/images/logo.jpg" />
  <meta property="og:site_name" content="PICTURE+254" />
  <meta property="og:description" content="This exciting contest gives everyday ordinary people, developing and professional photographers a chance to express themselves to a global audience through the medium of photography." />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="{{ asset('js/right_click.js') }}"></script>

<style>
body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>

<body>

<h2 style="text-align:center">Lightbox</h2>

<div class="row">
  <div class="column">
    <img src="images/pic29.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="images/pic34.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="images/pic71.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="images/pic28.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>
<div class="row">
  <div class="column">
    <img src="images/pic27.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="images/pic44.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="images/pic11.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="images/pic48.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div><div class="row">
  <div class="column">
    <img src="images/pic7.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="images/pic4.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="images/pic1.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="images/pic8.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="images/pic47.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="images/pic36.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="images/pic47.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="images/pic1.jpg" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="images/pic48.jpg" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/pic49.jpg" style="width:100%" onclick="currentSlide(2)" alt="Snow">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/pic50.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/pic53.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
  </div>
</div>

<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

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
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
</body>
</html>
