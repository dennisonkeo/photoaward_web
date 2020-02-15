<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title>PICTURE+254</title>
  <meta name="keywords" content="PICTURE+254, contest, photographer, photography, entries, owner, Professionals, compete, competition, Contestants,image, photos, Gallery,categories, submit, photograph, winners, Stock, Content, album." />
  <meta name="description" content="This exciting contest gives everyday ordinary people, developing and professional photographers a chance to express themselves to a global audience through the medium of photography." />
  <meta name="author" content="PICTURE+254" />
  <meta property="og:title" content="PICTURE+254" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://picture254.com/" />
  <meta property="og:image" content="www.picture254.com/images/logo.jpg" />
  <meta property="og:site_name" content="PICTURE+254" />
  <meta property="og:description" content="This exciting contest gives everyday ordinary people, developing and professional photographers a chance to express themselves to a global audience through the medium of photography." />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="{{ asset('js/right_click.js') }}"></script>

    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32" />
    <!-- <link rel="stylesheet" type="text/css" href="MyFontsWebfontsKit.css"> -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600,600i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main/main.css"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/logo_.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('images/logo_.png')}}">

            
<script type="text/javascript" src="{{('js/main/jquery.js')}}"></script>
<script type="text/javascript" src="{{('js/main/jquery.yiiactiveform')}}.js"></script>
<script type="text/javascript" src="{{ asset('js/common.js') }}"></script>
<title>PICTURE+254 - photography Awards</title>
            
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-45185287-1', 'ndawards.net');
        ga('send', 'pageview');

    </script>

    <style type="text/css">
        .tile
{
  width:300px;
  height:380px;
  margin:10px;
  /*background-color:#99aeff;*/
  display:inline-block;
  background-size:cover;
  position:relative;
  cursor:pointer;
  transition: all 0.4s ease-out;
  /*box-shadow: 0px 35px 77px -17px rgba(0,0,0,0.44);*/
  overflow:hidden;
  color:white;
  /*font-family:'Roboto';*/
  
}
.tile img
{
  height:100%;
  width:100%;
  position:absolute;
  top:0;
  left:0;
  z-index:0;
  transition: all 0.4s ease-out;
}
.tile .text
{

  /*position:absolute;*/
  /*padding:20px;*/
  height:calc(100% - 60px);
  height:calc(100% - 60px);
}
.tile h1
{
 
  font-weight:300;
  margin:0;
  text-shadow: 2px 2px 10px rgba(0,0,0,0.3);
}
.tile h2
{
  font-weight:100;
  margin:20px 0 0 0;
  font-style:italic;
   transform: translateX(200px);
}
.tile p
{
  font-weight:300;
  /*margin:20px 0 0 0;*/
  /*line-height: 25px;*/

  transform: translateX(-200px);
  transition-delay: 0.2s;
}
.animate-text
{
  opacity:0;
  transition: all 0.6s ease-in-out;
}
.tile:hover
{
/*   background-color:#99aeff; */
box-shadow: 0px 35px 77px -17px rgba(0,0,0,0.64);
  transform:scale(1.05);
}
.tile:hover img
{
  opacity: 0.2;
}
.tile:hover .animate-text
{
  transform:translateX(0);
  opacity:1;
}
.dots
{
  position:absolute;
  bottom:20px;
  right:30px;
  margin: 0 auto;
  width:30px;
  height:30px;
  color:currentColor;
  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:space-around;
  
}

.dots span
{
    width: 5px;
    height:5px;
    background-color: currentColor;
    border-radius: 50%;
    display:block;
  opacity:0;
  transition: transform 0.4s ease-out, opacity 0.5s ease;
  transform: translateY(30px);
 
}

.tile:hover span
{
  opacity:1;
  transform:translateY(0px);
}

