<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="{{route('admin-dashboard')}}" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>

					@if(Auth::user()->hasRole('admin'))
						<li>
							<a href="#admin" data-toggle="collapse" class="collapsed"><i class="lnr lnr-user"></i> <span>Admin</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="admin" class="collapse ">
								<ul class="nav">
									<li><a href="{{ route('admin') }}" class="">Add</a></li>
									<li><a href="{{ route('manage-admin') }}" class="">Manage</a></li>
								</ul>
							</div>
						</li>

						<li>
							<a href="#jury" data-toggle="collapse" class="collapsed"><i class="lnr lnr-user"></i> <span>Jury</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="jury" class="collapse ">
								<ul class="nav">
									<li><a href="{{ route('jury-dash') }}" class="">Add</a></li>
									<li><a href="{{ route('manage-jury') }}" class="">Manage</a></li>
								</ul>
							</div>
						</li>

						<li>
							<a href="#rate" data-toggle="collapse" class="collapsed"><i class="fa fa-gavel"></i> <span>Image Rating</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="rate" class="collapse ">
								<ul class="nav">
									<li><a href="{{ route('manage-scale') }}" class="">Rating Scales</a></li>
									<li><a href="{{ route('rating-panel') }}" class="">Rate</a></li>
									<li><a href="{{ route('manage-jury') }}" class="">Rated Images</a></li>
								</ul>
							</div>
						</li>

						<li>
							<a href="#cont" data-toggle="collapse" class="collapsed"><i class="lnr lnr-user"></i> <span>Contestants</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="cont" class="collapse ">
								<ul class="nav">
									<li><a href="{{ route('image-rating') }}" class="">Manage</a></li>
								</ul>
							</div>
						</li>

						<li>
							<a href="#cat" data-toggle="collapse" class="collapsed"><i class="fa fa-list-alt"></i> <span>Categories</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="cat" class="collapse ">
								<ul class="nav">
									<li><a href="{{ route('category') }}" class="">Add</a></li>
									<li><a href="#" class="">Manage</a></li>
								</ul>
							</div>
						</li>

						<li>
							<a href="#publish" data-toggle="collapse" class="collapsed"><i class="fa fa-list-alt"></i> <span>Publish</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="publish" class="collapse ">
								<ul class="nav">
									<li><a href="{{ route('publish') }}" class="">Publish</a></li>
									<li><a href="{{ route('unpublish') }}" class="">Unpublish</a></li>
								</ul>
							</div>
						</li>

						<li><a href="#" class=""><i class="fa fa-money"></i> <span>Payments</span></a></li>

						@elseif(Auth::user()->hasRole('judge'))
						<li>
							<a href="#rate" data-toggle="collapse" class="collapsed"><i class="fa fa-gavel"></i> <span>Image Rating</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="rate" class="collapse ">
								<ul class="nav">
									<li><a href="{{ route('manage-scale') }}" class="">Rating Scales</a></li>
									<li><a href="{{ route('rating-panel') }}" class="">Rate</a></li>
									<li><a href="{{ route('rated-images') }}" class="">Rated Images</a></li>
								</ul>
							</div>
						</li>

						@elseif(Auth::user()->hasRole('moderator'))
							<li>
								<a href="#publish" data-toggle="collapse" class="collapsed"><i class="fa fa-list-alt"></i> <span>Publish</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
								<div id="publish" class="collapse ">
									<ul class="nav">
										<li><a href="{{ route('publish') }}" class="">Publish</a></li>
										<li><a href="{{ route('unpublish') }}" class="">Unpublish</a></li>
									</ul>
								</div>
							</li>
					  @endif
					</ul>
				</nav>
			</div>
		</div>