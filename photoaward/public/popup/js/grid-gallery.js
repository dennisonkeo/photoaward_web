$(document).on('click','.gg-element',function(){
  var selected=$(this);
  var prev=$(this).prev().find('img');
  var next=$(this).next().find('img');
  $('#gg-screen').show();
  var l=$(".gg-element").length-1;
  var p=$(".gg-element").index(selected);
  function buttons(){
    if (l > 1) {
      if (p == 0){
        return '<div><div class="gg-close gg-bt">&times</div><div class="gg-closee gg-btt"><i class="fa fa-heart-o"></i></div> <span class="count">10</span> </div><div class="gg-nxt gg-bt">&rarr;</div>';
      }
      else if (p == l) {
        return '<div><div class="gg-close gg-bt">&times</div><div class="gg-closee gg-btt"><i class="fa fa-heart-o"></i></div> <span class="count">8888</span> </div><div class="gg-prev gg-bt">&larr;</div>';
      }
      else{
        return '<div><div class="gg-close gg-bt">&times</div><div class="gg-closee gg-btt"><i class="fa fa-heart-o"></i></div> <span class="count">8888</span> </div><div class="gg-nxt gg-bt">&rarr;</div><div class="gg-prev gg-bt">&larr;</div>';
      }
    }
    else{
      return '<div><div class="gg-close gg-bt">&times</div><div class="gg-closee gg-btt"><i class="fa fa-heart-o"></i></div> <span class="count">8888</span> </div>';
    }
  }
  buttons();
  var content=buttons();
  $("#gg-screen").html('<div class="gg-image"></div>' + content);
  $(".gg-image").html('<img alt="'+ $('img', this).attr('alt') + '" src="'+ $('img', this).attr('src') + '">');
  

   $(".count").html(selected.find(".rate").text());

   // like image
   $(".gg-closee").click(function(){

    var image_id = selected.find(".uniquk").data('id');

 $.ajaxSetup({
      headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
      
        $.ajax({
        url: 'add-like',
        type: 'POST',
        data: {
          'liked': 1,
          upload_id: image_id,

        },
        success: function(response){
          if(response !="")
          {
            
            selected.find('.rate').text(response);
            $('.count').html(response);
        }

        },
        error: function(jqXHR, textStatus, errorThrown){
          // console.log(errorThrown);

          if(errorThrown == "Unauthorized")
          {
            window.location.href =  '/modall';
          }
        }
      });

    });
  
  $("body").css('overflow','hidden');
  $(document).on('click','.gg-close',function(){
    $("#gg-screen").hide();
    $("body").css('overflow','auto');
  });
  $("#gg-screen").on('click', function(e) {
    if (e.target == this){
      $("#gg-screen").hide();
      $("body").css('overflow','auto');
    }
  });
  $(document).on('click','.gg-prev',function(){
    selected=selected.prev();
    prev=selected.find('img');
    var previmg='<img alt="'+ prev.attr('alt') +'" src="'+ prev.attr('src') +'">';

    var test = $(".count").text();
     console.log("index: "+$(".count"));


    $(".gg-image").html(previmg);
    console.log(prev.attr('alt'));
    
    p=$(".gg-element").index(selected);
    buttons();
    content=buttons();
    $("#gg-screen").html('<div class="gg-image">'+ previmg + '</div>' + content);

    // $(".count").html(prev.attr('alt'));

    $(".count").html(selected.find(".rate").text());

    console.log("index: "+$(".count").index());

          // like image
   $(".gg-closee").click(function(){

    var image_id = selected.find(".pop").text();


    console.log(image_id);

 $.ajaxSetup({
      headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
      
        $.ajax({
        url: 'add-like',
        type: 'POST',
        data: {
          'liked': 1,
          upload_id: image_id,
          // _token: 'csrf_token()'
        },
        success: function(response){
          if(response !="")
          {
          // $upload.parent().find('p').text(response);
          // $(".gg-element").find("img").attr(response);
          $('.count').html(response);
          console.log("total: "+response);
        }

        },
        error: function(jqXHR, textStatus, errorThrown){
          console.log(errorThrown);
          if(errorThrown == "Unauthorized")
          {
            window.location.href =  '/modall';
          }
        }
      });

    });

  }); 

  $(document).on('click','.gg-nxt',function(){
    selected=selected.next();
    console.log(selected);
    next=selected.find('img');
    console.log(next);
    var nxtimg='<img src="'+ next.attr('src') +'">';
    $(".gg-image").html(nxtimg);
    p=$(".gg-element").index(selected);
    buttons();
    content=buttons();
    $("#gg-screen").html('<div class="gg-image">'+ nxtimg + '</div>' + content);

    // $(".count").html(next.attr('alt'));
    $(".count").html(selected.find(".rate").text());

       // like image
   $(".gg-closee").click(function(){

    var image_id = selected.find(".pop").text();

    console.log(image_id);
 $.ajaxSetup({
      headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
      
        $.ajax({
        url: 'add-like',
        type: 'POST',
        data: {
          'liked': 1,
          upload_id: image_id,
          // _token: 'csrf_token()'
        },
        success: function(response){
          if(response !="")
          {
          // $upload.parent().find('p').text(response);
          // $(".gg-element").find("img").attr(response);
          console.log("total: "+response);
          $('.count').html(response);
        }

        },
        error: function(jqXHR, textStatus, errorThrown){
          // console.log(errorThrown);
          if(errorThrown == "Unauthorized")
          {
            window.location.href =  '/modall';
          }
        }
      });

    });

  });
  $(document).on('keydown',function(e) {
    if(e.keyCode == 37 && p>0) {
      selected=selected.prev();
      prev=selected.find('img');
      var previmg='<img src="'+ prev.attr('src') +'">';
      $(".gg-image").html(previmg);
      p=$(".gg-element").index(selected);
      buttons();
      content=buttons();
      $("#gg-screen").html('<div class="gg-image">'+ previmg + '</div>' + content);
    }
    else if(e.keyCode == 39 && p < l) {
      selected=selected.next();
      next=selected.find('img');
      var nxtimg='<img src="'+ next.attr('src') +'">';
      $(".gg-image").html(nxtimg);
      p=$(".gg-element").index(selected);
      buttons();
      content=buttons();
      $("#gg-screen").html('<div class="gg-image">'+ nxtimg + '</div>' + content);
    }
  });
});
