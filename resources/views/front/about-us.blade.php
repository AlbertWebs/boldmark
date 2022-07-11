@extends('front.master')

@section('content')
     <!-- CONTENT START -->
     <div class="page-content">

          <!-- INNER PAGE BANNER -->
          <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url('{{asset('theme/images/banner/5.jpg')}}');">
            <div class="overlay-main site-bg-secondry opacity-07"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h2 class="site-text-primary">About Us</h2>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->

                        <div>
                            <ul class="wt-breadcrumb breadcrumb-style-2">
                                <li><a href="javascript:void(0);">Home</a></li>
                                <li>About Us</li>
                            </ul>
                        </div>

                    <!-- BREADCRUMB ROW END -->
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- ABOUT SECTION START -->
        <div class="section-full welcome-section-outer">
            <div class="welcome-section-top bg-white p-t80 p-b50">
                <div class="container">
                    <div class="row d-flex justify-content-center">

                        <div class="col-lg-6 col-md-12 m-b30">
                            <div class="welcom-to-section">
                                <!-- TITLE START-->
                                <div class="left wt-small-separator-outer">
                                    <div class="wt-small-separator site-text-primary">
                                        <div  class="sep-leaf-left"></div>
                                        <div>Welcome to BoldMark</div>
                                        <div  class="sep-leaf-right"></div>
                                    </div>
                                </div>
                                <h2>We build your visions, with perfection.</h2>
                                <!-- TITLE END-->


                                <p>
                                    Boldmark construction ltd is an
                                    all-in-one construction company
                                    where we do both big and small
                                    residential and business buildings.
                                    <br><br>
                                    We take over your project from
                                    feasibility stage, design through
                                    to handing over of the same.
                                    <br><br>
                                    At Boldmark, we believe in
                                    close attention to the very minute
                                    details in order to produce the
                                    best and quality projects.
                                </p>

                                <div class="welcom-to-section-bottom d-flex justify-content-between">
                                    <div class="welcom-btn-position"><a href="{{url('/')}}/about-us/#mission" class="site-button-secondry site-btn-effect">Mission Vision and Strategy</a></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 m-b30">
                            <div class="img-colarge2">
                                <div class="colarge-2 slide-right"><img src="{{asset('theme/images/colarge/s2.jpg')}}" alt=""></div>
                                <div class="colarge-2-1"><img src="{{asset('theme/images/colarge/s1.jpg')}}" alt=""></div>
                                <div class="since-year-outer2"><div class="since-year2"><span>Since</span><strong>2018</strong></div></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT SECTION  SECTION END -->

        <!-- ALL SERVICES START -->
        <div class="section-full p-t80 p-b40 bg-no-repeat bg-bottom-right bg-cover" style="background-image:url('{{asset('theme/images/background/bg-7.jpg')}}')">
            <div class="container">
                <div class="section-content">

                <!-- TITLE START-->
                    <div class="section-head center wt-small-separator-outer text-center">
                        <div class="wt-small-separator site-text-primary">
                            <div class="sep-leaf-left"></div>
                            <div>The Best Industry services</div>
                            <div class="sep-leaf-right"></div>
                        </div>
                        <h2>High Performance Services For Multiple Insdustries And Technologies!</h2>
                    </div>
                <!-- TITLE END-->

                    <div class="row d-flex justify-content-center">

                            <div class="col-lg-4 col-md-6 col-sm-12 m-b50">
                                <div class="service-border-box">
                                    <div class="wt-box service-box-1 bg-white">

                                        <div class="service-box-title title-style-2 site-text-secondry">
                                            <span  class="s-title-one">Oil & </span>
                                            <span  class="s-title-two">Gas Engineering</span>
                                        </div>
                                        <div class="service-box-content">
                                            <p>Progressively maintain extensive infomediaries via extensible nich. Capitalize on low hanging fruit.</p>
                                            <a href="s-oilgas.html" class="site-button-link">Read More</a>
                                        </div>

                                        <div class="wt-icon-box-wraper">
                                            <div class="wt-icon-box-md site-bg-primary">
                                                <span class="icon-cell text-white"><i class="flaticon-industry"></i></span>
                                            </div>
                                            <div class="wt-icon-number"><span>01</span></div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12 m-b50">
                                <div class="service-border-box">
                                    <div class="wt-box service-box-1 bg-white">

                                        <div class="service-box-title title-style-2 site-text-secondry">
                                            <span class="s-title-one">Mechanical</span>
                                            <span  class="s-title-two">Engineering</span>
                                        </div>
                                        <div class="service-box-content">
                                            <p>Progressively maintain extensive infomediaries via extensible nich. Capitalize on low hanging fruit.</p>
                                            <a href="s-mechanical.html" class="site-button-link">Read More</a>
                                        </div>

                                        <div class="wt-icon-box-wraper">
                                            <div class="wt-icon-box-md site-bg-primary">
                                                <span class="icon-cell text-white"><i class="flaticon-conveyor"></i></span>
                                            </div>
                                            <div class="wt-icon-number"><span>02</span></div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12 m-b50">
                                <div class="service-border-box">
                                    <div class="wt-box service-box-1 bg-white">

                                        <div class="service-box-title title-style-2 site-text-secondry">
                                            <span  class="s-title-one">Automotive</span>
                                            <span  class="s-title-two">Manufacturing</span>
                                        </div>
                                        <div class="service-box-content">
                                            <p>Progressively maintain extensive infomediaries via extensible nich. Capitalize on low hanging fruit.</p>
                                            <a href="s-automotive.html" class="site-button-link">Read More</a>
                                        </div>

                                        <div class="wt-icon-box-wraper">
                                            <div class="wt-icon-box-md site-bg-primary">
                                                <span class="icon-cell text-white"><i class="flaticon-robotic-arm"></i></span>
                                            </div>
                                            <div class="wt-icon-number"><span>03</span></div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12 m-b50">
                                <div class="service-border-box">
                                    <div class="wt-box service-box-1 bg-white">

                                        <div class="service-box-title title-style-2 site-text-secondry">
                                            <span  class="s-title-one">Chemical</span>
                                            <span  class="s-title-two">Research</span>
                                        </div>
                                        <div class="service-box-content">
                                            <p>Progressively maintain extensive infomediaries via extensible nich. Capitalize on low hanging fruit.</p>
                                            <a href="s-chemical.html" class="site-button-link">Read More</a>
                                        </div>

                                        <div class="wt-icon-box-wraper">
                                            <div class="wt-icon-box-md site-bg-primary">
                                                <span class="icon-cell text-white"><i class="flaticon-oil"></i></span>
                                            </div>
                                            <div class="wt-icon-number"><span>04</span></div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12 m-b50">
                                <div class="service-border-box">
                                    <div class="wt-box service-box-1 bg-white">

                                        <div class="service-box-title title-style-2 site-text-secondry">
                                            <span class="s-title-one">Agricultural</span>
                                            <span  class="s-title-two">Automation</span>
                                        </div>
                                        <div class="service-box-content">
                                            <p>Progressively maintain extensive infomediaries via extensible nich. Capitalize on low hanging fruit.</p>
                                            <a href="s-agricultural.html" class="site-button-link">Read More</a>
                                        </div>

                                        <div class="wt-icon-box-wraper">
                                            <div class="wt-icon-box-md site-bg-primary">
                                                <span class="icon-cell text-white"><i class="flaticon-scythe"></i></span>
                                            </div>
                                            <div class="wt-icon-number"><span>05</span></div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12 m-b50">
                                <div class="service-border-box">
                                    <div class="wt-box service-box-1 bg-white">

                                        <div class="service-box-title title-style-2 site-text-secondry">
                                            <span  class="s-title-one">Civil</span>
                                            <span  class="s-title-two">Engineering</span>
                                        </div>
                                        <div class="service-box-content">
                                            <p>Progressively maintain extensive infomediaries via extensible nich. Capitalize on low hanging fruit.</p>
                                            <a href="s-civil.html" class="site-button-link">Read More</a>
                                        </div>

                                        <div class="wt-icon-box-wraper">
                                            <div class="wt-icon-box-md site-bg-primary">
                                                <span class="icon-cell text-white"><i class="flaticon-helmet"></i></span>
                                            </div>
                                            <div class="wt-icon-number"><span>06</span></div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- ALL SERVICES SECTION END -->

         <!-- VIDEO SECTION START -->
        <div class="section-full video2-counter-section p-t80 p-b40  overlay-wraper bg-cover bg-no-repeat" style="background-image:url(images/background/bg-2.jpg);">
            <div class="overlay-main site-bg-secondry opacity-09"></div>

                    <div class="container">
                        <!-- TITLE START-->
                        <div class="section-head center wt-small-separator-outer text-center text-white">
                            <div class="wt-small-separator site-text-primary">
                                <div  class="sep-leaf-left"></div>
                                <div>All Solutions</div>
                                <div  class="sep-leaf-right"></div>
                            </div>
                            <h2>Get A Solution For All Industries</h2>
                        </div>
                        <!-- TITLE END-->

                        <div class="counter2-section-outer-top">
                            <div class="counter-outer">

                                <div class="row justify-content-center">

                                    <div class="col-lg-3 col-md-6 m-b30 ">
                                        <div class="wt-icon-box-wraper center">
                                            <h2 class="counter site-text-primary">35</h2>
                                            <span class="site-text-white title-style-2">Projects Completed</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 m-b30">
                                        <div class="wt-icon-box-wraper center">
                                            <h2 class="counter site-text-primary">1435</h2>
                                            <span class="site-text-white title-style-2">Work Employed</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 m-b30">
                                        <div class="wt-icon-box-wraper center">
                                            <h2 class="counter site-text-primary" >750</h2>
                                            <span class="site-text-white title-style-2">Work facilities</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 m-b30">
                                        <div class="wt-icon-box-wraper center">
                                            <h2 class="counter site-text-primary" >26</h2>
                                            <span class="site-text-white title-style-2">Winning Awards</span>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="counter2-section-outer-bottom">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-6 m-b30 ">
                                    <div class="video-section2-outer mfp-gallery">
                                        <div class="video-section">
                                             <a href="https://www.youtube.com/watch?v=fgExvIUYg5w" class="mfp-video play-now">
                                                <i class="icon fa fa-play"></i>
                                                <span class="ripple"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-6 m-b30">

                                    <div class="video-section-blockquote">
                                        <i class="fa fa-quote-left"></i>
                                        <span class="q-author-detail site-text-white title-style-2">Many of Our SELF registered employees are requested an main preferred temporary staff when all service</span>
                                        <div class="q-author-name site-text-primary title-style-2">Farnandoz Biki, CEO</div>
                                    </div>

                                </div>
                            </div>
                        </div>

                   </div>

                </div>
        <!-- VIDEO SECTION  SECTION END -->

        <!-- OUR TEAM START -->
        <div class="section-full p-t80 p-b50 bg-white team-bg-section-outer bg-no-repeat bg-center" style="background-image:url(images/background/bg-map.png)">
            <div class="container">
                <div class="section-content">

                <!-- TITLE START-->
                <div class="section-head center wt-small-separator-outer text-center">
                    <div class="wt-small-separator site-text-primary">
                        <div  class="sep-leaf-left"></div>
                        <div>Our Experts</div>
                        <div  class="sep-leaf-right"></div>
                    </div>
                    <h2>We will serve you with the best of our capacity by expert team</h2>
                </div>
                <!-- TITLE END-->

                <div class="section-content">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="wt-team-1">

                                <div class="wt-media">
                                    <img src="images/team/pic1.jpg" alt="">
                                    <div class="team-social-center">
                                        <ul class="team-social-bar">
                                            <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>

                                    </div>
                                </div>

                                <div class="wt-info p-a30  p-b0">
                                    <div class="team-detail  text-center">
                                        <h3 class="m-t0 team-name"><a href="team-single.html" class=" site-text-secondry">Malcolm Franzcrip</a></h3>
                                        <span class="title-style-2 team-position site-text-primary">Contractor</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="wt-team-1">

                                <div class="wt-media">
                                    <img src="images/team/pic2.jpg" alt="">
                                    <div class="team-social-center">
                                        <ul class="team-social-bar">
                                            <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>

                                    </div>
                                </div>

                                <div class="wt-info p-a30  p-b0">
                                    <div class="team-detail  text-center">
                                        <h3 class="m-t0 team-name"><a href="team-single.html" class=" site-text-secondry">Froster Collings</a></h3>
                                        <span class="title-style-2 team-position site-text-primary">Contractor</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="wt-team-1">

                                <div class="wt-media">
                                    <img src="images/team/pic3.jpg" alt="">
                                    <div class="team-social-center">
                                        <ul class="team-social-bar">
                                            <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>

                                    </div>
                                </div>

                                <div class="wt-info p-a30 p-b0">
                                    <div class="team-detail  text-center">
                                        <h3 class="m-t0 team-name"><a href="team-single.html" class=" site-text-secondry">Melena Marshall</a></h3>
                                        <span class="title-style-2 team-position site-text-primary">Contractor</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                </div>
            </div>
        </div>
        <!-- OUR TEAM SECTION END -->

        <!-- CLIENT LOGO SECTION START -->
        <div class="section-full bg-gray p-tb50">
            <div class="container">
                <div class="section-content">

                    <!-- TESTIMONIAL 4 START ON BACKGROUND -->
                    <div class="section-content">
                         <div class="section-content owl-btn-vertical-center">
                            <div class="owl-carousel home-client-carousel-2 ">

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="images/client-logo/w1.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="images/client-logo/w2.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="images/client-logo/w3.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="images/client-logo/w4.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="images/client-logo/w5.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="images/client-logo/w6.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="images/client-logo/w1.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="images/client-logo/w2.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="images/client-logo/w3.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="images/client-logo/w4.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="images/client-logo/w5.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="images/client-logo/w6.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="images/client-logo/w1.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="images/client-logo/w2.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="images/client-logo/w3.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="images/client-logo/w4.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="images/client-logo/w5.png" alt=""></a></div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="images/client-logo/w6.png" alt=""></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CLIENT LOGO  SECTION End -->

    </div>
    <!-- CONTENT END -->
@endsection
