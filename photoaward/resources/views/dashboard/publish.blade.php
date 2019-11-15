<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Picture254</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	 <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('category/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('category/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('category/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('category/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('category/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('category/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('category/css/lightgallery.min.css') }}">    
    
    <link rel="stylesheet" href="{{ asset('category/css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('category/fonts/flaticon/font/flaticon.css') }}">
    
    <link rel="stylesheet" href="{{ asset('category/css/swiper.css') }}">

    <link rel="stylesheet" href="{{ asset('category/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('category/css/style.css') }}">    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
  
  @include('dashboard.header')

  <div class="container-fluid" data-aos="fade" data-aos-delay="500">
    <div class="swiper-container images-carousel">
        <div class="swiper-wrapper">
      @foreach($categories as $category)
            <div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                  <h2 class="mb-3">{{ $category->name }}</h2>
                  <a href="{{ route('publish-info') }}" class="btn btn-outline-white py-2 px-4">Explore Photos</a>
                </div>
                <img src="{{ asset('category/images/img_7.jpg') }}" alt="Image">
              </div>
            </div>
      @endforeach
        </div>

        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-scrollbar"></div>
    </div>
  </div>


  <div class="footer py-4">
    <div class="container-fluid">
      <p>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;
 		All rights reserved | Picture254
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
    </div>
  </div>

    

    
    
  </div>

  <script src="{{ asset('category/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('category/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('category/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('category/js/popper.min.js') }}"></script>
  <script src="{{ asset('category/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('category/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('category/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('category/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('category/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ asset('category/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('category/js/swiper.min.js') }}"></script>
  <script src="{{ asset('category/js/aos.js') }}"></script>

  <script src="{{ asset('category/js/picturefill.min.js') }}"></script>
  <script src="{{ asset('category/js/lightgallery-all.min.js') }}"></script>
  <script src="{{ asset('category/js/jquery.mousewheel.min.js') }}"></script>

  <script src="{{ asset('category/js/main.js') }}"></script>
  
  <script>
    $(document).ready(function(){
      $('#lightgallery').lightGallery();
    });
  </script>
    
  </body>
</html>