
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from altcoinvests.com/expertoption-trade.com/support by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 08:55:07 GMT -->
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


<!-- START FA FA ICONS LINK -->

<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- END FA FA ICONS LINK -->

<!--==== THIS IS FOR WITHDRAWAL ALEART SWEET ====-->   
    <script src="js/sky.sweet22.js"></script>


<link href="css/responsive.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=1024">
</head>
<body>
<div class="page-wrapper">
    
    



    @include('header')


<div class="sticky-header">
<div class="auto-container clearfix">

<div class="logo pull-left">
<a href="index-2.html" title=""><img src="images/logo-small.png" alt="" title=""></a>
</div>

<div class="pull-right">

<nav class="main-menu">
<div class="navbar-collapse show collapse clearfix">
<ul class="navigation clearfix"></ul>
</div>
</nav>
</div>
</div>
</div>

<div class="mobile-menu">
<div class="menu-backdrop"></div>
<div class="close-btn"><span class="icon flaticon-close-1"></span></div>
<nav class="menu-box">
<div class="nav-logo"><a href="index-2.html"><img src="images/nav-logo.png" alt="" title=""></a></div>
<ul class="navigation clearfix"></ul>
<div class="social-links">
 <ul class="clearfix">
<li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
<li><a href="#"><span class="fa fa-twitter-square"></span></a></li>
<li><a href="#"><span class="fa fa-youtube-square"></span></a></li>
<li><a href="#"><span class="fa fa-envelope-square"></span></a></li>
</ul>
</div>
</nav>
</div>
</header>


<section class="page-title" style="background-image:url(images/8.jpg);">
<div class="auto-container">
<h1>Contact Us</h1>
<div class="text">For Quries And Questions</div>
</div>

<div class="page-info">
<div class="auto-container clearfix">
<ul class="bread-crumb">
<li><a href="index-2.html">Home</a></li>
<li>Contact Us</li>
</ul>
</div>
</div>

</section>


<section class="contact-page-section">
<div class="auto-container">
<div class="sec-title">
<span class="title">our information</span>
<h2>Contact Us</h2>
</div>
<div class="row clearfix">

<div class="column col-lg-8 col-md-12 col-sm-12">

<div class="contact-form">

<script language=javascript>

function checkform() {
  if (document.mainform.name.value == '') {
    alert("Please type your full name!");
    document.mainform.name.focus();
    return false;
  }
  if (document.mainform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.mainform.email.focus();
    return false;
  }
  if (document.mainform.message.value == '') {
    alert("Please type your message!");
    document.mainform.message.focus();
    return false;
  }
  return true;
}

</script>
<form action="https://altcoinvests.com/expertoption-trade.com/contact_s.php" method="POST" id="LoginForm">
<div class="row clearfix">
<div class="col-lg-6 col-md-12 col-sm-12 form-group">
<input type="text" name="fname" value="" placeholder="Name" required>
</div>
<div class="col-lg-6 col-md-12 col-sm-12 form-group">
<input type="email" name="email" value="" placeholder="Email" required>
</div>
<div id="result"></div>
<div class="col-lg-12 col-md-12 col-sm-12 form-group">
<textarea name="message" placeholder="Massage"></textarea>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 form-group">
<button class="theme-btn btn-style-two" type="submit" id="btn" value="Send"><span class="btn-title">Send Massage</span></button>
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
          url: "contact_s.php",
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

<div class="column col-lg-4 col-md-12 col-sm-12">
<div class="text">Feel free to get in touch with me. we alwasy open to discussing now projects, createive ideas or opportunities to be part of your visions</div>
<ul class="contact-info">
<li>
<span class="icon fa fa-globe"></span>
<strong>Location </strong>
41 Warren St
WEST HALTON
DN15 1RL
</li>
<li>
<span class="icon fa fa-phone-volume"></span>
<strong>Call Center</strong>
<a href="tel:+447852351149">+44(785)235-1149</a>, <a href="#"></a>
</li>
<li>
<span class="icon fa fa-envelope-open"></span>
<strong>Email Us</strong>
<a href="mailto:support@expertoption-trade.com">support@expertoption-trade.com</span></a>
</li>
</ul>
<ul class="social-icon-three">
<li class="title">Follow Us</li>
<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
<li><a href="#"><span class="fa fa-google-plus-g"></span></a></li>
<li><a href="#"><span class="fa fa-twitter"></span></a></li>
<li><a href="#"><span class="fa fa-skype"></span></a></li>
<li><a href="#"><span class="fa fa-linkedin-in"></span></a></li>
</ul>
</div>
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
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script src="../../widgets.coingecko.com/coingecko-coin-ticker-widget.js"></script>
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


<!-- Mirrored from altcoinvests.com/expertoption-trade.com/support by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 08:55:07 GMT -->
</html>