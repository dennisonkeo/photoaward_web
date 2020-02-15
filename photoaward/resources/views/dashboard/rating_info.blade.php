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


    <style type="text/css">
      .btn_publish{
        background: #000;
        border: #000;
      }

      .jq-stars {
  display: inline-block;
}

.jq-rating-label {
  font-size: 22px;
  display: inline-block;
  position: relative;
  vertical-align: top;
  font-family: helvetica, arial, verdana;
}

.jq-star {
  width: 100px;
  height: 100px;
  display: inline-block;
  cursor: pointer;
}

.jq-star-svg {
  padding-left: 3px;
  width: 80%;
  height: 80% ;
}

.jq-star:hover .fs-star-svg path {
}

.jq-star-svg path {
  /* stroke: #000; */
  stroke-linejoin: round;
}

/* un-used */
.jq-shadow {
  -webkit-filter: drop-shadow( -2px -2px 2px #888 );
  filter: drop-shadow( -2px -2px 2px #888 );
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
    
  @include('dashboard.rating_header')

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
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="{{ asset('uploads') }}/{{ $image->imageName }}" data-sub-html="<h4>Author <button class='btn_publish btn btn-info' style='border-radius: 5px;' data-id='{{ $image->id }}' >Rate</button></h4><p>Image caption</p>" style="" >
          <a href="#">
            <img src="{{ route('image-resize',$image->imageName) }}" alt="Image" class="img-fluid" style="heiht: 100px;">
          </a>
          <button data-toggle="modal" data-target="#exampleModal" style="margin-top: 3px;" class="btn_publish btn btn-primary btn-block" data-id="{{ $image->id }}">Rate
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

    
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rate This Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
          Creativity
          <span class="my-rating-9"></span>
          <span class="Creativity"></span>
          <br><br>

          Uniqueness
          <span class="my-rating-10"></span>
          <span class="Uniqueness"></span>
          <br><br>

          Originality
          <span class="my-rating-11"></span>
          <span class="Originality"></span>
          <br><br>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>

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
  <script src="{{ asset('category/js/star-rating.js') }}"></script>


  <script>
    $(document).ready(function(){
      $('#lightgallery').lightGallery();

          $(".my-rating-9").starRating({
          initialRating: 0,
          disableAfterRate: false,
          onHover: function(currentIndex, currentRating, $el){
            $('.Creativity').text(currentIndex);
            console.log($('.Creativity'));
          },
          onLeave: function(currentIndex, currentRating, $el){
            $('.Creativity').text(currentRating);
          }
        });

          $(".my-rating-10").starRating({
          initialRating: 0,
          disableAfterRate: false,
          onHover: function(currentIndex, currentRating, $el){
            $('.Uniqueness').text(currentIndex);
            console.log($('.Uniqueness'));
          },
          onLeave: function(currentIndex, currentRating, $el){
            $('.Uniqueness').text(currentRating);
          }
        });

          $(".my-rating-11").starRating({
          initialRating: 0,
          disableAfterRate: false,
          onHover: function(currentIndex, currentRating, $el){
            $('.Originality').text(currentIndex);
            console.log($('.Originality'));
          },
          onLeave: function(currentIndex, currentRating, $el){
            $('.Originality').text(currentRating);
          }
        });


      });


      $('.btn_rate').click(function(event) {

        event.stopPropagation();

        $('#exampleModal').modal({
                    backdrop: 'static'
                });

        // alert(';ll');
        // return false;

      $.ajax({
        url: '{{ route('published') }}',
        type: 'POST',
        data: {

          Creativity: $(".Creativity").text(),
          Uniqueness: $(".Uniqueness").text(),
          Originality: $(".Originality").text(),
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