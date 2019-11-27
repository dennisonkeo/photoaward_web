<!doctype html>
<html lang="en">
<head>
  <title>Picture254</title>
  <meta charset="utf-8">
  <meta name="description" content="Simple lightweight javascript popup modal plugin"><meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet"><script async defer="defer" src="https://buttons.github.io/buttons.js"></script><link href="{{ asset('popup_alert/css/jPopup.css') }}" rel="stylesheet" type="text/css">
</head>
  <style>/*** DEMO style ***/



    html {

        font-size: 62.5%;

    }

/*    html, body {

        background: #f9f9f9; margin: 0; padding: 0; font-family: 'Comfortaa', cursive, serif; color: #6584c1;

    }*/

/*    .header {

        margin: 100px auto 60px auto;

    }*/

    .demoContent {

        width: 50rem; margin: 20px auto; padding: 35px; box-sizing: border-box;
        background: #fff; border-radius: 4px; border: 1px solid #e6e6e6; box-shadow: 0 0 15px #ececec;

    }

    h1 {

        font-size: 90px; text-align: center; margin: 0; line-height: 1; text-decoration: underline;
        color: #de6e40;

    }

    h2 {

        font-size: 20px; text-align: center; line-height: 1.5; padding: 0; margin: 0 0 25px 0;

    }

    .openPopupButton {

        width: 100%; display: block; margin: 0; padding: 20px 30px; outline: 0; box-sizing: border-box; cursor: pointer;
        background: #6584c1; font-family: 'Comfortaa', cursive, serif; font-size: 16px; color: #fff; text-align: center; text-transform: uppercase;
        border-radius: 4px; font-weight: bold; border: 0;

    }

    .btnWrap {

        margin: 50px 15% 0 15%; padding-top: 20px; border-top: 1px solid #e2e2e2;
        text-align: center;

    }

    .jPopup .content {

        text-align: center;

    }

    .jPopup .content strong {

        font-size: 50px;

    }

    .jPopup .content p {

        font-size: 22px; line-height: 1.5;

    }

    .jPopup .content a {

        color: #de6e40;

    }

    .jPopup .content em {

        font-style: normal; color: #558eff;

    }

    @media screen and (max-width: 640px) {

        .header {

            margin: 50px auto 30px auto;

        }

        h1 {

            font-size: 65px;

        }

        h2 {

            font-size: 16px;

        }

        .demoContent {

            width: auto; 
            /*margin: 20px;*/

        }

        .btnWrap {

            margin: 50px 20px 0 20px;

        }

        .jPopup .content p {

            font-size: 16px;

        }

    }</style>
    <body id="pop_id">
     {{--  <header class="header"><h1>jPopup</h1></header>
      <main class="demoContent"><h2>Simple lightweight javascript popup modal plugin</h2><button class="openPopupButton" type="button">Open popup</button></main><footer class="btnWrap"><a class="github-button" href="https://github.com/robiveli/jpopup" data-size="large" aria-label="View on GitHub">View on GitHub</a> <a class="github-button" href="https://github.com/robiveli/jpopup/archive/master.zip" data-icon="octicon-cloud-download" data-size="large" egaaria-label="Download robiveli/jCaptcha on GitHub">Download</a></footer> --}}


       <script src="https://users.worldphoto.org/js/jquery.min.js"></script>
      <script src="{{ asset('popup_alert/js/jPopup.min.js') }}"></script>
      <script>/*** DEMO js ***/

    // document.querySelector('.openPopupButton').addEventListener('click', function() {

      $(function () {

        var demoContent = '<div style="text-align: left;">\
  <img style="vertical-align:middle; width:450px; height: auto;  border-radius:15px;" src="images/pic47.jpg">\
  <span style="vertical-align:middle; font-size: 20px; ">Like What You See?</span><button id="btn" class="btn btn-secondary btn-block" style="vertical-align:middle; margin-left: 15px; height: 40px; border-radius:5px;">Vote</button> <button id="btn_later" class="btn btn-secondary btn-block" style="vertical-align:middle; margin-left: 15px; height: 40px; border-radius:5px;">Vote Later</button>\
</div>';

        

        setTimeout(function(){
                 
                 var jPopupDemo = new jPopup({

            content: demoContent,
            hashtagValue: '#demopopup'

        });
            
        }, 30000);

    });

    $(document).on('click','#btn',function(){

      window.location.href =  '{{ url('like-images') }}';

    });

    $(document).on('click','#btn_later',function(){

        jPopup.prototype.close(true);

        var demoContent = '<div style="text-align: left;">\
  <img style="vertical-align:middle; width:450px; height: auto;  border-radius:15px;" src="images/pic47.jpg">\
  <span style="vertical-align:middle; font-size: 20px; ">Like What You See?</span><button id="btn" class="btn btn-secondary btn-block" style="vertical-align:middle; margin-left: 15px; height: 40px; border-radius:5px;">Vote</button> <br><br>    <button id="btn_later" class="btn btn-secondary btn-block" style="vertical-align:middle; margin-left: 15px; height: 40px; border-radius:5px;">Vote Later</button>\
</div>';

      setTimeout(function(){
                 
                 var jPopupDemo = new jPopup({

            content: demoContent,
            hashtagValue: '#demopopup'

        });
            
        }, 15000);

    });

  </script>
</body>
</html>