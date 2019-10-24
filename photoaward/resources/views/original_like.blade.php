<!-- Header -->
<div class="header" id="myHeader">
 <!--  <h1 style="color: "><span style="color: #ff00ff;">E</span>njoy <span style="color: #ff00ff;">A</span>nd <span style="color: #ff00ff;">V</span>ote <span style="color: #ff00ff;">F</span>or <span style="color: #ff00ff;">C</span>ool <span style="color: #ff00ff;">P</span>ics</h1> -->


</div>

<!-- Photo Grid -->
@if(count($images) > 0)
<div class="row"> 
<div class="column">
  @foreach($images_1 as $image)
  <div style="position: relative;" class="imghover">
      <a href="{{ asset('uploads') }}/{{ $image->imageName }}"><img class="myigg" src="{{ asset('uploads') }}/{{ $image->imageName }}" style="width:100%" oncick="myFunction(this);"></a>
      <span style="width: 100%; padding: 20px; right: 0; top: 0; position: absolute; font-size: 20px;">
      
      @if(count($image->votes) >0)
        <i class="vote hoverr fa fa-heart-o" style="font-size: 32px; background: #f0f0f5; padding: 6px; border-radius: 8px; color: #ff00ff;" data-id="{{ $image->id }}"></i> 
      @else
        <i class="vote hoverr fa fa-heart-o" style="font-size: 32px; background: #f0f0f5; padding: 6px; border-radius: 8px;" data-id="{{ $image->id }}"></i> 

      @endif
        {{ count($image->votes) }}
      


      </span>
  </div>
  @endforeach
</div>

<div class="column">
  @foreach($images_2 as $image)
  <div style="position: relative;" class="imghover">
      <a href="{{ asset('uploads') }}/{{ $image->imageName }}"><img class="myigg" src="{{ asset('uploads') }}/{{ $image->imageName }}" style="width:100%" oncick="myFunction(this);"></a>
      <span style="width: 100%; padding: 20px; right: 0; top: 0; position: absolute; font-size: 20px;">
      
      @if(count($image->votes) >0)
        <i class="vote hoverr fa fa-heart-o" style="font-size: 32px; background: #f0f0f5; padding: 6px; border-radius: 8px; color: #ff00ff;" data-id="{{ $image->id }}"></i> 
      @else
        <i class="vote hoverr fa fa-heart-o" style="font-size: 32px; background: #f0f0f5; padding: 6px; border-radius: 8px;" data-id="{{ $image->id }}"></i> 

      @endif
        {{ count($image->votes) }}
      


      </span>
  </div>
  @endforeach
</div>

<div class="column">
  @foreach($images_3 as $image)
  <div style="position: relative;" class="imghover">
      <a href="{{ asset('uploads') }}/{{ $image->imageName }}"><img class="myigg" src="{{ asset('uploads') }}/{{ $image->imageName }}" style="width:100%" oncick="myFunction(this);"></a>
      <span style="width: 100%; padding: 20px; right: 0; top: 0; position: absolute; font-size: 20px;">
      
      @if(count($image->votes) >0)
        <i class="vote hoverr fa fa-heart-o" style="font-size: 32px; background: #f0f0f5; padding: 6px; border-radius: 8px; color: #ff00ff;" data-id="{{ $image->id }}"></i> 
      @else
        <i class="vote hoverr fa fa-heart-o" style="font-size: 32px; background: #f0f0f5; padding: 6px; border-radius: 8px;" data-id="{{ $image->id }}"></i> 

      @endif
        {{ count($image->votes) }}
      


      </span>
  </div>
  @endforeach
</div>

<div class="column">
  @foreach($images_4 as $image)
  <div style="position: relative;" class="imghover">
      <a href="{{ asset('uploads') }}/{{ $image->imageName }}"><img class="myigg" src="{{ asset('uploads') }}/{{ $image->imageName }}" style="width:100%" oncick="myFunction(this);"></a>
      <span style="width: 100%; padding: 20px; right: 0; top: 0; position: absolute; font-size: 20px;">
      
      @if(count($image->votes) >0)
        <i class="vote hoverr fa fa-heart-o" style="font-size: 32px; background: #f0f0f5; padding: 6px; border-radius: 8px; color: #ff00ff;" data-id="{{ $image->id }}"></i> 
      @else
        <i class="vote hoverr fa fa-heart-o" style="font-size: 32px; background: #f0f0f5; padding: 6px; border-radius: 8px;" data-id="{{ $image->id }}"></i> 

      @endif
        {{ count($image->votes) }}
      


      </span>
  </div>
  @endforeach
</div>

</div>
@else
<h3 class="alert alert-danger" style="width: 50%; margin: 0 auto;">Sorry, the album is empty</h3>

@endif
    
    {{-- <img class="myig" src="images/pic33.jpg" style="width:100%">
    <img class="myig" src="images/pic29.jpg" style="width:100%">
    <img class="myig" src="images/pic36.jpg" style="width:100%">
    <img class="myig" src="images/pic37.jpg" style="width:100%">
    <img class="myig" src="images/pic39.jpg" style="width:100%">
    <img class="myig" src="images/pic46.jpg" style="width:100%">
    <img class="myig" src="images/pic46.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="images/pic12.jpg" style="width:100%">
    <img src="images/pic23.jpg" style="width:100%">
    <img src="images/pic49.jpg" style="width:100%">
    <img src="images/pic26.jpg" style="width:100%">
    <img src="images/pic43.jpg" style="width:100%">
    <img src="images/pic71.jpg" style="width:100%">
    <img src="images/pic71.jpg" style="width:100%">
    <img src="images/pic71.jpg" style="width:100%">
  </div>  
  <div class="column">
    <img src="images/pic48.jpg" style="width:100%">
    <img src="images/pic13.jpg" style="width:100%">
    <img src="images/pic61.jpg" style="width:100%">
    <img src="images/pic6.jpg" style="width:100%">
    <img src="images/pic7.jpg" style="width:100%">
    <img src="images/pic9.jpg" style="width:100%">
    <img src="images/pic42.jpg" style="width:100%">
    <img src="images/pic42.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="images/pic41.jpg" style="width:100%">
    <img src="images/pic45.jpg" style="width:100%">
    <img src="images/pic4.jpg" style="width:100%">
    <img src="images/pic50.jpg" style="width:100%">
    <img src="images/pic57.jpg" style="width:100%">
    <img src="images/pic69.jpg" style="width:100%">
    <img src="images/pic69.jpg" style="width:100%">
    <img src="images/pic69.jpg" style="width:100%">
  </div> --}}
{{-- </div>
</div> --}}

<!-- modal -->

<div id="myModal" class="modal">
  <span class="close" onclick="closeModal()"><i class="fa fa-cloe"></i> </span>
  <div class="row modal-content" style="flex: wrap;">

    <div class="column" style="flex: 100%;">
      <!-- <div class="numbertext">1 / 4</div> -->
      <img id="expandedImg" style="width: 100%; height: 100%;">
    </div>


<!--     <div class="caption-container">
      <p id="caption"></p>
    </div> -->

  </div>
</div>

<!-- end modal -->