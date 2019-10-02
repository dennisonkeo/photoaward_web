
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<!--

Cool Carousels	(c) 2019 Fred Heusschen

-->

	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
		<meta name="author" content="Fred Heusschen" />
		<meta name="robots" content="index,follow" />
		<meta name="description" content="A responsive, full window width image slider, resizing a fixed number of visible images and auto-adjusting the height of the images and the carousel itself. Resize your browser and watch the carousel adapt to its new size." />
		<meta name="keywords" content="responsive, slider, carousel, example, height, width" />

		<link rel="shortcut icon" type="images/ico" href="/favicon.ico" />
	
		<title>Responsive slider resizing a fixed number of images</title>
		
		<link rel="stylesheet" type="text/css" media="all" href="/css/reset.css" />
		<link rel="stylesheet" type="text/css" media="all" href="/css/style.css" />
		<link rel="stylesheet" type="text/css" media="all" href="/css/layout.css" />
		<link rel="stylesheet" type="text/css" media="all" href="/css/prettify-sunburst-customized.css" />
		<script type="text/javascript" src="/js/jquery.js"></script>
		<script type="text/javascript" src="/js/jquery.carouFredSel.js"></script>
		<script type="text/javascript" src="/js/site.js"></script>
		<script type="text/javascript" src="/js/prettify.js"></script>
		<script type="text/javascript" src="/js/prettify.css.js"></script>
		<script type="text/javascript">
			$(function() {
				prettyPrint();
			});
		</script>
		<script type="text/javascript">
			$(function() {

				//	create carousel
				$('#carousel').carouFredSel({
					responsive: true,
					items: {
						width: 200,
						height: '60%',
						visible: 5
					},
					auto: {
						items: 1
					},
					prev: '#prev',
					next: '#next'
				});

				//	re-position the carousel, vertically centered
				var $elems = $('#wrapper, #prev, #next'),
					$image = $('#carousel img:first')

				$(window).bind( 'resize.example', function() {
					var height = $image.outerHeight( true );

					$elems
						.height( height )
						.css( 'marginTop', -( height/2 ) );

				}).trigger( 'resize.example' );

			});
		</script>
		<style type="text/css" media="all">
			html, #c-carousel {
				height: 100%;
				padding: 0;
				margin: 0;
			}
			#c-carousel {
				min-height: 300px;
				position: relative;
			}
			#c-carousel h3 {
				font-family: Arial, Geneva, SunSans-Regular, sans-serif;
				font-size: 20px;
				text-align: center;
				color: #999;
				margin: 0;
				padding-top: 50px;
			}
			#c-carousel * {
				font-family: Arial, Geneva, SunSans-Regular, sans-serif;
				font-size: 14px;
				color: #333;
				line-height: 22px;
			}

			#wrapper, #prev, #next {
				border-top: 1px solid #999;
				border-bottom: 1px solid #999;
				height: 170px;
				position: absolute;
				top: 50%;
				margin-top: -85px;
			}
			#wrapper {
				width: 90%;
				left: 5%;
				overflow: hidden;
				box-shadow: 0 0 10px #ccc;
			}

			#carousel img {
				margin: 10px 5px;
				border: none;
				display: block;
				float: left;
			}
			
			#prev, #next {
				background: center center no-repeat #ccc;
				width: 5%;
			}
			#prev:hover, #next:hover {
				background-color: #bbb;
			}
			#prev {
				background-image: url( img/gui-prev.png );
				left: 0;
			}
			#next {
				background-image: url( img/gui-next.png );
				right: 0;
			}
			
			
		</style>
	</head>
	<body>
		<div id="c-carousel">
		<h3>Resize your browser.</h3>
		<div id="wrapper">
			<div id="carousel">
				<img src="img/dakar-1.jpg" alt="dakar-1" width="250" height="150" />
				<img src="img/dakar-2.jpg" alt="dakar-2" width="250" height="150" />
				<img src="img/dakar-4.jpg" alt="dakar-4" width="250" height="150" />
				<img src="img/dakar-5.jpg" alt="dakar-5" width="250" height="150" />
				<img src="img/dakar-7.jpg" alt="dakar-7" width="250" height="150" />
				<img src="img/dakar-8.jpg" alt="dakar-8" width="250" height="150" />
				<img src="img/dakar-9.jpg" alt="dakar-9" width="250" height="150" />
				<img src="img/dakar-10.jpg" alt="dakar-10" width="250" height="150" />
				<img src="img/dakar-11.jpg" alt="dakar-11" width="250" height="150" />
				<img src="img/dakar-13.jpg" alt="dakar-13" width="250" height="150" />
				<img src="img/dakar-14.jpg" alt="dakar-14" width="250" height="150" />
			</div>
		</div>
		<a id="prev" href="#"></a>
		<a id="next" href="#"></a>
		
		
		</div> <!-- /c-carousel -->
		<div id="c-footer">
			<div id="c-bubble"><p>More examples</p>
			</div> <!-- /c-bubble -->
		<a href="/c/30" id="c-next">Next example &rsaquo;</a>
			<div id="c-current">
				<p>You are now viewing this carousel:</p>
				<ul>
					<li><span class="nr">#31</span><span class="title">Responsive slider resizing a fixed number of images</span><a href="coolcarousel.zip" id="c-cur-down" target="_blank" title="Download .ZIP-file"><span class="down"></span></a><a href="coolcarousel.html" id="c-cur-open" target="_blank" title="Open in a new window"><span class="open"></span></a><a href="#" id="c-cur-sour" title="Show/hide sourcecode"><span class="sour"></span></a></li>
				</ul>
				<div id="c-sourcecode">
