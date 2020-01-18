<style>
/*.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}
*/
/*.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}
*/
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  border-bottom: 1px solid;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>

<div class="dropdown" style="top: -12px; overflow: auto;">
  <div id="myDropdown" class="dropdown-content" style="overflow: auto;">
<ul style="overflow: auto;">
@if(Auth::check())
    <a onclick="window.location='{{ route("submit-entry") }}'" href="#"><span>SUBMIT</span></a>
@else
    <a onclick="window.location='{{ route("login") }}'" href="#"><span>SUBMIT</span></a>
@endif
<a onclick="window.location='{{ url("about-competition") }}'" href="#" class=""><span>ABOUT</span></a>
<a onclick="window.location='{{ url("guidelines") }}'" href="#"><span>GUIDELINES</span></a>
<a onclick="window.location='{{ url("categories") }}'"  href="#" ><span>CATEGORIES</span></a>
<a onclick="window.location='{{ url("prizes") }}'" href="#"><span>PRIZES</span></a>
<a onclick="window.location='{{ url("jury") }}'"  href="#"><span>THE JURY</span></a>
<a onclick="window.location='{{ url("sponsors") }}'" href="#"><span>OUR PARTNERS</span></a>
<a onclick="window.location='{{ url("like-images") }}'"  href="#"><span>LIKE IMAGES</span></a>
<a onclick="window.location='{{ url("stock-album") }}'"  href="#"><span>STOCK ALBUM</span></a>
<a onclick="window.location='{{ url("contact") }}'" href="#"><span>CONTACT</span></a>
<a onclick="window.location='{{ url("faq") }}'" href="#"><span>FAQ</span></a>
@if(Auth::check())
<a onclick="window.location='{{ route("logout") }}'" href="#"><span>LOGOUT</span></a>
@else
<a onclick="window.location='{{ route("login") }}'" href="#"><span>LOGIN/SIGNUP</span></a>
@endif
</ul>
{{-- <li><a href="#"><span></span></a></li> --}}
  </div>
</div>



<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction(event) {
  event.stopPropagation();
  document.getElementById("myDropdown").classList.toggle("show");
}

$('#gnavii').click(function(e) {

  document.getElementById("myDropdown").classList.toggle("show");
    e.stopPropagation();
  });

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  event.stopPropagation();
  event.preventDefault();
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>