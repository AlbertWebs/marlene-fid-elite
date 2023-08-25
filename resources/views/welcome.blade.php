@extends('master')

@section('content')
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
                      style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"> <span class="bold">FID ELITE</span>
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
                   to provide exceptional services.
                </p>
                {{--
                <footer>John Doe, Google Inc.</footer>
                --}}
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
                         residency, and citizenship.
                      </p>
                   </div>
                </div>
                <div class="col-md-6 col-sm-6 pb-10">
                    <div class="fes5-box wow fadeIn" data-wow-delay="200ms">
                       <h3>Legal Services</h3>
                       <p>
                           This is legal services place holder, i have nothing much to say at the moment but this will be replaced with real content
                       </p>
                    </div>
                 </div>
             </div>
             <div class="row">
                <div class="col-md-6 col-sm-6 pb-10">
                   <div class="fes5-box wow fadeIn" data-wow-delay="400ms">
                      <h3>INVESTMENT ADVISORY</h3>
                      <p>Professional guidance in real
                         estate, investment funds and
                         guaranteed yield investments.
                      </p>
                   </div>
                </div>
                <div class="col-md-6 col-sm-6 pb-10">
                   <div class="fes5-box wow fadeIn"  data-wow-delay="600ms">
                      <h3>TAX EFFICIENCY</h3>
                      <p>Tax liability and efficiency
                         advisory for individuals and
                         companies.
                      </p>
                   </div>
                </div>
             </div>
             <div class="row">
                {{--  --}}
                <div class="col-md-6 col-sm-6 pb-10">
                    <div class="fes5-box wow fadeIn" data-wow-delay="200ms">
                    <h3>RELOCATION SERVICES</h3>
                    <p>Administrative support in all relocation steps
                    </p>
                    </div>
                </div>
                {{--  --}}
                <div class="col-md-6 col-sm-6 pb-10">

                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- FEATURES 7 -->
 <div class="page-section grey-light-bg clearfix">
    <div class="container">
        <div class="fes7-img-cont col-md-5 ">
        {{--
        <div class="fes7-img" style="background-image: url(images/fes7.jpg)"></div>
        --}}
        <div class="container centers">
            <h3>BEGIN ANYWHERE</h3>

        </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-6 fes7-text-cont p-80-cont">
                    <h1><span class="font-light">IMMIGRATION LAW</span></h1>
                    {{--
                    <p class="mb-60">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                    </p>
                    --}}
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                        <div class="fes7-box wow fadeIn" >
                            <h3>D2 Visa</h3>
                            <p>Entrepreneurs / Business</p>
                        </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                        <div class="fes7-box wow fadeIn" data-wow-delay="200ms">
                            <h3>D3 Visa</h3>
                            <p>Highly qualified professionals</p>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                        <div class="fes7-box wow fadeIn" >
                            <h3>D4 Visa</h3>
                            <p>Students</p>
                        </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                        <div class="fes7-box wow fadeIn" data-wow-delay="200ms">
                            <h3>D6 Visa</h3>
                            <p>Family reunification</p>
                        </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                        <div class="fes7-box wow fadeIn" data-wow-delay="400ms">
                            <h3>D7 Visa</h3>
                            <p>Retiree Passive/recurring
                                income
                            </p>
                        </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                        <div class="fes7-box wow fadeIn"  data-wow-delay="600ms">
                            <h3>D8 Visa</h3>
                            <p>Digital Nomads</p>
                        </div>
                        </div>
                    </div>
                    {{--  --}}
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                        <div class="fes7-box wow fadeIn" data-wow-delay="400ms">
                            <h3>CPLP Visa</h3>
                            <p>Portuguese Speaking
                                Countries citizens
                            </p>
                        </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                        <div class="fes7-box wow fadeIn"  data-wow-delay="600ms">
                            <h3>Golden Visa</h3>
                            <p>Residents by investment<br>
                                Residence Permit &amp; Family
                                Reunification<br>
                                Citizenhsip
                            </p>
                        </div>
                        </div>
                    </div>

                    {{--  --}}
                </div>
            </div>
            <!--end of row-->
        </div>
        {{--  --}}
        <div style="max-width: 300px; margin:0 auto;" class="price-button-container">
            <a class="button medium gray price-button">Begin here</a>
         </div>
        {{--  --}}
        <br>
    </div>
 </div>
 <!-- FEATURES 8 -->

 {{--  --}}
 <div class="page-section fes4-cont">
    <div class="container">
       {{--  --}}
       <!-- FEATURES 8 -->
        <div id="services-link" class="page-section fes4-cont">
            <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="fes8-box wow fadeIn">


                        <h3>INVESTMENT
                            ADVISORY</h3>

                        <div>
                            <div style="min-height:250px">
                                <ul>
                                   <li>Real Estate Properties</li>
                                   <li>Commercial Properties</li>
                                   <li>Guarantee Return Investments</li>
                                   <li>Investment Funds</li>
                                   <li>Setting up a Business</li>
                                </ul>
                             </div>
                        </div>
                        <div class="price-button-container">
                            <a class="button medium gray price-button">Begin here</a>
                         </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="fes8-box wow fadeIn" data-wow-delay="200ms">


                        <h3>RELOCATION
                            SERVICES</h3>

                        <div>
                            <div style="min-height:250px">
                                <ul>
                                   <li>Tax Representation</li>
                                   <li>Bank account opening</li>
                                   <li>National ID Numbers</li>
                                   <li>School applications</li>
                                   <li>Citizenship</li>
                                </ul>
                             </div>
                        </div>
                    </div>
                    <div class="price-button-container">
                        <a class="button medium gray price-button">Begin here</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="fes8-box wow fadeIn" data-wow-delay="400ms">


                        <h3>TAX
                            EFFICIENCY</h3>

                        <div>
                            <div style="min-height:200px">
                                <ul>
                                   <li>Tax Planning</li>
                                   <li>Non Habitual Resident Status</li>
                                   <li>R&amp;D and Innovation Incentives</li>
                                   <li>Annual Tax Declaration</li>

                                </ul>
                             </div>
                        </div>
                    </div>
                    <div class="price-button-container">
                        <a class="button medium gray price-button">Begin here</a>
                    </div>
                </div>
            </div>

            </div>
        </div>
       {{--  --}}
    </div>
 </div>
 {{--  --}}

 <!-- ABOUT US 1 -->
 <div class="page-section pt-110-cont grey-light-bg">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="mb-50">
                <h2 class="section-title">OUR <span class="bold">TEAM</span></h2>
             </div>
          </div>
       </div>

       <div class="row" style="margin:0 auto">

          <div class="member col-md-3 col-sm-4 wow fadeInUp" data-wow-delay="400ms">

            <h3>JOSE CARREIRA</h3>
            <span>MANAGER</span>
         </div>
          <div class="member col-md-3 col-sm-4 wow fadeInUp">

             <h3>MARLENE REIS</h3>
             <span>INVESTMENT CONSULTANT</span>
          </div>
          <div class="member col-md-3 col-sm-4 wow fadeInUp" data-wow-delay="200ms">

             <h3>DIANA LIMA</h3>
             <span>LAWYER</span>
          </div>

          <div class="member col-md-3 col-sm-4 wow fadeInUp" data-wow-delay="400ms">

             <h3>DULCE CASTRO</h3>
             <span>ACCOUNTANT</span>
          </div>
          <div class="member col-md-3 col-sm-4 wow fadeInUp" data-wow-delay="400ms">

             <h3>JOSE SANTOS</h3>
             <span>TAX EXPERT</span>
          </div>

       </div>
    </div>
 </div>
 {{--  --}}
 <hr class="mt-0 mb-0">
 <div class="port-view-more-cont-dark">
    <a class="port-view-more-dark " href="{{url('/')}}">LET'S BEGIN TOGETHER</a>
 </div>

 <div class="page-section pt-110-b-30-cont grey-light-bg">
    <div class="container">
       <div class="mb-50">
          <h2 class="section-title pr-0">Updates <span class="bold"></span><a href="blog-right-sidebar.html" class="section-more right">Updates</a>
          </h2>
       </div>
       <div class="row">
          <!-- Post Item 1 -->
          <div class="col-md-12 wow fadeIn pb-30" >
             <div class="row">
                <div class="col-md-4 blog2-post-title-cont">
                   <div class="post-prev-date-cont">
                      <span class="blog2-date-numb">21</span><span class="blog2-month">July</span>
                   </div>
                   <div class="post-prev-title">
                      <h3><a href="#">GOLDEN VISA</a></h3>
                   </div>
                </div>
                <div class="col-md-8">
                   <div class="blog2-post-prev-text">
                      The Golden Visa program will remain active with certain investment
                      options. However, you will no longer be able to apply for a Golden Visa
                      through a real estate investment or a real estate related fund investment.
                      The new law will not apply retroactively to current applications and
                      renewals.
                   </div>
                </div>
             </div>
          </div>
          <!-- Post Item 2 -->
          <div class="col-md-12 wow fadeIn pb-30" >
             <div class="row">
                <div class="col-md-4 blog2-post-title-cont">
                   <div class="post-prev-date-cont">
                      <span class="blog2-date-numb">20</span><span class="blog2-month">July</span>
                   </div>
                   <div class="post-prev-title">
                      <h3><a href="#">DIGITAL NOMADS</a></h3>
                   </div>
                </div>
                <div class="col-md-8">
                   <div class="blog2-post-prev-text">
                      Portugal most sought out by digital nomads.
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- END PORTFOLIO SECTION 1 -->
 <!-- CLIENTS 1 & TESTIMONIALS 1 -->
 <div class="page-section p-110-cont">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="mb-50">
                <h2 class="section-title">OUR <span class="bold">PARTNERS</span></h2>
             </div>
          </div>
       </div>
       <div class="row">
          <!-- CLIENTS 1 -->
          <div class="col-md-12">
             <div class="row client-row border-bot">
                <div class="col-xs-6 col-sm-3 text-center">
                   <img alt="client" src="{{asset('theme/images/clients/1.png')}}">
                </div>
                <div class="col-xs-6 col-sm-3 text-center">
                   <img alt="client" src="{{asset('theme/images/clients/2.png')}}">
                </div>
                <div class="col-xs-6 col-sm-3 text-center">
                   <img alt="client" src="{{asset('theme/images/clients/3.png')}}">
                </div>
                <div class="col-xs-6 col-sm-3 text-center">
                   <img alt="client" src="{{asset('theme/images/clients/4.png')}}">
                </div>
             </div>
             <div class="row client-row">
                <div class="col-xs-6 col-sm-3 text-center">
                   <img alt="client" src="{{asset('theme/images/clients/5.png')}}">
                </div>
                <div class="col-xs-6 col-sm-3 text-center">
                   <img alt="client" src="{{asset('theme/images/clients/6.png')}}">
                </div>
                <div class="col-xs-6 col-sm-3 text-center">
                   <img alt="client" src="{{asset('theme/images/clients/7.png')}}">
                </div>
                <div class="col-xs-6 col-sm-3 text-center">
                   <img alt="client" src="{{asset('theme/images/clients/8.png')}}">
                </div>
             </div>
          </div>
          <!-- TESTIMONIALS 1 -->
       </div>
    </div>
 </div>
 {{--  --}}
 <div class="page-section gray-bg">
    <div class="container-fluid">
       <div class="row" >

          <div class="col-md-12" style="margin:0 auto;">
             <div class="contact-form-cont" style="margin:0 auto;">
                <!-- TITLE -->
                <div class="mb-40">
                   <h2 class="section-title">BEGIN  <span class="bold">HERE</span></h2>
                </div>
                <!-- CONTACT FORM -->
                <div class="">
                   <form id="contact-form" action="#" method="POST">
                      <div class="row">
                         <div class="col-md-12 mb-30">
                            <!-- <label>Your name *</label> -->
                            <input type="text" value="" data-msg-required="Please enter your name" maxlength="100" class="controled" name="name" id="name" placeholder="NAME" required>
                         </div>
                      </div>
                      <div class="row">
                         <div class="col-md-12 mb-30">
                            <!-- <label>Your email address *</label> -->
                            <input type="email" value="" data-msg-required="Please enter your email address" data-msg-email="Please enter a valid email address" maxlength="100" class="controled" name="email" id="email" placeholder="EMAIL" required>
                         </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 mb-30">
                           <!-- <label>Your email address *</label> -->
                           <input type="text" value="" data-msg-required="Your Nationality" data-msg-email="Your Nationality" maxlength="100" class="controled" name="email" id="email" placeholder="Nationality" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 mb-30">
                           <label>Service *</label>
                            <select>
                              <option disabled select="selected">
                                 Select Service
                              </option>
                              <option value="Immigration Law">
                                 Immigration Law
                              </option>
                              <option value="Investment Advisory">
                                 Investment Advisory
                              </option>
                              <option value="Relocation Services">
                                 Relocation Services
                              </option>
                              <option value="Tax Efficiency">
                                 Tax Efficiency
                              </option>
                              <option value="Legal Services">
                                Legal Services
                               </option>
                            </select>
                        </div>
                      </div>
                      <div class="row">
                        <label>Available for a Meeting</label>
                        <div class="row">
                           <div class="col-md-6 mb-30">
                              <input type="date" value="" data-msg-required="Date" data-msg-email="Date" maxlength="100" class="controled" name="email" id="email" placeholder="Date" required>
                           </div>
                           <div class="col-md-6 mb-30">
                              <input type="time" value="" data-msg-required="Time" data-msg-email="Time" maxlength="100" class="controled" name="email" id="email" placeholder="Time" required>
                           </div>
                        </div>
                      </div>
                      <div class="row">
                         <div class="col-md-12 mb-40">
                            <!-- <label>Message *</label> -->
                            <textarea maxlength="5000" data-msg-required="Please enter your message" rows="3" class="controled" name="message" id="message" placeholder="MESSAGE" required></textarea>
                         </div>
                      </div>
                      <div class="row">
                         <div class="col-md-12 text-center-xxs">
                            <input type="submit" value="SEND MESSAGE" class="button medium gray" data-loading-text="Loading...">
                         </div>
                      </div>
                   </form>
                   <div class="alert alert-success hidden animated fadeIn" id="contactSuccess" >
                      <strong>Success!</strong> Your message has been sent to us.
                   </div>
                   <div class="alert alert-danger hidden animated shake" id="contactError">
                      <strong>Error!</strong> There was an error sending your message.
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 {{--  --}}
 <!-- CONTACT INFO SECTION 1 -->
 <div class="page-section p-110-cont">
    <div class="container">
       <div class="row">
          <div class="col-md-4 col-sm-6">
             <div class="cis-cont">
                <div class="cis-icon">
                   <div class="icon icon-basic-map"></div>
                </div>
                <div class="cis-text">
                   <h3><span class="bold">ADDRESS</span></h3>
                   <p>Campo dos Martires de Patria, 144ª,Porto</p>
                </div>
             </div>
          </div>
          <div class="col-md-4 col-sm-6">
             <div class="cis-cont">
                <div class="cis-icon">
                   <div class="icon icon-basic-mail"></div>
                </div>
                <div class="cis-text">
                   <h3><span class="bold">EMAIL</span></h3>
                   <p><a href="mailto:info@fid-elite.pt">info@fid-elite.pt</a></p>
                </div>
             </div>
          </div>
          <div class="col-md-4 col-sm-6">
             <div class="cis-cont">
                <div class="cis-icon">
                   <div class="icon icon-basic-smartphone"></div>
                </div>
                <div class="cis-text">
                   <h3><span class="bold">CALL US</span></h3>
                   <p>oo35193xxxxxxx</p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 {{--  --}}

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
@endsection