<p>HTML</p>
<pre class="prettyprint lang-xhtml linenums">&lt;h3&gt;Resize your browser.&lt;/h3&gt;
&lt;div id=&quot;wrapper&quot;&gt;
	&lt;div id=&quot;carousel&quot;&gt;
		&lt;img src=&quot;img/dakar-1.jpg&quot; alt=&quot;dakar-1&quot; width=&quot;250&quot; height=&quot;150&quot; /&gt;
		&lt;img src=&quot;img/dakar-2.jpg&quot; alt=&quot;dakar-2&quot; width=&quot;250&quot; height=&quot;150&quot; /&gt;
		&lt;img src=&quot;img/dakar-4.jpg&quot; alt=&quot;dakar-4&quot; width=&quot;250&quot; height=&quot;150&quot; /&gt;
		&lt;img src=&quot;img/dakar-5.jpg&quot; alt=&quot;dakar-5&quot; width=&quot;250&quot; height=&quot;150&quot; /&gt;
		&lt;img src=&quot;img/dakar-7.jpg&quot; alt=&quot;dakar-7&quot; width=&quot;250&quot; height=&quot;150&quot; /&gt;
		&lt;img src=&quot;img/dakar-8.jpg&quot; alt=&quot;dakar-8&quot; width=&quot;250&quot; height=&quot;150&quot; /&gt;
		&lt;img src=&quot;img/dakar-9.jpg&quot; alt=&quot;dakar-9&quot; width=&quot;250&quot; height=&quot;150&quot; /&gt;
		&lt;img src=&quot;img/dakar-10.jpg&quot; alt=&quot;dakar-10&quot; width=&quot;250&quot; height=&quot;150&quot; /&gt;
		&lt;img src=&quot;img/dakar-11.jpg&quot; alt=&quot;dakar-11&quot; width=&quot;250&quot; height=&quot;150&quot; /&gt;
		&lt;img src=&quot;img/dakar-13.jpg&quot; alt=&quot;dakar-13&quot; width=&quot;250&quot; height=&quot;150&quot; /&gt;
		&lt;img src=&quot;img/dakar-14.jpg&quot; alt=&quot;dakar-14&quot; width=&quot;250&quot; height=&quot;150&quot; /&gt;
	&lt;/div&gt;
&lt;/div&gt;
&lt;a id=&quot;prev&quot; href=&quot;#&quot;&gt;&lt;/a&gt;
&lt;a id=&quot;next&quot; href=&quot;#&quot;&gt;&lt;/a&gt;</pre>
<p>JavaScript</p>
<pre class="prettyprint lang-js linenums">$(function() {

	//	create carousel
	$('#carousel').carouFredSel({
		responsive: true,
		items: {
			width: 200,
			height: '60%',
			visible: 5
		},
		auto: {
			items: 1
		},
		prev: '#prev',
		next: '#next'
	});

	//	re-position the carousel, vertically centered
	var $elems = $('#wrapper, #prev, #next'),
		$image = $('#carousel img:first')

	$(window).bind( 'resize.example', function() {
		var height = $image.outerHeight( true );

		$elems
			.height( height )
			.css( 'marginTop', -( height/2 ) );

	}).trigger( 'resize.example' );

});</pre>
<p>CSS</p>
<pre class="prettyprint lang-css linenums">html, body {
	height: 100%;
	padding: 0;
	margin: 0;
}
body {
	min-height: 300px;
	position: relative;
}
body h3 {
	font-family: Arial, Geneva, SunSans-Regular, sans-serif;
	font-size: 20px;
	text-align: center;
	color: #999;
	margin: 0;
	padding-top: 50px;
}
body * {
	font-family: Arial, Geneva, SunSans-Regular, sans-serif;
	font-size: 14px;
	color: #333;
	line-height: 22px;
}

