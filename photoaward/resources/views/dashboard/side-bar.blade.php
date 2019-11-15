<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="#" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>

						{{-- <li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li> --}}
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

						<li><a href="{{ route('publish') }}" class=""><i class="lnr lnr-upload"></i> <span>Publish/Unpublish</span></a></li>

						<li><a href="#" class=""><i class="fa fa-money"></i> <span>Payments</span></a></li>
					{{-- 	<li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
						<li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
						<li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li> --}}
					</ul>
				</nav>
			</div>
		</div>