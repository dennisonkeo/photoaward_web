<style type="text/css">
	.menu{
		overflow: auto;
	}
</style>

<div id="menu">
<nav id="gnavi-links" class="nav-links" style="overflow: auto;">
<ul class="hover-line-links" style="overflow: auto;">
	<li><a onclick="window.location='{{ url("login") }}'" href="#"><span>SUBMIT</span></a></li>
<li><a onclick="window.location='{{ url("about-competition") }}'" href="#" class=""><span>ABOUT</span></a></li>
{{-- <li><button onclick="window.location='{{ route("/") }}#prizes'">Button</button></li> --}}
<li><a onclick="window.location='{{ url("guidelines") }}'" href="#"><span>GUIDELINES</span></a></li>
<li><a onclick="window.location='{{ url("categories") }}'"  href="#" ><span>CATEGORIES</span></a></li>
<li><a onclick="window.location='{{ url("prizes") }}'" href="#"><span>PRIZES</span></a></li>
<li><a onclick="window.location='{{ url("jury") }}'"  href="#"><span>THE JURY</span></a></li>
<li><a onclick="window.location='{{ url("sponsors") }}'" href="#"><span>SPONSORS</span></a></li>
<li><a onclick="window.location='{{ url("stock-album") }}'"  href="#"><span>STOCK ALBUM</span></a></li>
<li><a onclick="window.location='{{ url("contact") }}'" href="#"><span>CONTACT</span></a></li>
<li><a onclick="window.location='{{ url("faq") }}'" href="#"><span>FAQ</span></a></li>
<li><a href="#"><span></span></a></li>


</ul>
</nav>



</div>