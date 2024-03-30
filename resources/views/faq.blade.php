
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from altcoinvests.com/expertoption-trade.com/faq by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 08:55:04 GMT -->
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


<section class="page-title" style="background-image:url(images/8.jpg);">
<div class="auto-container">
<h1>Frequently Asked Questions</h1>
</div>

<div class="page-info">
<div class="auto-container clearfix">
<ul class="bread-crumb">
<li><a href="index-2.html">Home</a></li>
<li>FAQ’s</li>
</ul>
</div>
</div>

</section>


<section class="faqs-section">
<div class="auto-container">
<div class="row">

<div class="faq-column col-lg-7 col-md-12 col-sm-12">
<div class="inner-column">
<div class="sec-title">
<span class="title">Faquality Ask Question</span>
<h2>FAQ’s</h2>
</div>
<ul class="accordion-box">

<li class="accordion block active-block">
<div class="acc-btn active">Who can become an investor of the company?<div class="icon fa fa-plus-circle"></div></div>
<div class="acc-content current">
<div class="content">
<div class="text">Any competent person who has reached the age of maturity according to the laws of his country (or in any case, no less than 18 years old) can become an investor of fx efinance. </div>
</div>
</div>
</li>

<li class="accordion block ">
<div class="acc-btn">Which material types can you work with? <div class="icon fa fa-plus-circle"></div></div>
<div class="acc-content">
<div class="content">
<div class="text">There are many variations of passages of available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of industry.</div>
</div>
</div>
</li>

<li class="accordion block">
<div class="acc-btn">How do I open a deposit?<div class="icon fa fa-plus-circle"></div></div>
<div class="acc-content">
<div class="content">
 <div class="text">You may make your deposit on Make Deposit. Type desired amount in the 'Amount' field, choose payment system and click 'Deposit'. Follow further instructions of your payment system. </div>
</div>
</div>
</li>

<li class="accordion block">
<div class="acc-btn">Which payment systems do you accept?<div class="icon fa fa-plus-circle"></div></div>
<div class="acc-content">
<div class="content">
<div class="text">We work with various electronic payment systems as Bitcoin, Perfect Money, Ethereum, Litecoin, Bitcoin Cash and other cryptocurrencies (the list will be updated). </div>
</div>
</div>
</li>
</ul>
</div>
</div>

<div class="image-column col-lg-5 col-md-12 col-sm-12">
<div class="inner-column">
<div class="image-box wow fadeInRight">
<figure class="image"><img src="images/worker-3.png" alt=""></figure>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="faq-form-section" style="background-image: url(images/9.jpg);">
<div class="auto-container">
<div class="inner-container">
<div class="sec-title light">
<span class="title">Get IT Now</span>
<h2>Your Question</h2>
</div>

<div class="faq-form">
<form action="https://altcoinvests.com/expertoption-trade.com/contacts_s.php" method="POST" id="LoginForm">

<div class="row">
<div class="form-group col-lg-6 col-md-12">
<input type="text" name="fname" placeholder="Name" required>
</div>
<div class="form-group col-lg-6 col-md-12">
<input type="email" name="email" placeholder="Email" required>
</div>
<div id="result"></div>
<div class="form-group col-lg-12 col-md-12">
<textarea name="message" placeholder="Question Detail"></textarea>
</div>
<div class="form-group col-lg-12 col-md-12">
<button class="theme-btn btn-style-one" type="submit" id="btn" value="Send"><span class="btn-title">Send</span></button>
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
          url: "contacts_s.php",
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
</script>


<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-3130f2c2-2cd3-45ba-96d4-0c15166d859b"></div-->


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


<!-- Mirrored from altcoinvests.com/expertoption-trade.com/faq by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 08:55:06 GMT -->
</html>