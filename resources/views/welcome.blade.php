<!DOCTYPE html>
<!--
   Theme Name: HASWELL
   Description: HTML/CSS
   Author: ABCgomel
   Designed & Coded by ABCgomel

   -->
<html lang="en">
   <head>
      <title>Haswell - Responsive HTML5 Template</title>
      <meta charset="utf-8">
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="robots" content="index, follow" >
      <meta name="keywords" content="HTML5 Template" >
      <meta name="description" content="Haswell - Responsive HTML5 Template" >
      <meta name="author" content="ABCgomel">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!-- FAVICONS -->
      <link rel="shortcut icon" href="images/favicon/favicon.png">
      <link rel="apple-touch-icon" href="images/favicon/apple-touch-icon.png">
      <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-touch-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-touch-icon-114x114.png">
      <!-- CSS -->
       <!-- REVOSLIDER CSS SETTINGS -->
       <link rel="stylesheet" type="text/css" href="{{asset('theme/rs-plugin/css/settings.min.css')}}" media="screen">
      <!-- BOOTSTRAP -->
      <link rel="stylesheet" href="{{asset('theme/css/bootstrap.min.css')}}">
      <!-- GOOGLE FONT -->
      <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700%7COpen+Sans:400,300,700' rel='stylesheet' type='text/css'>
      <!-- ICONS ELEGANT FONT & FONT AWESOME & LINEA ICONS -->
      <link rel="stylesheet" href="{{asset('theme/css/icons-fonts.css')}}" >
      <!-- CSS THEME -->
      <link rel="stylesheet" href="{{asset('theme/css/style.css')}}" >
      <!-- ANIMATE -->
      <link rel='stylesheet' href="{{asset('theme/css/animate.min.css')}}">
      <!-- IE Warning CSS -->
      <!--[if lte IE 8]>
      <link rel="stylesheet" type="text/css" href="{{asset('theme/css/ie-warning.css')}}" >
      <![endif]-->
      <!--[if lte IE 8]>
      <link rel="stylesheet" type="text/css" href="{{asset('theme/css/ie8-fix.css')}}" >
      <![endif]-->
      <!-- Magnific popup  in style.css	Owl Carousel Assets in style.css -->
      <!-- CSS end -->
      <!-- JS begin some js files in bottom of file-->
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Modernizr -->
      <!-- <script src="{{asset('theme/js/modernizr.js')}}"></script> -->
   </head>
   <body>
      <!-- LOADER -->
      <div id="loader-overflow">
         <div id="loader3">Please enable JS</div>
      </div>
      <div id="wrap" class="boxed ">
         <div class="grey-bg">
            <!-- Grey BG  -->
            <!--[if lte IE 8]>
            <div id="ie-container">
               <div id="ie-cont-close">
                  <a href='#' onclick='javascript&#058;this.parentNode.parentNode.style.display="none"; return false;'><img src='images/ie-warn/ie-warning-close.jpg' style='border: none;' alt='Close'></a>
               </div>
               <div id="ie-cont-content" >
                  <div id="ie-cont-warning">
                     <img src='images/ie-warn/ie-warning.jpg' alt='Warning!'>
                  </div>
                  <div id="ie-cont-text" >
                     <div id="ie-text-bold">
                        You are using an outdated browser
                     </div>
                     <div id="ie-text">
                        For a better experience using this site, please upgrade to a modern web browser.
                     </div>
                  </div>
                  <div id="ie-cont-brows" >
                     <a href='http://www.firefox.com' target='_blank'><img src='images/ie-warn/ie-warning-firefox.jpg' alt='Download Firefox'></a>
                     <a href='http://www.opera.com/download/' target='_blank'><img src='images/ie-warn/ie-warning-opera.jpg' alt='Download Opera'></a>
                     <a href='http://www.apple.com/safari/download/' target='_blank'><img src='images/ie-warn/ie-warning-safari.jpg' alt='Download Safari'></a>
                     <a href='http://www.google.com/chrome' target='_blank'><img src='images/ie-warn/ie-warning-chrome.jpg' alt='Download Google Chrome'></a>
                  </div>
               </div>
            </div>
            <![endif]-->
            <div class="header-transporent-bg-black">
               <!-- HEADER -->
               <header id="nav" class="header header-1 black-header">
                  <div class="header-wrapper">
                     <div class="container-m-30 clearfix">
                        <div class="logo-row">
                           <!-- LOGO -->
                           <div class="logo-container-2">
                              <div class="logo-2">
                                 <a href="index.html" class="clearfix">
                                 <img src="{{url('/')}}/theme/images/Logo-Fid.png" class="logo-img" alt="Logo">
                                 </a>
                              </div>
                           </div>
                           <!-- BUTTON -->
                           <div class="menu-btn-respons-container">
                              <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target="#main-menu .navbar-collapse">
                              <span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
                              </button>
                           </div>
                        </div>
                     </div>
                     <!-- MAIN MENU CONTAINER -->
                     <div class="main-menu-container">
                        <div class="container-m-30 clearfix">
                           <!-- MAIN MENU -->
                           <div id="main-menu">
                              <div class="navbar navbar-default" role="navigation">
                                 <!-- MAIN MENU LIST -->
                                 <nav class="collapse collapsing navbar-collapse right-1024">
                                    <ul class="nav navbar-nav">
                                       <!-- MENU ITEM -->
                                       <li class="parent">
                                          <a href="#">
                                             <div class="main-menu-title">HOME</div>
                                          </a>
                                       </li>
                                       <li class="parent">
                                            <a href="#">
                                            <div class="main-menu-title">ABOUT US</div>
                                            </a>
                                        </li>
                                        <li class="parent">
                                            <a href="#">
                                               <div class="main-menu-title">SERVICES</div>
                                            </a>
                                        </li>
                                        <li class="parent">
                                            <a href="#">
                                               <div class="main-menu-title">PORTFOLIO</div>
                                            </a>
                                        </li>
                                        <li class="parent">
                                            <a href="#">
                                               <div class="main-menu-title">NEWS</div>
                                            </a>
                                        </li>
                                        <li class="parent">
                                            <a href="#">
                                               <div class="main-menu-title">CONTACT US</div>
                                            </a>
                                        </li>

                                    </ul>
                                 </nav>
                              </div>
                           </div>
                           <!-- END main-menu -->
                        </div>
                        <!-- END container-m-30 -->
                     </div>
                     <!-- END main-menu-container -->
                     <!-- SEARCH READ DOCUMENTATION -->
                     <ul class="cd-header-buttons">
                        <li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
                     </ul>
                     <!-- cd-header-buttons -->
                     <div id="cd-search" class="cd-search">
                        <form class="form-search" id="searchForm" action="page-search-results.html" method="get">
                           <input type="text" value="" name="q" id="q" placeholder="Search...">
                        </form>
                     </div>
                  </div>
                  <!-- END header-wrapper -->
               </header>
               <!-- STATIC MEDIA IMAGE -->
               <div class="relative">
                <div class="rs-fullscr-container">
                   <div id="rs-fullwidth" class="tp-banner dark-bg" >
                      <ul>
                         <!-- SLIDE 1 -->
                         <li data-transition="zoomout" data-slotamount="1" data-masterspeed="1000" data-thumb="{{asset('theme/images/revo-slider/video-ocean-cover-320x200.jpg')}}"  data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7" data-saveperformance="off"  data-title="INTRO SLIDE">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('theme/images/revo-slider/video-ocean-cover.jpg')}}"  alt="video_woman_cover3"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <!-- LAYER NR.0 1 VIDEO -->
                            <div class="tp-caption tp-fade fadeout fullscreenvideo"
                               data-speed="1000"
                               data-start="1100"
                               data-easing="Power4.easeOut"
                               data-elementdelay="0.01"
                               data-endelementdelay="0.1"
                               data-endspeed="1500"
                               data-endeasing="Power4.easeIn"
                               data-autoplay="true"
                               data-autoplayonlyfirsttime="false"
                               data-nextslideatend="true"
                               data-volume="mute"
                               data-forceCover="1"
                               data-dottedoverlay="twoxtwo"
                               data-aspectratio="16:9"
                               data-forcerewind="on"
                               style="z-index: 2;">
                               <video preload="none" width="100%" height="100%"
                                  poster="images/revo-slider/video-ocean-cover.jpg')}}">
                                  <source src='{{asset('theme/video/ocean60-15.webm')}}' type='video/webm' />
                                  <source src='{{asset('theme/video/ocean60-15.mp4')}}' type='video/mp4' />
                               </video>
                            </div>
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption font-white light-73-wide sfb tp-resizeme"
                               data-x="center"
                               data-hoffset="0"
                               data-y="center"
                               data-voffset="-50"
                               data-speed="500"
                               data-start="850"
                               data-easing="Power1.easeInOut"
                               data-splitin="none"
                               data-splitout="none"
                               data-elementdelay="0.1"
                               data-endelementdelay="0.1"
                               style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">WE ARE <span class="bold">FID ELITE</span>
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption font-white norm-16-wide tp-left sfb tp-resizeme hide-0-736"
                               data-x="center"
                               data-hoffset="0"
                               data-y="center"
                               data-voffset="25"
                               data-speed="900"
                               data-start="1500"
                               data-easing="Power3.easeInOut"
                               data-splitin="none"
                               data-splitout="none"
                               data-elementdelay="0.1"
                               data-endelementdelay="0.1"
                               style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">PORTUGAL<span class="slash-divider-10">/</span>SWITZERLAND
                            </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption center-0-478 sfb"
                               data-x="center"
                               data-hoffset="0"
                               data-y="center"
                               data-voffset="115"
                               data-speed="900"
                               data-start="1350"
                               data-easing="Power3.easeInOut"
                               data-splitin="none"
                               data-splitout="none"
                               data-elementdelay="0.1"
                               data-endelementdelay="0.1"
                               style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><a class="button medium thin hover-dark tp-button white" href="#">SEE MORE</a><a class="button medium thin hover-dark tp-button white ml-20" href="#">CONTACT US</a>
                            </div>
                         </li>
                      </ul>
                   </div>
                </div>
             </div>
            </div>
            <!-- FEATURES 5 & TESTIMONIALS 1 -->
            <div id="about" class="page-section p-110-cont">
               <div class="container">
                  <div class="row">
                     <!-- TESTIMONIALS -->
                     <div class="col-md-5 pb-40">
                        <blockquote class="quote mb-0 pr-50-min-1169">
                           <p>FID-ELITE&#39;s foundation rests upon an
                            unswerving dedication to excellence,
                            embodying an unwavering commitment
                            to provide exceptional services.</p>
                           {{-- <footer>John Doe, Google Inc.</footer> --}}
                        </blockquote>
                     </div>
                     <!-- FEATURES -->
                     <div class="col-md-7">
                        <div class="row">
                           <div class="col-md-6 col-sm-6 pb-10">
                              <div class="fes5-box wow fadeIn" >
                                 <h3>IMMIGRATION LAW</h3>
                                 <p>Legal assistance and guidance
                                    in immigration, visas,
                                    residency, and citizenship.</p>
                              </div>
                           </div>
                           <div class="col-md-6 col-sm-6 pb-10">
                              <div class="fes5-box wow fadeIn" data-wow-delay="200ms">
                                 <h3>RELOCATION SERVICES</h3>
                                 <p>Administrative support in
                                    bureaucratic processes.</p>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6 col-sm-6 pb-10">
                              <div class="fes5-box wow fadeIn" data-wow-delay="400ms">
                                 <h3>INVESTMENT ADVISORY</h3>
                                 <p>Professional guidance in real
                                    estate, investment funds and
                                    guaranteed yield investments.</p>
                              </div>
                           </div>
                           <div class="col-md-6 col-sm-6 pb-10">
                              <div class="fes5-box wow fadeIn"  data-wow-delay="600ms">
                                 <h3>TAX EFFICIENCY</h3>
                                 <p>Tax liability and efficiency
                                    advisory for individuals and
                                    companies.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- FEATURES 7 -->
            <div class="page-section grey-light-bg clearfix">
               <div class="fes7-img-cont col-md-5">
                  <div class="fes7-img" style="background-image: url(images/fes7.jpg)"></div>
               </div>
               <div class="container">
                  <div class="row">
                     <div class="col-md-6 col-md-offset-6 fes7-text-cont p-80-cont">
                        <h1><span class="font-light">Nulla varius faucibus vestibulum. Sed imperdiet, tellus at iaculis</span></h1>
                        <p class="mb-60">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                        </p>
                        <div class="row">
                           <div class="col-md-6 col-sm-6">
                              <div class="fes7-box wow fadeIn" >
                                 <div class="fes7-box-icon">
                                    <div class="icon icon-ecommerce-graph-increase"></div>
                                 </div>
                                 <h3>SEO Friendly</h3>
                                 <p>Sed ut perspiciatis unde omnis iste nat eror acus  antium que</p>
                              </div>
                           </div>
                           <div class="col-md-6 col-sm-6">
                              <div class="fes7-box wow fadeIn" data-wow-delay="200ms">
                                 <div class="fes7-box-icon">
                                    <div class="icon icon-software-font-smallcaps"></div>
                                 </div>
                                 <h3>Google Fonts</h3>
                                 <p>Sed ut perspiciatis unde omnis iste nat eror acus  antium que</p>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6 col-sm-6">
                              <div class="fes7-box wow fadeIn" data-wow-delay="400ms">
                                 <div class="fes7-box-icon">
                                    <div class="icon icon-basic-mixer2"></div>
                                 </div>
                                 <h3>Tons of Shortcodes</h3>
                                 <p>Sed ut perspiciatis unde omnis iste nat eror acus  antium que</p>
                              </div>
                           </div>
                           <div class="col-md-6 col-sm-6">
                              <div class="fes7-box wow fadeIn"  data-wow-delay="600ms">
                                 <div class="fes7-box-icon">
                                    <div class="icon icon-basic-bolt"></div>
                                 </div>
                                 <h3>1500+ Icons</h3>
                                 <p>Sed ut perspiciatis unde omnis iste nat eror acus  antium que</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--end of row-->
               </div>
            </div>
            <!-- FEATURES 8 -->
            <div class="page-section fes4-cont">
               <div class="container">
                  <div class="row">
                     <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="fes8-box wow fadeIn">
                           <div class="fes8-title-cont" >
                              <div class="fes8-box-icon">
                                 <div class="icon icon-basic-smartphone"></div>
                              </div>
                              <h3>RETINA READY GRAPHICS</h3>
                           </div>
                           <div>
                              Maecenas luctus nisi in sem fermentum blat. In nec  elit solliudin, elementum.
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="fes8-box wow fadeIn" data-wow-delay="200ms">
                           <div class="fes8-title-cont" >
                              <div class="fes8-box-icon">
                                 <div class="icon icon-basic-mixer2"></div>
                              </div>
                              <h3>PARALLAX SUPPORT</h3>
                           </div>
                           <div>
                              Maecenas luctus nisi in sem fermentum blat. In nec  elit solliudin, elementum.
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="fes8-box wow fadeIn" data-wow-delay="400ms">
                           <div class="fes8-title-cont" >
                              <div class="fes8-box-icon">
                                 <div class="icon icon-basic-share"></div>
                              </div>
                              <h3>ENDLESS POSSIBILITIES</h3>
                           </div>
                           <div>
                              Seductio maesto nisi in sem fermentum blat. In nec elit solliudin, elementum.
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="fes8-box wow fadeIn" data-wow-delay="600ms">
                           <div class="fes8-title-cont" >
                              <div class="fes8-box-icon">
                                 <div class="icon icon-basic-paperplane"></div>
                              </div>
                              <h3>CLEAR DESIGN</h3>
                           </div>
                           <div>
                              Donec vel luctus nisi in sem fermentum blat. In nec elit solliudin, elementum.
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="fes8-box wow fadeIn" data-wow-delay="800ms" >
                           <div class="fes8-title-cont" >
                              <div class="fes8-box-icon">
                                 <div class="icon icon-basic-chronometer"></div>
                              </div>
                              <h3>POWERFUL PERFORMANCE</h3>
                           </div>
                           <div>
                              Lorem luctus antena at nisi in sem blandit. In nec elit soltudin, elementum odio.
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="fes8-box wow fadeIn" data-wow-delay="1000ms">
                           <div class="fes8-title-cont" >
                              <div class="fes8-box-icon">
                                 <div class="icon icon-software-horizontal-align-center"></div>
                              </div>
                              <h3>FLEXIBLE WIDGETS</h3>
                           </div>
                           <div>
                              Fermentum nisi in sem fertum blat. In elit soldin, elemtum, arenam pur quam volut.
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="fes8-box wow fadeIn" data-wow-delay="600ms">
                           <div class="fes8-title-cont" >
                              <div class="fes8-box-icon">
                                 <div class="icon icon-basic-laptop"></div>
                              </div>
                              <h3>RESPONSIVE LAYOUT</h3>
                           </div>
                           <div>
                              Donec vel luctus nisi in sem fermentum blat. In nec elit solliudin, elementum, dictum pur quam volutpat suscipit antena.
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="fes8-box wow fadeIn" data-wow-delay="800ms" >
                           <div class="fes8-title-cont" >
                              <div class="fes8-box-icon">
                                 <div class="icon icon-music-play-button"></div>
                              </div>
                              <h3>HTML5 VIDEO</h3>
                           </div>
                           <div>
                              Lorem luctus antena at nisi in sem blandit. In nec elit soltudin, elementum odio et, dictum quam a volutpat elementum.
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="fes8-box wow fadeIn" data-wow-delay="1000ms">
                           <div class="fes8-title-cont" >
                              <div class="fes8-box-icon">
                                 <div class="icon icon-basic-info"></div>
                              </div>
                              <h3>WELL DOCUMENTED</h3>
                           </div>
                           <div>
                              Fermentum nisi in sem fertum blat. In elit soldin, elemtum, arenam pur quam volutpat suscipit dictum pur quam.
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- COUNTERS 1 -->
            <div id="counter-1" class="page-section p-80-cont grey-light-bg">
               <div class="container">
                  <div  class="row text-center">
                     <!-- Item -->
                     <div class="col-xs-6 col-sm-3">
                        <div class="count-number">
                           75
                        </div>
                        <div class="count-descr">
                           <span class="count-title">AWARDS WINNING</span>
                        </div>
                     </div>
                     <!-- Item -->
                     <div class="col-xs-6 col-sm-3">
                        <div class="count-number">
                           450
                        </div>
                        <div class="count-descr">
                           <span class="count-title">HAPPY CLIENTS</span>
                        </div>
                     </div>
                     <!-- Item -->
                     <div class="col-xs-6 col-sm-3">
                        <div class="count-number">
                           151
                        </div>
                        <div class="count-descr">
                           <span class="count-title">PROJECTS DONE</span>
                        </div>
                     </div>
                     <!-- Item -->
                     <div class="col-xs-6 col-sm-3">
                        <div class="count-number">
                           768
                        </div>
                        <div class="count-descr">
                           <span class="count-title">HOURS OF CODE</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- WORK PROCESS 1 -->
            <div class="page-section" >
               <div class="container fes4-cont">
                  <div class="row">
                     <div class="col-md-4 ">
                        <div class="mb-50">
                           <h2 class="section-title">WORK <span class="bold">PROCESS</span></h2>
                        </div>
                        <p class="mb-50 " >Sed ut perspiciatis unde omnis iste nat eror acus  antium que</p>
                     </div>
                     <div class="col-md-7 col-lg-offset-1">
                        <div class="row">
                           <div class="col-xs-12 col-sm-6 col-md-6">
                              <div class="fes4-box">
                                 <div class="fes4-title-cont" >
                                    <div class="fes4-box-icon">
                                       <div class="icon icon-basic-lightbulb"></div>
                                    </div>
                                    <h3><span class="bold">PLANING</span></h3>
                                    <p>LOREM IPSUM DOLOR</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-6 col-md-6">
                              <div class="fes4-box" >
                                 <div class="fes4-title-cont" >
                                    <div class="fes4-box-icon">
                                       <div class="icon icon-basic-gear"></div>
                                    </div>
                                    <h3><span class="bold">DEVELOPMENT</span></h3>
                                    <p>LOREM IPSUM DOLOR</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-xs-12 col-sm-6 col-md-6">
                              <div class="fes4-box" >
                                 <div class="fes4-title-cont" >
                                    <div class="fes4-box-icon">
                                       <div class="icon icon-basic-laptop"></div>
                                    </div>
                                    <h3><span class="bold">DESIGNING</span></h3>
                                    <p>LOREM IPSUM DOLOR</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-6 col-md-6">
                              <div class="fes4-box" >
                                 <div class="fes4-title-cont" >
                                    <div class="fes4-box-icon">
                                       <div class="icon icon-basic-paperplane"></div>
                                    </div>
                                    <h3><span class="bold">LAUNCH</span></h3>
                                    <p>LOREM IPSUM DOLOR</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- PORTFOLIO SECTION 2 -->
            <div class="page-section">
               <div class="relative">
                  <!-- ITEMS GRID -->
                  <ul class="port-grid port-grid-3 port-grid-gut clearfix" id="items-grid">
                     <!-- Item 1 -->
                     <li class="port-item mix">
                        <a href="portfolio-single1.html">
                           <div class="port-img-overlay"><img class="port-main-img" src="images/portfolio/projects-5.jpg')}}" alt="img" ></div>
                        </a>
                        <div class="port-overlay-cont">
                           <div class="port-title-cont">
                              <h3><a href="portfolio-single1.html">MINIMALISM BOOKS</a></h3>
                              <span><a href="#">ui elements</a><span class="slash-divider">/</span><a href="#">media</a></span>
                           </div>
                           <div class="port-btn-cont">
                              <a href="images/portfolio/projects-5.jpg')}}" class="lightbox mr-20" >
                                 <div aria-hidden="true" class="icon_search"></div>
                              </a>
                              <a href="portfolio-single1.html">
                                 <div aria-hidden="true" class="icon_link"></div>
                              </a>
                           </div>
                        </div>
                     </li>
                     <!-- Item 2 -->
                     <li class="port-item mix">
                        <a href="portfolio-single1.html">
                           <div class="port-img-overlay">
                              <img class="port-main-img" src="images/portfolio/projects-3.jpg')}}" alt="img" >
                           </div>
                        </a>
                        <div class="port-overlay-cont">
                           <div class="port-title-cont">
                              <h3><a href="portfolio-single1.html">CALENDAR</a></h3>
                              <span><a href="#">photography</a><span class="slash-divider">/</span><a href="#">media</a></span>
                           </div>
                           <div class="port-btn-cont">
                              <a href="images/portfolio/projects-3.jpg')}}" class="lightbox mr-20" >
                                 <div aria-hidden="true" class="icon_search"></div>
                              </a>
                              <a href="portfolio-single1.html">
                                 <div aria-hidden="true" class="icon_link"></div>
                              </a>
                           </div>
                        </div>
                     </li>
                     <!-- Item 3 -->
                     <li class="port-item mix">
                        <a href="portfolio-single1.html">
                           <div class="port-img-overlay">
                              <img class="port-main-img" src="images/portfolio/projects-1.jpg')}}" alt="img" >
                           </div>
                        </a>
                        <div class="port-overlay-cont">
                           <div class="port-title-cont">
                              <h3><a href="portfolio-single1.html">EYES OF THE CAR</a></h3>
                              <span><a href="#">branding</a><span class="slash-divider">/</span><a href="#">marketing</a></span>
                           </div>
                           <div class="port-btn-cont">
                              <a href="images/portfolio/projects-1.jpg')}}" class="lightbox mr-20" >
                                 <div aria-hidden="true" class="icon_search"></div>
                              </a>
                              <a href="portfolio-single1.html">
                                 <div aria-hidden="true" class="icon_link"></div>
                              </a>
                           </div>
                        </div>
                     </li>
                     <!-- Item 4 -->
                     <li class="port-item mix">
                        <a href="portfolio-single1.html">
                           <div class="port-img-overlay">
                              <img class="port-main-img" src="images/portfolio/projects-6.jpg')}}" alt="img" >
                           </div>
                        </a>
                        <div class="port-overlay-cont">
                           <div class="port-title-cont">
                              <h3><a href="portfolio-single1.html">NOW IS NOW</a></h3>
                              <span><a href="#">design</a><span class="slash-divider">/</span><a href="#">photography</a></span>
                           </div>
                           <div class="port-btn-cont">
                              <a href="images/portfolio/projects-6.jpg')}}" class="lightbox mr-20" >
                                 <div aria-hidden="true" class="icon_search"></div>
                              </a>
                              <a href="portfolio-single1.html">
                                 <div aria-hidden="true" class="icon_link"></div>
                              </a>
                           </div>
                        </div>
                     </li>
                     <!-- Item 5 -->
                     <li class="port-item mix">
                        <a href="portfolio-single1.html">
                           <div class="port-img-overlay">
                              <img class="port-main-img" src="images/portfolio/projects-7.jpg')}}" alt="img" >
                           </div>
                        </a>
                        <div class="port-overlay-cont">
                           <div class="port-title-cont">
                              <h3><a href="portfolio-single1.html">EYES OF THE CAR</a></h3>
                              <span><a href="#">ui elements</a><span class="slash-divider">/</span><a href="#">media</a></span>
                           </div>
                           <div class="port-btn-cont">
                              <a href="images/portfolio/projects-7.jpg')}}" class="lightbox mr-20" >
                                 <div aria-hidden="true" class="icon_search"></div>
                              </a>
                              <a href="portfolio-single1.html">
                                 <div aria-hidden="true" class="icon_link"></div>
                              </a>
                           </div>
                        </div>
                     </li>
                     <!-- Item 6 -->
                     <li class="port-item mix">
                        <a href="portfolio-single1.html">
                           <div class="port-img-overlay">
                              <img class="port-main-img" src="images/portfolio/projects-4.jpg')}}" alt="img" >
                           </div>
                        </a>
                        <div class="port-overlay-cont">
                           <div class="port-title-cont">
                              <h3><a href="portfolio-single1.html">LOVE</a></h3>
                              <span><a href="#">branding</a><span class="slash-divider">/</span><a href="#">media</a></span>
                           </div>
                           <div class="port-btn-cont">
                              <a href="images/portfolio/projects-4.jpg')}}" class="lightbox mr-20" >
                                 <div aria-hidden="true" class="icon_search"></div>
                              </a>
                              <a href="portfolio-single1.html">
                                 <div aria-hidden="true" class="icon_link"></div>
                              </a>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- VIEW MORE PROJECTS  -->
            <div class="port-view-more-cont">
               <a class="port-view-more" href="portfolio-boxed-gut-3col.html">VIEW MORE PROJECTS</a>
            </div>
            <!-- END PORTFOLIO SECTION 1 -->
            <!-- TESTIMONIALS 2 FULL WIDTH SLIDER -->
            <div class="page-section p-60-cont owl-white-bg  fullwidth-slider">
               <div class="owl-white-bg fullwidth-slider p-50-cont">
                  <!-- Slide Item -->
                  <div class="container relative">
                     <div class="row">
                        <div class="col-md-7">
                           <blockquote class="testimonial-2">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, quis, possimus alias!</p>
                           </blockquote>
                        </div>
                        <div class="col-md-4 col-md-offset-1">
                           <div class="ts-author-cont">
                              <div class="ts-author-info">
                                 <div class="ts-name">
                                    <span class="bold">Amanda Eniston</span>
                                 </div>
                                 <div class="ts-type">CEO Company</div>
                              </div>
                              <div class="ts-author-img">
                                 <img src="images/ts-author-2.png" alt="photo" >
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Slide Item -->
                  <div class="container relative">
                     <div class="row">
                        <div class="col-md-7">
                           <blockquote class="testimonial-2">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, quis, possimus alias!</p>
                           </blockquote>
                        </div>
                        <div class="col-md-4 col-md-offset-1">
                           <div class="ts-author-cont">
                              <div class="ts-author-info">
                                 <div class="ts-name">
                                    <span class="bold">Jessica Holmes</span>
                                 </div>
                                 <div class="ts-type">CEO Company</div>
                              </div>
                              <div class="ts-author-img">
                                 <img src="images/ts-author.png" alt="photo" >
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Slide Item -->
                  <div class="container relative">
                     <div class="row">
                        <div class="col-md-7">
                           <blockquote class="testimonial-2">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, quis, possimus alias!</p>
                           </blockquote>
                        </div>
                        <div class="col-md-4 col-md-offset-1">
                           <div class="ts-author-cont">
                              <div class="ts-author-info">
                                 <div class="ts-name">
                                    <span class="bold">John Doe</span>
                                 </div>
                                 <div class="ts-type">CEO Company</div>
                              </div>
                              <div class="ts-author-img">
                                 <img src="images/ts-author-3.png" alt="photo" >
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- VIDEO ADS 1 -->
            <div class="page-section video-ads-bg" >
               <div class="container">
                  <div class="video-ads-text-cont clearfix">
                     <span class="video-ads-text">BE CREATIVE</span>
                     <span class="video-ads-a">
                     <a class="popup-youtube" href="https://www.youtube.com/watch?v=0gv7OC9L2s8">
                     <span class="icon icon-music-play-button"></span>
                     </a>
                     </span>
                     <span class="video-ads-text">WITH HASWELL</span>
                  </div>
               </div>
            </div>
            <!-- FEATURES 9 -->
            <div class="page-section p-80-cont">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="mt-60 mb-80">
                           <h2 class="section-title">DO YOU WANT<br> TO CREATE A GOOD<br><span class="bold">WEBSITE</span>?</h2>
                        </div>
                        <div class="row">
                           <div class="col-md-6 col-sm-6">
                              <div class="fes7-box mb-20 wow fadeIn" >
                                 <div class="fes7-box-icon">
                                    <div class="icon icon-basic-mixer2"></div>
                                 </div>
                                 <h3>FULLY RESPONSIVE</h3>
                              </div>
                           </div>
                           <div class="col-md-6 col-sm-6">
                              <div class="fes7-box mb-20 wow fadeIn" data-wow-delay="200ms">
                                 <div class="fes7-box-icon">
                                    <div class="icon icon-basic-lightbulb"></div>
                                 </div>
                                 <h3>RETINA READY</h3>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6 col-sm-6">
                              <div class="fes7-box mb-20 wow fadeIn" data-wow-delay="400ms">
                                 <div class="fes7-box-icon">
                                    <div class="icon icon-basic-helm"></div>
                                 </div>
                                 <h3>UNIQUE DESIGN</h3>
                              </div>
                           </div>
                           <div class="col-md-6 col-sm-6">
                              <div class="fes7-box mb-20 wow fadeIn"  data-wow-delay="600ms">
                                 <div class="fes7-box-icon">
                                    <div class="icon icon-basic-settings"></div>
                                 </div>
                                 <h3>EASY TO CUSTOMIZE</h3>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 fes9-img-cont clearfix">
                        <div class="fes9-img-center clearfix">
                           <div class="fes9-img-center">
                              <img src="images/fes9-black.png" alt="img" class="wow fadeInUp" data-wow-delay="150ms" data-wow-duration="1s">
                              <img src="images/fes9-white.png" alt="img" class=" wow fadeInUp" data-wow-delay="450ms" data-wow-duration="1s">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- CALL TO ACTION  -->
            <div class="port-view-more-cont-dark">
               <a class="port-view-more-dark " href="contact.html">LET'S WORK TOGETHER</a>
            </div>
            <!-- BLOG 2 -->
            <div class="page-section pt-110-b-30-cont">
               <div class="container">
                  <div class="mb-50">
                     <h2 class="section-title pr-0">LATEST <span class="bold">NEWS</span><a href="blog-right-sidebar.html" class="section-more right">OUR BLOG</a>
                     </h2>
                  </div>
                  <div class="row">
                     <!-- Post Item 1 -->
                     <div class="col-md-12 wow fadeIn pb-30" >
                        <div class="row">
                           <div class="col-md-4 blog2-post-title-cont">
                              <div class="post-prev-date-cont">
                                 <span class="blog2-date-numb">21</span><span class="blog2-month">October</span>
                              </div>
                              <div class="post-prev-title">
                                 <h3><a href="blog-single-sidebar-right.html">TIME FOR MINIMALISM</a></h3>
                                 <div class="post-prev-info">
                                    <a href="#">DESIGN</a><span class="slash-divider">/</span><a href="https://1.envato.market/a1gQR">JOHN DOE</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-8">
                              <div class="blog2-post-prev-text">
                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, excepturi modi cupiditate ipsam molestiae eveniet incidunt nostrum atque alias dicta? Quos, quisquam iusto numquam dicta vel voluptatem aperiam voluptas similique!
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Post Item 2 -->
                     <div class="col-md-12 wow fadeIn pb-30" >
                        <div class="row">
                           <div class="col-md-4 blog2-post-title-cont">
                              <div class="post-prev-date-cont">
                                 <span class="blog2-date-numb">17</span><span class="blog2-month">August</span>
                              </div>
                              <div class="post-prev-title">
                                 <h3><a href="blog-single-sidebar-right.html">NEW TRENDS IN WEB</a></h3>
                                 <div class="post-prev-info">
                                    <a href="#">DESIGN</a><span class="slash-divider">/</span><a href="https://1.envato.market/a1gQR">JOHN DOE</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-8">
                              <div class="blog2-post-prev-text">
                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, excepturi modi cupiditate ipsam molestiae eveniet incidunt nostrum atque alias dicta? Quos, quisquam iusto numquam dicta vel voluptatem aperiam voluptas similique!
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Post Item 3 -->
                     <div class="col-md-12 wow fadeIn pb-30" >
                        <div class="row">
                           <div class="col-md-4 blog2-post-title-cont">
                              <div class="post-prev-date-cont">
                                 <span class="blog2-date-numb">1</span><span class="blog2-month">August</span>
                              </div>
                              <div class="post-prev-title">
                                 <h3><a href="blog-single-sidebar-right.html">THE SOUND OF LIFE</a></h3>
                                 <div class="post-prev-info">
                                    <a href="#">DESIGN</a><span class="slash-divider">/</span><a href="https://1.envato.market/a1gQR">JOHN DOE</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-8">
                              <div class="blog2-post-prev-text">
                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, excepturi modi cupiditate ipsam molestiae eveniet incidunt nostrum atque alias dicta? Quos, quisquam iusto numquam dicta vel voluptatem aperiam voluptas similique!
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- NEWS LETTER -->
            <div class="page-section nl-cont">
               <div class="container">
                  <div class="relative" >
                     <div id="mc_embed_signup" class="nl-form-container clearfix">
                        <form action="http://abcgomel.us9.list-manage.com/subscribe/post-json?u=ba37086d08bdc9f56f3592af0&amp;id=e38247f7cc&amp;c=?" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletterform validate" target="_blank" novalidate>
                           <!-- EDIT THIS ACTION URL (add "post-json?u" instead of "post?u" and appended "&amp;c=?" to the end of this URL) -->
                           <input type="email" value="" name="EMAIL" class="email nl-email-input" id="mce-EMAIL" placeholder="Enter your email" required>
                           <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                           <div style="position: absolute; left: -5000px;"><input type="text" name="b_ba37086d08bdc9f56f3592af0_e38247f7cc" tabindex="-1" value=""></div>
                           <input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe" class="button medium gray">
                        </form>
                        <div id="notification_container"  ></div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- FOOTER 2 -->
            <footer class="page-section pt-80 pb-50">
               <div class="container">
                  <div class="row">
                     <div class="col-md-3 col-sm-3 widget">
                        <div class="logo-footer-cont">
                           <a href="index.html">
                           <img class="logo-footer" src="images/logo-footer.png" alt="logo">
                           </a>
                        </div>
                        <div class="footer-2-text-cont">
                           <address>
                              555 California str, Suite 100<br>
                              San&nbsp;Francisco, CA 94107
                           </address>
                        </div>
                        <div class="footer-2-text-cont">
                           1-800-312-2121<br>
                           1-800-310-1010
                        </div>
                        <div class="footer-2-text-cont">
                           <a class="a-text" href="mailto:info@haswell.com">info@haswell.com</a>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-3 widget">
                        <h4>NAVIGATE</h4>
                        <ul class="links-list bold a-text-cont">
                           <li><a href="index.html">HOME</a></li>
                           <li><a href="grid-system.html">GRID SYSTEM</a></li>
                           <li><a href="services.html">SERVICES</a></li>
                           <li><a href="index-portfolio.html">PORTFOLIO</a></li>
                           <li><a href="index-blog.html">BLOG</a></li>
                           <li><a href="index-shop.html">SHOP</a></li>
                           <li><a href="intro.html">PAGES</a></li>
                        </ul>
                     </div>
                     <div class="col-md-3 col-sm-3 widget">
                        <h4>ABOUT US</h4>
                        <ul class="links-list a-text-cont" >
                           <li><a href="about-us.html">COMPANY</a></li>
                           <li><a href="services.html">WHAT WE DO</a></li>
                           <li><a href="https://help.market.envato.com/hc/en-us">HELP CENTER</a></li>
                           <li><a href="http://themeforest.net/legal/market">TERMS OF SERVICE</a></li>
                           <li><a href="contact.html">CONTACT</a></li>
                        </ul>
                     </div>
                     <div class="col-md-3 col-sm-3 widget">
                        <h4>RECENT POSTS</h4>
                        <div id="post-list-footer">
                           <div class="post-prev-title">
                              <h3><a class="a-text"  href="blog-single-sidebar-right.html">New trends in web design</a></h3>
                           </div>
                           <div class="post-prev-info">
                              Jule 10
                           </div>
                           <div class="post-prev-title">
                              <h3><a class="a-text"  href="blog-single-sidebar-right.html">The sound of life</a></h3>
                           </div>
                           <div class="post-prev-info">
                              October 10
                           </div>
                           <div class="post-prev-title">
                              <h3><a class="a-text"  href="blog-single-sidebar-right.html">Time for minimalism</a></h3>
                           </div>
                           <div class="post-prev-info">
                              September 21
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="footer-2-copy-cont clearfix">
                     <!-- Social Links -->
                     <div class="footer-2-soc-a right">
                        <a href="https://1.envato.market/a1gQR" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://1.envato.market/a1gQR" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://1.envato.market/a1gQR" title="Behance" target="_blank"><i class="fa fa-behance"></i></a>
                        <a href="https://1.envato.market/a1gQR" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href="https://dribbble.com/abcgomel" title="Dribbble" target="_blank"><i class="fa fa-dribbble"></i></a>
                     </div>
                     <!-- Copyright -->
                     <div class="left">
                        <a class="footer-2-copy" href="https://1.envato.market/a1gQR" target="_blank">&copy; HASWELL 2020</a>
                     </div>
                  </div>
               </div>
            </footer>
            <!-- BACK TO TOP -->
            <p id="back-top">
               <a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
            </p>
         </div>
         <!-- End BG -->
      </div>
      <!-- End wrap -->
      <!-- JS begin -->
      <!-- jQuery  -->
      <script src="{{asset('theme/js/jquery-1.11.2.min.js')}}"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
      <!-- MAGNIFIC POPUP -->
      <script src="{{asset('theme/js/jquery.magnific-popup.min.js')}}"></script>
      <!-- PORTFOLIO SCRIPTS -->
      <script src="{{asset('theme/js/isotope.pkgd.min.js')}}"></script>
      <script src="{{asset('theme/js/imagesloaded.pkgd.min.js')}}"></script>
      <script src="{{asset('theme/js/masonry.pkgd.min.js')}}"></script>
      <!-- COUNTER -->
      <script src="{{asset('theme/js/jquery.countTo.js')}}"></script>
      <!-- APPEAR -->
      <script src="{{asset('theme/js/jquery.appear.js')}}"></script>
      <!-- OWL CAROUSEL -->
      <script src="{{asset('theme/js/owl.carousel.min.js')}}"></script>
      <!-- PARALLAX -->
      <script src="{{asset('theme/js/jquery.stellar.min.js')}}"></script>
      <!-- MAIN SCRIPT -->
      <script src="{{asset('theme/js/main.js')}}"></script>
      <!-- JS end -->
           <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
           <script src="{{asset('theme/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
           <script src="{{asset('theme/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
           <!-- SLIDER REVOLUTION INIT  -->
           <script>
              jQuery(document).ready(function() {

                 jQuery('#rs-fullwidth').revolution(
                  {
                    dottedOverlay:"none",
                    delay:16000,
                    startwidth:1170,
                    startheight:700,
                    hideThumbs:200,

                    thumbWidth:100,
                    thumbHeight:50,
                    thumbAmount:5,

                    //fullScreenAlignForce: "off",

                    navigationType:"none",
                    navigationArrows:"solo",
                    navigationStyle:"preview4",

                    hideTimerBar:"on",

                    touchenabled:"on",
                    onHoverStop:"on",

                    swipe_velocity: 0.7,
                    swipe_min_touches: 1,
                    swipe_max_touches: 1,
                    drag_block_vertical: false,

                    parallax:"scroll",
                    parallaxBgFreeze:"on",
                    parallaxLevels:[45,40,35,50],
                    parallaxDisableOnMobile:"on",

                    keyboardNavigation:"off",

                    navigationHAlign:"center",
                    navigationVAlign:"bottom",
                    navigationHOffset:0,
                    navigationVOffset:20,

                    soloArrowLeftHalign:"left",
                    soloArrowLeftValign:"center",
                    soloArrowLeftHOffset:20,
                    soloArrowLeftVOffset:0,

                    soloArrowRightHalign:"right",
                    soloArrowRightValign:"center",
                    soloArrowRightHOffset:20,
                    soloArrowRightVOffset:0,

                    shadow:0,
                    fullWidth:"on",
                    fullScreen:"off",

                    spinner:"spinner4",

                    stopLoop:"off",
                    stopAfterLoops:-1,
                    stopAtSlide:-1,

                    shuffle:"off",

                    autoHeight:"off",
                    forceFullWidth:"off",

                    hideThumbsOnMobile:"off",
                    hideNavDelayOnMobile:1500,
                    hideBulletsOnMobile:"off",
                    hideArrowsOnMobile:"off",
                    hideThumbsUnderResolution:0,

                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    startWithSlide:0,
                    //fullScreenOffsetContainer: ""
                  });

              });	//ready

           </script>
   </body>
</html>
