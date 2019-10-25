<?php
  use App\Upload; 

    $images = Upload::where('token',session()->getId())->where('uploaded','no')->get();
?>

<style type="text/css">
        .badge {
  padding-left: 9px;
  padding-right: 9px;
  -webkit-border-radius: 9px;
  -moz-border-radius: 9px;
  border-radius: 9px;
}

.label-warning[href],
.badge-warning[href] {
  background-color: #c67605;
}
#lblCartCount {
    font-size: 12px;
    background: #ff0051;
    color: #fff;
    padding: 0 5px;
    vertical-align: top;
    margin-left: -10px; 
}
</style>

<header style="background: #000; color: #ff0051; height: 80px;">
    <div>
        {{-- <p style="text-align: center; color: white;">Our header info</p> --}}
       <a style="text-decoration: none; color: #ff0051;" href="{{route('/')}}"> <img src="{{ asset('images/logo_.png') }}" alt="logo" style="height: 6.0rem; line-height: 80px; background-size: cover;"> PICTURE <span>+254</span>

        <a href="view-album" style="float: right; padding-right: 10px; text-decoration: none; color: #ff0051;">
                    <i class="fa fa-camera-retro" style="font-size:24px; color: #fff;">{{-- &#xf07a; --}}</i>
                    <span class='badge badge-success' id='lblCartCount'> {{ count($images) }} </span>
                    View Album
        </a>
    </div>
    <div style="float: right;">
        
    </div>
</header>
          