.dots span:nth-child(1)
{
   transition-delay: 0.05s;
}
.dots span:nth-child(2)
{
   transition-delay: 0.1s;
}
.dots span:nth-child(3)
{
   transition-delay: 0.15s;
}
@media (max-width: 1000px) {
  .wrap {
   flex-direction: column;
    width:400px;
  }
}
@media (max-width: 1000px) {
  .wrap {
   flex-direction: column;
    width:400px;
  }
}

  .loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid blue;
  border-bottom: 16px solid blue;
  width: 120px;
  height: 120px;
  text-align: center;
  

}
.parallax {
  /* The image used */
  background-image: url('main-the-judges.png');

  /* Set a specific height */
  min-height: 800px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}

.mennu li{
    float: right;
    width: 120px;
    line-height: 70px;
    display: block;
    text-align: center;
    font-family: cambria;

}
.mennu li a{
    text-decoration: none;

}
.mennu li a:hover{
    /*background: black;*/
    color: #ff00ff;
    /*display: block;*/

}
ul{
    list-style: none;
}

</style>
</head>
<body>


<!-- <div class="parallax"></div> -->

<header style="width: 100%; height: 70px; background: #fafafa; color: red;">
    <nav>
        <ul class="mennu">
            <li><a href="login"> SUBMIT</a></li>
            <li><a href="about"> ABOUT</a></li>
            
        </ul>
    </nav>
</header>

<div class="container" id="slider" style="">
    <div class="page" style="padding-left: 0; padding-right: 0; width: 100%;">
        <div class="nav-left">
            <a href="#" style="width: 35px; height: 54px; background: url('images/prev_slider.png') center no-repeat; display: block; text-indent: -9999px;">prev</a>
        </div>
        <div id="mainSlider" style="opaity: 0.5" >
            <div class="group">
            
                <div class="item">
                    <picture>
<!--                        <source media="(max-width: 600px)" srcset="/img2/slide_03-250.jpg">-->
<!--                        <source media="(max-width: 900px)" srcset="/img2/slide_03-400.jpg">-->
                        <img src="images/pic1_.jpg">
                    </picture>
                </div>
                <div class="item">
                    <picture>
<!--                        <source media="(max-width: 600px)" srcset="/img2/slide_06-250.jpg">-->
<!--                        <source media="(max-width: 900px)" srcset="/img2/slide_06-400.jpg">-->
                        <img src="images/pic2_.jpg">
                    </picture>
                </div>
                <div class="item">
                    <picture>
<!--                        <source media="(max-width: 600px)" srcset="/img2/slide_07-250.jpg">-->
<!--                        <source media="(max-width: 900px)" srcset="/img2/slide_07-400.jpg">-->
                        <img src="images/pic7_.jpg">
                    </picture>
                </div>
                <div class="item">
                    <picture>
<!--                        <source media="(max-width: 600px)" srcset="/img2/slide_08-250.jpg">-->
<!--                        <source media="(max-width: 900px)" srcset="/img2/slide_08-400.jpg">-->
                        <img src="images/pic3_.jpg">
                    </picture>
                </div>
                <div class="item">
                    <picture>
<!--                        <source media="(max-width: 600px)" srcset="/img2/slide_09-250.jpg">-->
<!--                        <source media="(max-width: 900px)" srcset="/img2/slide_09-400.jpg">-->
                        <img src="images/pic5_.jpg">
                    </picture>
                </div>
                <div class="item">
                    <picture>