#wrapper, #prev, #next {
	border-top: 1px solid #999;
	border-bottom: 1px solid #999;
	height: 170px;
	position: absolute;
	top: 50%;
	margin-top: -85px;
}
#wrapper {
	width: 90%;
	left: 5%;
	overflow: hidden;
	box-shadow: 0 0 10px #ccc;
}

#carousel img {
	margin: 10px 5px;
	border: none;
	display: block;
	float: left;
}

#prev, #next {
	background: center center no-repeat #ccc;
	width: 5%;
}
#prev:hover, #next:hover {
	background-color: #bbb;
}
#prev {
	background-image: url( img/gui-prev.png );
	left: 0;
}
#next {
	background-image: url( img/gui-next.png );
	right: 0;
}</pre>
				</div>
				<p id="c-description">Description:<br />
					A responsive, full window width image slider, resizing a fixed number of visible images and auto-adjusting the height of the images and the carousel itself. Resize your browser and watch the carousel adapt to its new size.</p>
				<p>This carousel is created for your inspiration, using only the <a href="http://www.jquery.com" target="_blank" title="jquery">jQuery-library</a> and the <a href="http://caroufredsel.dev7studios.com" target="_blank" title="caroufredsel">jQuery.carouFredSel-plugin</a>.<br />
					you may use it for free in all of your projects.</p>
			</div> <!-- /c-current -->
			<div id="c-list">
				<p>Currently showcasing 72 cool carousels, 
					so go ahead and pick one to view:</p>
				<ul>
					<li><a href="/c/72"><span class="nr">#72</span><span class="title">Beautiful animated images gallery</span></a></li>
					<li><a href="/c/71"><span class="nr">#71</span><span class="title">Slideshow with sketched preview of the next image</span></a></li>
					<li><a href="/c/70"><span class="nr">#70</span><span class="title">One image, horizontally and vertically centered</span></a></li>
					<li><a href="/c/69"><span class="nr">#69</span><span class="title">Fluid slideshow with grid of 9 separately animated images</span></a></li>
					<li><a href="/c/68"><span class="nr">#68</span><span class="title">Responsive carousel showing one image and two images partially</span></a></li>
					<li class="favorite"><a href="/c/67" title="Authors' favorite"><span class="nr">#67</span><span class="title">Gorgeous carousel with a variable number of visible thumbnails</span></a></li>
					<li><a href="/c/66"><span class="nr">#66</span><span class="title">100% width, 500px height fast animated responsive carousel</span></a></li>
					<li class="favorite"><a href="/c/65" title="Authors' favorite"><span class="nr">#65</span><span class="title">Slider with 3 sections, each with 3 images, a caption and pager</span></a></li>
					<li><a href="/c/64"><span class="nr">#64</span><span class="title">Tabs container with large tabs on the left of the container</span></a></li>
					<li><a href="/c/63"><span class="nr">#63</span><span class="title">Cool one image carousel showing its description onMouseOver</span></a></li>
					<li><a href="/c/62"><span class="nr">#62</span><span class="title">Rounded one image slider with animated rounded thumbnails</span></a></li>
					<li><a href="/c/61"><span class="nr">#61</span><span class="title">Responsive fading slideshow with thumbnail carousel</span></a></li>
					<li><a href="/c/60"><span class="nr">#60</span><span class="title">Really cool text-carousel with nested images-carousel</span></a></li>
					<li><a href="/c/59"><span class="nr">#59</span><span class="title">A sequence of 3 carousels using the cover-, scroll- and uncover-effects</span></a></li>
					<li><a href="/c/58"><span class="nr">#58</span><span class="title">Carousel with 3 images centered in rounded corners</span></a></li>
					<li><a href="/c/57"><span class="nr">#57</span><span class="title">Cool continuously scrolling product slider</span></a></li>
					<li><a href="/c/56"><span class="nr">#56</span><span class="title">Responsive image gallery scrolling back and forth by switching direction</span></a></li>
					<li class="favorite"><a href="/c/55" title="Authors' favorite"><span class="nr">#55</span><span class="title">Beautifull slideshow with play/pause button and a clock timer</span></a></li>
					<li><a href="/c/54"><span class="nr">#54</span><span class="title">Responsive height carousel resizing and changing the number of images</span></a></li>
					<li class="favorite"><a href="/c/53" title="Authors' favorite"><span class="nr">#53</span><span class="title">Responsive height and width carousel</span></a></li>
					<li><a href="/c/52"><span class="nr">#52</span><span class="title">Responsive carousel scrolling justified items</span></a></li>
					<li><a href="/c/51"><span class="nr">#51</span><span class="title">3D roundabout carousel example</span></a></li>
					<li><a href="/c/50"><span class="nr">#50</span><span class="title">Draggable carousel that automatically completes the scrolling animation</span></a></li>
					<li class="favorite"><a href="/c/49" title="Authors' favorite"><span class="nr">#49</span><span class="title">Animated previeuw of the previous and next images onMouseOver of the buttons</span></a></li>
					<li class="favorite"><a href="/c/48" title="Authors' favorite"><span class="nr">#48</span><span class="title">Cool Carousel with animated image-swapping thumbnails</span></a></li>
					<li><a href="/c/47"><span class="nr">#47</span><span class="title">Highlighting and centering a group of images by category using the pagination.</span></a></li>
					<li><a href="/c/46"><span class="nr">#46</span><span class="title">Vertical scrolling and fading full window height slider</span></a></li>
					<li><a href="/c/45"><span class="nr">#45</span><span class="title">Full window width carousel with the first image enlarged and centered</span></a></li>
					<li><a href="/c/44"><span class="nr">#44</span><span class="title">Cool one-image slideshow with truncated preview of the next image</span></a></li>
					<li class="favorite"><a href="/c/43" title="Authors' favorite"><span class="nr">#43</span><span class="title">Image gallery with grid of thumbnails scrolling to form the magnification</span></a></li>
					<li><a href="/c/42"><span class="nr">#42</span><span class="title">Diagonally sliced images carousel with captions</span></a></li>
					<li><a href="/c/41"><span class="nr">#41</span><span class="title">Carousel using a random transition effect for each slide</span></a></li>
					<li><a href="/c/40"><span class="nr">#40</span><span class="title">Images with a title and description, both scrolled in opposite direction</span></a></li>
					<li><a href="/c/39"><span class="nr">#39</span><span class="title">Nice zooming, panning and fading slideshow</span></a></li>
					<li><a href="/c/38"><span class="nr">#38</span><span class="title">Carousel with truncated pagination because of the large amount of items</span></a></li>
					<li><a href="/c/37"><span class="nr">#37</span><span class="title">2D Maze game created with a carousel</span></a></li>
					<li><a href="/c/36"><span class="nr">#36</span><span class="title">Memory game created with clickable carousels</span></a></li>
					<li class="favorite"><a href="/c/35" title="Authors' favorite"><span class="nr">#35</span><span class="title">Ambiant-light image viewer with greyscaled non-selected images</span></a></li>
					<li><a href="/c/34"><span class="nr">#34</span><span class="title">How to create a beautifull and elegant image-details viewer</span></a></li>
					<li class="favorite"><a href="/c/33" title="Authors' favorite"><span class="nr">#33</span><span class="title">Fading slideshow with animated timer pagination bars</span></a></li>
					<li><a href="/c/32"><span class="nr">#32</span><span class="title">Beautifull full window image viewer with a caption</span></a></li>
					<li><a href="/c/31"><span class="nr">#31</span><span class="title">Responsive slider resizing a fixed number of images</span></a></li>
					<li><a href="/c/30"><span class="nr">#30</span><span class="title">Responsive slider truncating the first and last images</span></a></li>
					<li><a href="/c/29"><span class="nr">#29</span><span class="title">Responsive slider centering the visible images inside the carousel</span></a></li>
					<li><a href="/c/28"><span class="nr">#28</span><span class="title">Cool responsive image slider with thumbnail carousel</span></a></li>
					<li><a href="/c/27"><span class="nr">#27</span><span class="title">Beautifully styled and animated carousel header with image and text</span></a></li>
					<li><a href="/c/26"><span class="nr">#26</span><span class="title">Image gallery with a horizontal thumbnail carousel</span></a></li>
					<li class="favorite"><a href="/c/25" title="Authors' favorite"><span class="nr">#25</span><span class="title">Fluid full window width scrolling carousel with description</span></a></li>
					<li><a href="/c/24"><span class="nr">#24</span><span class="title">Elastic scrolling HTML-content</span></a></li>
					<li><a href="/c/23"><span class="nr">#23</span><span class="title">Continuously scrolling carousel immediately stopping onMouseOver</span></a></li>
					<li><a href="/c/22"><span class="nr">#22</span><span class="title">Resizing and repositioning buttons along with the image sizes</span></a></li>
					<li class="favorite"><a href="/c/21" title="Authors' favorite"><span class="nr">#21</span><span class="title">Automatic slideshow with a timer, play-, pause-, previous- and next-button</span></a></li>
					<li><a href="/c/20"><span class="nr">#20</span><span class="title">Vertical animated accordion showing images with titles</span></a></li>
					<li><a href="/c/19"><span class="nr">#19</span><span class="title">Fluid, liquid, responsive carousel resizing and changing the images</span></a></li>
					<li class="favorite"><a href="/c/18" title="Authors' favorite"><span class="nr">#18</span><span class="title">Slideshow with scrolling thumbnails appearing onMouseOver the pagination bullets</span></a></li>
					<li class="favorite"><a href="/c/17" title="Authors' favorite"><span class="nr">#17</span><span class="title">Cool fisheye slider centered in the available width</span></a></li>
					<li><a href="/c/16"><span class="nr">#16</span><span class="title">Billboard curtain effect with synchronised narrow carousels</span></a></li>
					<li><a href="/c/15"><span class="nr">#15</span><span class="title">Beautiful carousel with carouFredSel and UI Kit from Design Deck</span></a></li>
					<li><a href="/c/14"><span class="nr">#14</span><span class="title">Lazy load images before they come scrolling in</span></a></li>
					<li><a href="/c/13"><span class="nr">#13</span><span class="title">Mouse-over slideshow with truncated preview of second slide</span></a></li>
					<li><a href="/c/12"><span class="nr">#12</span><span class="title">Loading images using AJAX and insert them in the carousel</span></a></li>
					<li><a href="/c/11"><span class="nr">#11</span><span class="title">Basic slideshow changing the large image on mouse-over of a thumbnail</span></a></li>
					<li><a href="/c/10"><span class="nr">#10</span><span class="title">Automatic slideshow with inline scrolling thumbnails</span></a></li>
					<li><a href="/c/9"><span class="nr">#09</span><span class="title">News ticker effect by scrolling a definition list</span></a></li>
					<li><a href="/c/8"><span class="nr">#08</span><span class="title">Tabs-container effect with a non-circular carousel</span></a></li>
					<li class="favorite"><a href="/c/7" title="Authors' favorite"><span class="nr">#07</span><span class="title">Cool slideshow scrolling in additional information onMouseOver</span></a></li>
					<li><a href="/c/6"><span class="nr">#06</span><span class="title">Slideshow with scrolling grid of thumbnails</span></a></li>
					<li><a href="/c/5"><span class="nr">#05</span><span class="title">Accordion effect simulated with a circular carousel</span></a></li>
					<li><a href="/c/4"><span class="nr">#04</span><span class="title">Carousel with individually animated items</span></a></li>
					<li><a href="/c/3"><span class="nr">#03</span><span class="title">Fluid, liquid, responsive full window animated background images</span></a></li>
					<li><a href="/c/2"><span class="nr">#02</span><span class="title">Fluid full window width carousel with truncated previous and next images</span></a></li>
					<li><a href="/c/1"><span class="nr">#01</span><span class="title">Slider with cool navigational thumbnails</span></a></li>
				</ul>
				<p id="c-ref">All carousels on this website are created for your inspiration, using only the <a href="http://www.jquery.com" target="_blank" title="jquery">jQuery-library</a> and the <a href="http://caroufredsel.dev7studios.com" target="_blank" title="caroufredsel">jQuery.carouFredSel-plugin</a>.<br />
					They have been tested to work on FireFox and Chrome.</p>
			</div> <!-- /c-list -->
			<div id="c-copy">
				<a href="/">Cool Carousels</a>
				<span>&copy; 2019 - <a href="#">Contact</a> (requests for help will not be answered) - Powered by <a href="http://www.frebsite.nl/en.php" target="_blank">frebsite.nl</a></span>

			</div> <!-- /c-copy -->
		</div> <!-- /c-footer -->

		<noscript><p class="error">Y O U &nbsp; S H O U L D &nbsp; E N A B L E &nbsp; J A V A S C R I P T &nbsp; ! ! !</p></noscript>
	</body>
</html>