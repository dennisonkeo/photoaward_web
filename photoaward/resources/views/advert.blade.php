<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.overlay {
  height: 0%;
  width: 100%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  /*background-color: rgba(0,0,0, 0.9);*/
  overflow-y: auto;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: relative;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}


div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  width: 25%;
  margin: 10px auto;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 99.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>

<div id="myNav" class="overlay">
  {{-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">Close</a> --}}
  {{-- <div class="overlay-content"> --}}

    {{-- <a href="#">About</a>
    <a href="">Services</a>
    <a href="#">Clients</a>
    <a onclick="closeNav()" href="#">Contact</a> --}}

  {{-- </div> --}}

  <div class="responsive" style="margin-top: 50px;">
  <div class="gallery" style="vertical-align: middle;">
    <a target="_blank" href="#">
      <img src="images/pic32.jpg" alt="Mountains" style="width: 100%; height: auto;">
    </a>
    <div class="desc" style="color: white; font-size: 12px;">Like What You See?</div>
    <div class="desc">
    <button onclick="voteNow()" style="width: 32%; height: 40px; background: #ff00ff; color: #fff;">Vote</button>
    <button onclick="voteLater()" style="width: 32%; background: #ff00ff; height: 40px;">Vote Later</button>
    <!-- <button onclick="closeNav()" style="width: 32%; height: 40px; background: #ff00ff;">Close</button> -->
  </div>
</div>
</div>
</div>

{{-- <h2>Fullscreen Overlay Nav Example</h2>
<p>Click on the element below to open the fullscreen overlay navigation menu.</p>
<p>In this example, the navigation menu will slide downwards from the top:</p>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
 --}}
<script>
function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}

function voteNow()
{
  window.location.href =  '{{ url('like-images') }}';
}

function voteLater()
{
  document.getElementById("myNav").style.height = "0%";

  setTimeout(function(){
                 
           document.getElementById("myNav").style.height = "100%";          
        }, 30000);
}


        setTimeout(function(){
                 
           document.getElementById("myNav").style.height = "100%";          
        }, 30000);

</script>
     
</body>
</html>