<!--                        <source media="(max-width: 600px)" srcset="/img2/slide_10-250.jpg">-->
<!--                        <source media="(max-width: 900px)" srcset="/img2/slide_10-400.jpg">-->
                        <img src="images/pic16_.jpg">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <!--                        <source media="(max-width: 600px)" srcset="/img2/slide_11-250.jpg">-->
                        <!--                        <source media="(max-width: 900px)" srcset="/img2/slide_11-400.jpg">-->
                        <img src="images/pic19_.jpg">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <!--                        <source media="(max-width: 600px)" srcset="/img2/slide_11-250.jpg">-->
                        <!--                        <source media="(max-width: 900px)" srcset="/img2/slide_11-400.jpg">-->
                        <img src="images/pic17_.jpg">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <!--                        <source media="(max-width: 600px)" srcset="/img2/slide_11-250.jpg">-->
                        <!--                        <source media="(max-width: 900px)" srcset="/img2/slide_11-400.jpg">-->
                        <img src="images/pic18_.jpg">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <!--                        <source media="(max-width: 600px)" srcset="/img2/slide_11-250.jpg">-->
                        <!--                        <source media="(max-width: 900px)" srcset="/img2/slide_11-400.jpg">-->
                        <img src="images/pic11_.jpg">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <!--                        <source media="(max-width: 600px)" srcset="/img2/slide_02-250.jpg">-->
                        <!--                        <source media="(max-width: 900px)" srcset="/img2/slide_02-400.jpg">-->
                        <img src="images/pic6_.jpg">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <!--                        <source media="(max-width: 600px)" srcset="/img2/slide_11-250.jpg">-->
                        <!--                        <source media="(max-width: 900px)" srcset="/img2/slide_11-400.jpg">-->
                        <img src="images/pic12_.jpg">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <!--                        <source media="(max-width: 600px)" srcset="/img2/slide_11-250.jpg">-->
                        <!--                        <source media="(max-width: 900px)" srcset="/img2/slide_11-400.jpg">-->
                        <img src="images/pic20_.jpg">
                    </picture>
                </div>

            </div>
        </div>
        <div class="nav-right">
            <a href="#" style="width: 35px; height: 54px; background: url('images/next_slider.png') center no-repeat; display: block; text-indent: -9999px;">next</a>
        </div>
        <!-- <div style="overflow: hidden;"></div> -->
        <!-- <div class="main-box start">
            <div class="close-button didotltpro-italic"><a href="">close</a></div>
            <h2 class="novecentosanswide-medium" style="margin-bottom: 20px;">annual prestigious photography contest</h2><br/>
            <span class="description didotltpro-italic">Submit your best photos for a chance to win  an award</span><br>
            <a href="" class="button novecentosanswide-medium" id="submit-entry">submit your entry here</a>
        </div> -->

        


        <div style="clear: both;"></div>
    </div>
</div>






<script type="text/javascript" src="js/main/registration-form.js"></script>
<script type="text/javascript" src="js/main/timer.js"></script>
<script type="text/javascript" src="js/main/slider.js"></script>
<script type="text/javascript" src="js/main/flashMessages.js"></script>
<script type="text/javascript" src="js/main/popups.js"></script>
<script type="text/javascript" src="js/main/menu.js"></script>
<script type="text/javascript">
/*<![CDATA[*/
jQuery(function($) {
jQuery('#login-form').yiiactiveform({'attributes':[{'id':'Auth_login','inputID':'Auth_login','errorID':'Auth_login_em_','model':'Auth','name':'login','enableAjaxValidation':true,'status':1},{'id':'Auth_password','inputID':'Auth_password','errorID':'Auth_password_em_','model':'Auth','name':'password','enableAjaxValidation':true,'status':1}]});
jQuery('#registration-form').yiiactiveform({'attributes':[{'id':'RegistrationForm_login','inputID':'RegistrationForm_login','errorID':'RegistrationForm_login_em_','model':'RegistrationForm','name':'login','enableAjaxValidation':true},{'id':'RegistrationForm_loginConfirm','inputID':'RegistrationForm_loginConfirm','errorID':'RegistrationForm_loginConfirm_em_','model':'RegistrationForm','name':'loginConfirm','enableAjaxValidation':true},{'id':'RegistrationForm_password','inputID':'RegistrationForm_password','errorID':'RegistrationForm_password_em_','model':'RegistrationForm','name':'password','enableAjaxValidation':true},{'id':'RegistrationForm_passwordConfirm','inputID':'RegistrationForm_passwordConfirm','errorID':'RegistrationForm_passwordConfirm_em_','model':'RegistrationForm','name':'passwordConfirm','enableAjaxValidation':true}]});
jQuery('#newsletter-form').yiiactiveform({'attributes':[{'id':'Newsletter_email','inputID':'Newsletter_email','errorID':'Newsletter_email_em_','model':'Newsletter','name':'email','enableAjaxValidation':true}]});
});
/*]]>*/
</script>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("top");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

</body>
</html>
