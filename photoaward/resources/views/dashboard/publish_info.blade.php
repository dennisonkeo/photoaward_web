<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Picture +254</title>
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

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
      .btn_publish{
        background: #000;
        border: #000;
      }
    </style>
    
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

  <div class="site-section"  data-aos="fade">
    <div class="container-fluid">
      
      <div class="row justify-content-center">
        
        <div class="col-md-7">
          <div class="row mb-5">
            <div class="col-12 ">
              <h2 class="site-section-heading text-center">{{ $category }}</h2>
            </div>
          </div>
        </div>
    
      </div>
      <div class="row" id="lightgallery" style="">

      @foreach($images as $image)
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="{{ asset('uploads') }}/{{ $image->imageName }}" data-sub-html="<h4>Author <button class='btn_publish btn btn-info' style='border-radius: 5px;' data-id='{{ $image->id }}' >Publish</button></h4><p>Image caption</p>" style="" >
          <a href="#">
            <img src="{{ route('image-resize',$image->imageName) }}" alt="Image" class="img-fluid" style="heiht: 100px;">
          </a>
          <button style="margin-top: 3px;" class="btn_publish btn btn-primary btn-block" data-id="{{ $image->id }}">Publish
          </button>
        </div>

      @endforeach        

        {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="{{ asset('category/images/big-images/nature_big_2.jpg') }}" data-sub-html="<h4>Author</h4><p>Image caption</p>">
          <a href="#"><img src="{{ asset('category/images/nature_small_2.jpg') }}" alt="IMage" class="img-fluid"></a>
        </div> --}}

      </div>
    </div>
  </div>

  <div class="footer py-4">
    <div class="container-fluid text-center">
      <p>

        Copyright &copy; All rights reserved | Picture254
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


      $('.btn_publish').click(function(event) {

        event.stopPropagation();

        // alert(';ll');
        // return false;

      $.ajax({
        url: '{{ route('published') }}',
        type: 'POST',
        data: {

          upload_id: $(this).data('id'),
          _token: '{{csrf_token()}}',

        },
        success: function(response){
            
            // $(this).text("Published");

        },
        error: function(jqXHR, textStatus, errorThrown){
          console.log(errorThrown);
          alert(errorThrown);
        }
      });

      $(this).text("Published");

  });

  </script>
    
  </body>
</html>