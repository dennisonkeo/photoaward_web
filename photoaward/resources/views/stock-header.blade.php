
<?php
use App\Cart;
use App\Purchase;

	if(Auth::check())
	{
		// $count = Cart::where('user_id',Auth::user()->id)
			//->where('token', session()->getId())->get(); 

		$purchased_items = Purchase::where('token',session()->getId())->where('user_id',Auth::user()->id)->pluck('cart_id')->all();

          $count = Cart::whereNotIn('id', $purchased_items)->where('user_id', Auth::user()->id)->where('token', session()->getId())->get();
	}
	
?>
<header class="wrapper dark_scheme" id="header" data-stellar-background-ratio="0.5">
				<div class="container">

					<div id="menu_wrap" class="clearfix">

						
						
						<a href="#" id="search_toggle"></a>

						<div id="cart_links" class="clearfix">
							<ul>

								
								@if(Auth::check())
									<li>
										<a href="{{ route('logout') }}" title="Logout" id="stocky_login">
											<span>Logout</span>
										</a>
									</li>
								@else
								<li>
										<a href="user-auth" title="Member Login" id="stocky_login">
											<span>Member Login</span>
										</a>
									</li>

								@endif
									
								
								<li>
									<a href="{{ route('cart/view-cart') }}" title="Cart" id="head_cart">
										<span>Cart (<span id="header_cart_count" class="edd-cart-quantity">
										@if(Auth::check())
										{{ count($count) }}
										@else
											0
										@endif
									</span>)</span>

									</a>
								</li>

							</ul>
						</div>
{{-- 
						<div id="search_wrap">
							<form method="get" class="searchform" action="http://themes.designcrumbs.com/stocky/">
	<div>
		<input type="text" class="search_input" value="Search Products" name="s" onfocus="if (this.value == 'Search Products') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search Products';}" />
		<input type="hidden" id="searchsubmit" value="Search" />
		<input type="hidden" name="post_type" value="download" />
	</div>
</form>						
</div> --}}

					</div>

										<nav id="main_menu" class="clearfix expanded">
						<div id="stocky_menu_container" class="menu-main-container"><ul id="stocky_menu" class="menu"><li id="menu-item-144" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-144"><a href="{{ route('stock-album') }}" aria-current="page">Home</a></li>
{{-- <li id="menu-item-296" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-296"><a href="http://themes.designcrumbs.com/stocky/blog/">Blog</a></li> --}}
{{-- <li id="menu-item-198" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-198"><a href="#">Stocky Pages</a>
<ul class="sub-menu">
	<li id="menu-item-199" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-199"><a href="http://themes.designcrumbs.com/stocky/become-an-author/">Become An Author</a></li>
	<li id="menu-item-200" class="nmr-logged-out menu-item menu-item-type-post_type menu-item-object-page menu-item-200"><a href="http://themes.designcrumbs.com/stocky/login/">Login</a></li>
	<li id="menu-item-201" class="nmr-logged-out menu-item menu-item-type-post_type menu-item-object-page menu-item-201"><a href="http://themes.designcrumbs.com/stocky/register/">Register</a></li>
	<li id="menu-item-158" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-158"><a href="http://themes.designcrumbs.com/stocky/kitchen-sink/">Kitchen Sink</a></li>
	<li id="menu-item-211" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-211"><a href="http://themes.designcrumbs.com/stocky/full-width/">Full Width</a></li>
</ul>
</li> --}}
{{-- <li id="menu-item-146" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-146"><a href="http://themes.designcrumbs.com/stocky/wish-lists/">Wish Lists</a>
<ul class="sub-menu">
	<li id="menu-item-147" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-147"><a href="http://themes.designcrumbs.com/stocky/wish-lists/view/95">11Edit</a></li>
	<li id="menu-item-148" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-148"><a href="http://themes.designcrumbs.com/stocky/wish-lists/edit/">Edit</a></li>
	<li id="menu-item-149" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-149"><a href="http://themes.designcrumbs.com/stocky/wish-lists/view/">View</a></li>
</ul>
</li> --}}
<li id="menu-item-150" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-150"><a href="#">Categories</a>
<ul class="sub-menu">
	<li id="menu-item-151" class="menu-item menu-item-type-taxonomy menu-item-object-download_category menu-item-151"><a href="#">Nature</a></li>
	<li id="menu-item-152" class="menu-item menu-item-type-taxonomy menu-item-object-download_category menu-item-152"><a href="#">Landscapes</a></li>
	<li id="menu-item-153" class="menu-item menu-item-type-taxonomy menu-item-object-download_category menu-item-153"><a href="#">People</a></li>
	<li id="menu-item-154" class="menu-item menu-item-type-taxonomy menu-item-object-download_category menu-item-154"><a href="#">Travel</a></li>
	<li id="menu-item-155" class="menu-item menu-item-type-taxonomy menu-item-object-download_category menu-item-155"><a href="#">Electronics</a></li>
</ul>
</li>
{{-- <li id="menu-item-162" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-162"><a href="http://themes.designcrumbs.com/stocky/contact/">Contact</a></li> --}}
</ul></div>					</nav>

					
					<div id="header_inner" class="light_text">

						
							<h1 class="sitename_logo"><a href="#" title="">Picture254</a></h1>

							<h2 id="slogan"> photography marketplace .</h2>

							{{-- <form method="get" class="searchform" action="http://themes.designcrumbs.com/stocky/">
	<div>
		<input type="text" class="search_input" value="Search Products" name="s" onfocus="if (this.value == 'Search Products') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search Products';}" />
		<input type="hidden" id="searchsubmit" value="Search" />
		<input type="hidden" name="post_type" value="download" />
	</div>
</form> --}}
						
					</div>
					
				</div>
			</header>