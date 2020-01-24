        <header class="site-navbar py-3" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2" data-aos="fade-down">
            <h1 class="mb-0"><a href="{{ route('admin-dashboard') }}" class="text-black h2 mb-0" ><span style="color: #ff00ff;"> Picture +254</span></a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active"><a href="{{ route('admin-dashboard') }}">Home</a></li>
                <li class="has-children">
                  <a href="{{ route('publish') }}">Categories</a>
                  <ul class="dropdown">
                    <li><a href="{{ route('publish-info','PEOPLE') }}">People</a></li>
                    <li><a href="{{ route('publish-info','THE GREAT OUTDOORS') }}">The Great Outdoors</a></li>
                    <li><a href="{{ route('publish-info','ARCHITECTURE') }}">Architecture</a></li>
                    <li><a href="{{ route('publish-info','FOOD') }}">Food</a></li>
                    <li><a href="{{ route('publish-info','FASHION') }}">Fashion</a></li>
                    <li><a href="{{ route('publish-info','EXPERIENCE.KE') }}">Experience KE</a></li>
                    <li><a href="{{ route('publish-info','ALTERED IMAGES') }}">Altered Images</a></li>
                    {{-- <li class="has-children">
                      <a href="#">Sub Menu</a>
                      <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                      </ul>
                    </li> --}}
                  </ul>
                </li>
                {{-- <li><a href="services.html">Services</a></li>
                <li><a href="about.html">About</a></li>s
                <li><a href="contact.html">Contact</a></li> --}}
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right" data-aos="fade-down">
{{--             <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                <li>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-youtube-play"></span></a>
                </li>
              </ul>
            </div> --}}

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>