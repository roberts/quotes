<!DOCTYPE HTML>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta charset="utf-8">

<!-- Description, Keywords and Author -->

<meta name="description" content="New Tipoff website coming soon...">
<meta name="author" content="">
<title>Tipoff</title>

<!-- style -->

<link href="{{ URL::secure('src/construction/css/style.css') }}" rel="stylesheet">

<!-- style -->

<!-- bootstrap -->

<link href="{{ URL::secure('src/construction/css/bootstrap.min.css') }}" rel="stylesheet">

<!-- responsive -->

<link href="{{ URL::secure('src/construction/css/responsive.css') }}" rel="stylesheet">

<!-- font-awesome -->

<link href="{{ URL::secure('src/construction/css/font-awesome.min.css') }}" rel="stylesheet">

<!-- font-awesome -->

<!-- Video -->

<link href="{{ URL::secure('src/construction/css/video.css') }}" rel="stylesheet">
</head>

<body>

<!--Video Section--> 

<a id="video" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=AgnZGty6VBA',containment:'.bg-container-youtube', showControls:false, autoPlay:true, mute:true, loop:true,  startAt:0, opacity:1, showYTLogo:false, addRaster:false, quality:'large'}"></a>
<div class="bg-container-youtube"></div>
<div class="overlay-bg"></div>

<!--Video Section--> 

<!-- main -->

<main role="video-container"> 
  
  <!-- container -->
  
  <div class="container"> 
    
    <!-- tab-content -->
    
    <div class="tab-content text-center"> 
      
      <!-- Countdown -->
      
      <section id="home" class="tab-pane fade in active">
        <article role="countdown" class="countdown-pan">
          <div id="countdown" class="text-center">
              <img src="{{ URL::secure('src/logo/T2_png.png') }}" width="320" height="134" style="display: block;margin-left:auto;margin-right:auto;">
          </div>
        </article>
      </section>
      
      <!-- Countdown --> 
      
      <!-- introduction -->
      
      <section id="menu1" class="tab-pane fade">
        <article role="introduction" class="introduction-pan">
          <header class="page-title">
            <h2>Coming Soon! (Canary Version 2) </h2>
          </header>
          <p>We are in the process of creating a resource for entrepreneurs and leaders. There will be <a href="{{ route('quotes') }}">quotes</a>, articles, <br/>
            interviews, news, and more quality content to help you grow your business and leadership skills. Thanks for <br/>
            checking in on us and come back soon to become involved in our growing community.</p>
          
          <!-- services -->
          
          <!-- <ul role="services">
            <li> <i class="fa fa-diamond" aria-hidden="true"></i>
              <h6>Branding Consuting</h6>
              <p>We are a team of talented people<br/>
                with big ideas and creative.</p>
            </li>
            <li> <i class="fa fa-camera-retro" aria-hidden="true"></i>
              <h6>Fashion Photography</h6>
              <p>We are a team of talented people<br/>
                with big ideas and creative.</p>
            </li>
            <li> <i class="fa fa-bullhorn" aria-hidden="true"></i>
              <h6>Digital Marketing</h6>
              <p>We are a team of talented people<br/>
                with big ideas and creative.</p>
            </li>
          </ul> -->
          
          <!-- services --> 
          
        </article>
      </section>
      
      <!-- introduction --> 
      
      <!-- Subscribe -->
      
      <section id="menu2" class="tab-pane fade">
        <article role="subscribe" class="subscribe-pan">
          <header class="page-title">
            <h2>Email Newsletter</h2>
          </header>
          <div class="ntify_form">
            <form method="post" action="php/subscribe.php" name="subscribeform" id="subscribeform">
              <input name="email" type="email" id="subemail" placeholder="Enter Your Email...">
              <label>
                <input name="" type="submit" class="button-icon">
                <i class="fa fa-paper-plane" aria-hidden="true"></i> </label>
            </form>
            
            <!-- subscribe message -->
            
            <div id="mesaj"></div>
            
            <!-- subscribe message --> 
            
          </div>
          <p>Please enter your email and we'll let you know once<br/>
            we're up and running.</p>
        </article>
      </section>
      
      <!-- Subscribe --> 
      
      <!-- Contact -->
      
      <!-- <section id="menu3" class="tab-pane fade">
        <article role="contact" class="contact-pan">
          <header class="page-title">
            <h2>Stay in touch with us</h2>
          </header>
          <h3><a href="mailto:Contact@pixicon.com">Contact @ pixicon.com</a></h3>
          <ul>
            <li><i class="fa fa-map-marker" aria-hidden="true"></i> Collins Street West Victoria 8007 Australia.</li>
            <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:1-212-290-4700">+1-212-290-4700</a></li>
          </ul>
        </article>
      </section>
    </div> -->
    
    <!-- tab-content --> 
    
  </div>
  
  <!-- container --> 
  
</main>

<!-- main --> 

<!--             

                    </div>

                </section>--> 

<!--Video Section--> 

<!-- header -->

<header role="header">
  <hgroup> 
    
    <!-- logog -->
    
    <h1><a href="#" title="Tipoff">Tipoff</a></h1>
    
    <!-- logog --> 
    
    <!-- nav -->
    
    <nav role="nav" id="header-nav" class="nav navy">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home" title="Countdown">Logo</a></li>
        <li><a data-toggle="tab" href="#menu1" title="Introduction">Welcome</a></li>
        <li><a data-toggle="tab" href="#menu2" title="Subscribe">Newsletter</a></li>
        <!-- <li><a data-toggle="tab" href="#menu3" title="Contact">Contact</a></li> -->
      </ul>
      <!--<div role="socil-icons" class="mobile-social">
        <li><a href="#" target="_blank" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a href="#" target="_blank" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="#" target="_blank" title="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
        <li><a href="#" target="_blank" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
      </div>-->
    </nav>
    
    <!-- nav --> 
    
    <!-- Socil Icon -->
    
    <!-- <ul role="socil-icons" class="desk-social">
      <li><a href="#" target="_blank" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
      <li><a href="#" target="_blank" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
      <li><a href="#" target="_blank" title="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
      <li><a href="#" target="_blank" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
    </ul> -->
    
    <!-- Socil Icon --> 
    
  </hgroup>
  <footer class="desk">
    <p>&copy; 2017</p>
  </footer>
</header>

<!-- header -->

<footer class="mobile">
  <p>&copy; 2017</p>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 

<script src="{{ URL::secure('src/construction/js/jquery.min.js') }}" type="text/javascript"></script> 

<!-- custom --> 

<script src="{{ URL::secure('src/construction/js/custom.js') }}" type="text/javascript"></script> 
<script src="{{ URL::secure('src/construction/js/nav-custom.js') }}" type="text/javascript"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 

<script src="{{ URL::secure('src/construction/js/bootstrap.min.js') }}" type="text/javascript"></script> 

<!-- Video --> 

<script src="{{ URL::secure('src/construction/js/jquery.mb.YTPlayer.js') }}" type="text/javascript"></script> 
<script src="{{ URL::secure('src/construction/js/video.js') }}" type="text/javascript"></script> 
<script src="{{ URL::secure('src/construction/js/html5shiv.js') }}" type="text/javascript"></script>
</body>
</html>