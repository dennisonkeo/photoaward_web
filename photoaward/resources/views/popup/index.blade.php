
  <?php
    use App\Upload;
    $images = Upload::where('uploaded', 'yes')->latest()->get();
  ?>  

    {{-- <script src="{{ asset('js/right_click.js') }}"></script> --}}

    <link rel="stylesheet" href="{{asset('popup/css/grid-gallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('popup/css/grid-gallery.css')}}">
    <style>
    h1 { margin-top: 30px; text-align: center;}

.likee{
  width: 38px;
  height: 38px;
  background: rgba(255,255,255,0.8);
text-align: center;
  border-radius: 50%;
  cursor: pointer;
  -moz-transition: all .4s ease;
  -o-transition: all .4s ease;
  -webkit-transition: all .4s ease;
  transition: all .4s ease;
  display: none;

}
.likee:hover{
  background: #ff00ff;
  border: 1px solid rgba(0,0,0,0.5);
}

.gg-element:hover .likee{
  display: block;
}
  </style>


    <div id="gg-screen"></div>
    <h1 style="margin-bottom: 20px;">Vote For Cool Photos</h1>
    <div class="gg-box">
    @foreach($images as $image)
      <div class="gg-element" style="position: relative;">
      {{-- <span class="img_click"> --}}
        <img src="{{ asset('uploads') }}/{{ $image->imageName }}" alt="{{ count($image->votes) }}">
      {{-- </span> --}}

        <div class="likee" style="position: absolute; top: 0;"><i class="inner fa fa-heart-o" style="vertical-align: middle; line-height: 38px;"></i><p class="pop" style="display: none;">{{ $image->id }}</p><p class="rate">{{ count($image->votes) }}</p></div>
      </div>

    @endforeach
      <!-- <div class="gg-element">
        <img src="https://picsum.photos/1600/1200/?random">
      </div>
      <div class="gg-element">
        <img src="https://picsum.photos/1200/1600/?random">
      </div>
      <div class="gg-element">
        <img src="https://picsum.photos/1600/1201/?random">
      </div>
      <div class="gg-element">
        <img src="https://picsum.photos/1200/1601/?random">
      </div>
      <div class="gg-element">
        <img src="https://picsum.photos/1201/1600/?random">
      </div>
      <div class="gg-element">
        <img src="https://picsum.photos/1600/1310/?random">
      </div>
      <div class="gg-element">
        <img src="https://picsum.photos/1602/1311/?random">
      </div>
      <div class="gg-element">
        <img src="https://picsum.photos/1603/1311/?random">
      </div>
      <div class="gg-element">
        <img src="https://picsum.photos/1602/1312/?random">
      </div>
      <div class="gg-element">
        <img src="https://picsum.photos/1201/1601/?random">
      </div>
      <div class="gg-element">
        <img src="https://picsum.photos/1201/1602/?random">
      </div>
      <div class="gg-element">
        <img src="https://picsum.photos/1602/1313/?random">
      </div>
      <div class="gg-element">
        <img src="https://picsum.photos/1602/1314/?random">
      </div>
      <div class="gg-element">
        <img src="https://picsum.photos/1602/1315/?random">
      </div>
      <div class="gg-element">
        <img src="https://picsum.photos/1602/1316/?random">
      </div>
      <div class="gg-element">
        <img src="https://picsum.photos/1203/1602/?random">
      </div>
      <div class="gg-element">
        <img src="https://picsum.photos/1605/1312/?random">
      </div>
      <div class="gg-element">
        <img src="https://picsum.photos/1204/1602/?random">
      </div>
      <div class="gg-element">
        <img src="https://picsum.photos/1205/1602/?random">
      </div>
      <div class="gg-element">
        <img src="https://picsum.photos/1205/1602/?random">
      </div> -->
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script type="text/javascript" src="{{asset('popup/js/grid-gallery.js')}}"></script>

<script type="text/javascript">
  var inner = document.querySelector(".likee");
var outer = document.querySelector(".gg-element");
// inner.addEventListener('click',innerFunction);
// outer.addEventListener('click',outerFunction);

function innerFunction(event){
  event.stopPropagation();
  console.log("Inner Functiuon");
  alert('Yes');
  // event.stopPropagation();

}

function outerFunction(event){
  console.log("Outer Functiuon");
  alert('gg-element');
}

var allButtons = document.querySelectorAll('i[class^=inner]');
console.log("Found", allButtons.length, "div which class starts with “button”.");

for (var i = 0; i < allButtons.length; i++) {
  allButtons[i].addEventListener('click', function(event) {
    event.stopPropagation();
    
          
          $upload = $(this);

          var image_id = $upload.parent().find('p').first().text()

          console.log($upload.parent().find('p'));
          console.log($upload.parent().find('p').first().text());

          var str = $upload.parent().find('p').first().text();
          $( ".count" ).html( str );
          console.log( $( ".count" ).html( str ));


      $.ajax({
        url: 'add-like',
        type: 'POST',
        data: {
          'liked': 1,
          upload_id: image_id,
          _token: '{{csrf_token()}}'
        },
        success: function(response){
          if(response !="")
          {
          $upload.parent().find('p').text(response);
          $(".gg-element").find("img").attr(response);
          $('.gg-image > img[alt=""]').attr('alt', response);
          // $post.addClass('hide');
          // $post.siblings().removeClass('hide');
        }

          // console.log(response);

        },
        error: function(jqXHR, textStatus, errorThrown){
          console.log(errorThrown);
          // alert('An error occured');
        }
      });

  });
}

// var allButtonss = document.querySelectorAll('div[class^=gg-element]');
// console.log("Found", allButtonss.length, "div which class starts with “button”.");

// for (var i = 0; i < allButtonss.length; i++) {
//   allButtonss[i].addEventListener('click', function(event) {
//     // event.stopPropagation();
    
          
//           // $upload = $(this);

//           // var image_id = $upload.parent().find('p').first().text()

//           // console.log($upload.parent().find('p'));
//           // console.log($upload.parent().find('p').first().text());

//           var str = $( ".pop" ).text();
//           $( ".count" ).html( str );
//           console.log( str);


//       // $.ajax({
//       //   url: 'add-like',
//       //   type: 'POST',
//       //   data: {
//       //     'liked': 1,
//       //     upload_id: image_id,
//       //     _token: '{{csrf_token()}}'
//       //   },
//       //   success: function(response){
//       //     if(response !="")
//       //     {
//       //     $upload.parent().find('p').text(response);
//       //     // $post.addClass('hide');
//       //     // $post.siblings().removeClass('hide');
//       //   }

//       //     // console.log(response);

//       //   },
//       //   error: function(jqXHR, textStatus, errorThrown){
//       //     console.log(errorThrown);
//       //     // alert('An error occured');
//       //   }
//       // });

//   });
// }
</script>