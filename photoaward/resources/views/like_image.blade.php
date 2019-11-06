<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.10.15, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.10.15, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <!-- <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon"> -->
  <meta name="description" content="">
  
  <title>Pic+254</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/gallery/style.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


  
  {{-- <script src="{{ asset('js/right_click.js') }}"></script> --}}
  
  <style type="text/css">

  /* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  /*padding-top: 100px;*/
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  /*position: relative;*/
  background-color: #fefefe;
/*  margin: auto;
  padding: 0;
  width: 100%;*/
  /*display: table;*/
  /*max-width: 1200px;*/
}

/* The Close Button */
/*.close {
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
}*/

/*.mySlides {
  display: none;
}*/

      #vote {
  position: absolute;
  top: 30%;
  left: 10%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: red;
  background: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  border-radius: 20px;
}

#vote:hover{
    color: green;
}

/* The grid: Four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
}

/* Style the images inside the grid */
.column img {
  opacity: 0.8; 
  cursor: pointer; 
}

.column img:hover {
  opacity: 1;
}

.imghover span{
  display: none;
}

.imghover{
  cursor: pointer;
}

.imghover:hover span{
  display: block;
  opacity: 1;
}
.imghover:hover img{
  opacity: 1;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The expanding image container */
/*.container {
  position: relative;
  display: none;
}*/

/* Expanding image text */
#imgtext {
  position: absolute;
  bottom: 15px;
  left: 15px;
  color: white;
  font-size: 20px;
}

/* Closable button inside the expanded image */
.closebtn {
  position: absolute;
  top: 10px;
  right: 15px;
  color: white;
  font-size: 35px;
  cursor: pointer;
}

* {
  box-sizing: border-box;
}

/*body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}*/

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE 10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE 10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create two equal columns that sits next to each other */
.column {
  -ms-flex: 50%;  IE 10 
  flex: 50%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
}


/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 10px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
  font-size: 18px;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}

 .like {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

span .hoverr{
  cursor: pointer;
}
span .hoverr:hover{
  color: #ff00ff;
  fill: url(#000);

}

.fa{
  font-size: 20px;
}
#navbarSupportedContent ul li:hover a{
  /*background: #ff0051;*/
}





</style>
  
</head>
<body>

     <!--Confirm Payment Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-top" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #000; opacity: 0.8;">
        <h5 class="modal-title" id="exampleModalLongTitle" style="font-weight: bold; color: #fff;"><i class="fa fa-moey"></i> Your Upload Summary</h5>
        <button type="button" style="color: #fff;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="checkout" class="btn btn-primary">Pay <i class="fa fa-loading-o"></i> </button>
      </div>
    </div>
  </div>
</div>
  <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-0">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm" style="background: black;">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
<div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="{{route('/')}}">
                         <img src="images/logo_.png" alt="logo" style="height: 3.5rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap">
                    <a class="navbar-caption text-white display-4" href="submit-entry">
                       <span style="color: #ff0051;"> PIC+254</span>
                    </a>
                </span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="{{ route('submit-entry') }}">
                        <span class="fa fa-user"></span>
                        My profile
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="{{ route('/') }}">
                        <span class=""><i class="fa fa-home"></i></span>
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="{{ route('logout') }}">
                        <span class=""><i class="fa fa-key"></i></span>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</section>

<!-- <section class="cid-qTkA127IK8 mbr-fullscreen mbr-parallax-background" id="header2-1" style="backgound: #000; background-image: url('images/pic12.jpg'); opaity: 0.9;">

    

    

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                    MY GALLERY
                </h1>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-2">
                    Browse your gallery with ease.
                </h3>
                <p class="mbr-text pb-3 mbr-fonts-style display-5">

                </p>

            </div>
        </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true" style="background: black; opacity: 0.7;">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section> -->

<section class="mbr-gallery mbr-slider-carousel cid-rDQ9UudR4c" id="gallery1-6" style="min-height: 680px;">
@include('popup.index')
    
</section>

@include('footer')

 

<style type="text/css">
  .count{
    font-weight: bold;
    /*color: red;*/
  }
</style>


<script src="https://users.worldphoto.org/js/jquery.min.js"></script>

<script>

  $(function () {
   // $('#exampleModalCenter').modal({
   //                  backdrop: 'static'
   //              });
});

// $(document).ready(function(){
//     // when the user clicks on like
//     $('.count').on('click', function(){
//       var image_id = $(this).data('id');
//           $upload = $(this);

//           // console.log($upload.parent().find('count'));

//       $.ajax({
//         url: 'add-like',
//         type: 'POST',
//         data: {
//           'liked': 1,
//           upload_id: image_id,
//           _token: '{{csrf_token()}}'
//         },
//         success: function(response){
//           if(response !="")
//           {
//           $upload.parent().find('span').text(response);
//           // $post.addClass('hide');
//           // $post.siblings().removeClass('hide');
//         }

//           // console.log(response);

//         },
//         error: function(jqXHR, textStatus, errorThrown){
//           console.log(errorThrown);
//         }
//       });
//     });

//   });


function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

console.log(elements.length);

// Declare a loop variable
var i;

// Full-width images
function one() {
  console.log(elements.length);
    for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "100%";  // IE10
    elements[i].style.flex = "100%";
  }
}

// Two images side by side
function two() {
  console.log(elements.length);
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "50%";  // IE10
    elements[i].style.flex = "50%";
  }
}

// Four images side by side
function four() {
  console.log(elements.length);
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "25%";  // IE10
    elements[i].style.flex = "25%";
    
  }
}

// Add active class to the current button (highlight it)
var header = document.getElementById("myHeader");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

<script>
function myFunction(imgs) {

  var expandImg = document.getElementById("expandedImg");
  // var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  // imgText.innerHTML = imgs.alt;
  document.getElementById("myModal").style.display = "block";
  // expandImg.parentElement.style.display = "block";
}
</script>

<script type="text/javascript">
    function incrementValue()
{

    document.getElementById("count").innerHTML = parseInt(document.getElementById("count").innerHTML)+1;
}
</script>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/gallery/player.min.js"></script>
  <script src="assets/gallery/script.js"></script>
  <script src="assets/slidervideo/script.js"></script>
  
  
</body>
</html>