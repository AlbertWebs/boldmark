<!DOCTYPE html>
<html lang="en">

<head>
	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    @include('favicon')

    <!-- PAGE TITLE HERE -->
    <title>Construction Contractors in Kenya | Boldmark Contractors Limited</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/bootstrap.min.css')}}">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/fontawesome/css/font-awesome.min.css')}}" />

    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/owl.carousel.min.css')}}">
    <!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/bootstrap-select.min.css')}}">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/magnific-popup.min.css')}}">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/loader.min.css')}}">
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/style.css')}}">
        <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/flaticon.min.css')}}">

    <!-- IMAGE POPUP -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/lc_lightbox.css')}}" />

    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="{{asset('theme/css/skin/skin-1.css')}}">
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/switcher.css')}}">


     <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/plugins/revolution/revolution/css/settings.css')}}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/plugins/revolution/revolution/css/navigation.css')}}">

    <!-- GOOGLE FONTS -->
    <link href="../../fonts.googleapis.com/cssa99a.css?family=Teko:300,400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="../../fonts.googleapis.com/cssdb47.css?family=Poppins&amp;display=swap" rel="stylesheet">
    <link href="../../fonts.googleapis.com/cssafcc.css?family=Roboto:400,500,700,900&amp;display=swap" rel="stylesheet">

</head>

<body>

	<div class="page-wraper">
        <header class="site-header header-style-3 mobile-sider-drawer-menu">

            <div class="top-bar site-bg-secondry">
                <div class="container">

                        <div class="d-flex justify-content-between">
                            <div class="wt-topbar-left d-flex flex-wrap align-content-start">
                                <ul class="wt-topbar-info e-p-bx text-white">
                                    <li><span> Monday - Saturday</span><span>8AM -7PM</span></li>
                                </ul>
                            </div>

                            <div class="wt-topbar-right d-flex flex-wrap align-content-center">
                                <ul class="wt-topbar-info-2 e-p-bx text-white">
                                    <li><i class="fa fa-phone"></i>+254 0705 840 760</li>
                                    <li><i class="fa fa-envelope"></i>info@boldmark.co.ke</li>
                                </ul>

                                <ul class="social-icons">
                                    <li><a href="https://www.instagram.com/BoldmarkContractorsLTD/" class="fa fa-instagram"></a></li>
                                    <li><a href="https://web.facebook.com/BoldmarkContractorsLTD" class="fa fa-facebook"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                    <li><a href="https://www.linkedin.com/company/boldmark-contractors-limited/" class="fa fa-linkedin"></a></li>
                                    <li><a href="mailto:info@boldmark.co.ke" class="fa fa-envelope"></a></li>
                                    <li><a href="tel:0703895999" class="fa fa-phone"></a></li>
                                </ul>

                            </div>
                        </div>

                </div>
            </div>

           <div class="sticky-wrapper"><div class="sticky-header main-bar-wraper  navbar-expand-lg">
                <div class="main-bar">
                       <div class="container clearfix">

                            <div class="logo-header">
                                <div class="logo-header-inner logo-header-one">
                                    <a href="{{url('/')}}">
                                    <img src="{{url('/')}}/uploads/logo.png" alt="">
                                    </a>
                                </div>
                            </div>

                            <!-- NAV Toggle Button -->
                            <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar icon-bar-first"></span>
                                <span class="icon-bar icon-bar-two"></span>
                                <span class="icon-bar icon-bar-three"></span>
                            </button>

                            <div class="extra-nav header-2-nav">
                                <div class="extra-cell">
                                    <div class="header-search">
                                        <a href="javascript:void(0);" class="header-search-icon"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="header-nav-request">
                                        <a href="{{url('/')}}/contact-us" class="contact-slide-show">Get a Quote <i class="fa fa-angle-right"></i></a>
                                    </div>

                                </div>

                             </div>


                            <!-- MAIN Vav -->
                            <div class="nav-animation header-nav navbar-collapse d-flex justify-content-center collapse" style="">

                                <ul class=" nav navbar-nav">

                                    <li><a href="{{url('/')}}"><span class="fa fa-home"></span> Home</a>

                                    </li>

                                    <li><a href="{{url('/')}}/about-us"><span class="fa fa-info"></span> About Us</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{url('/')}}/about-us#mission">Mission</a></li>

                                            <li><a href="{{url('/')}}/about-us#mission">Strategy</a></li>
                                            <li><a href="{{url('/')}}/about-us#mission">Human Capital</a></li>
                                        </ul>

                                    </li>

                                    <li><a href="{{url('/')}}/health-and-safety">Health and Safety</a>

                                    </li>
                                    <li><a href="{{url('/')}}/articles">News</a>

                                    </li>

                                    <li><a href="javascript:;">Services</a>
                                        <ul class="sub-menu">
                                            <?php $Services = DB::table('services')->get(); ?>
                                            @foreach ($Services as $Ser)
                                                <li><a href="{{url('/')}}/services/{{$Ser->slung}}">{{$Ser->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li><a download href="{{url('/')}}/uploads/New-Boldmark-Profile-rd.pdf"><span class="fa fa-download"></span> Company Profile</a></li>
                                    <li><a href="{{url('/')}}/contact-us"><span class="fa fa-phone"></span>  Contact us</a></li>
                                </ul>

                            </div>

                            <!-- SITE Search -->
                            <div id="search-toggle-block">
                                <div id="search">
                                    <form role="search" id="searchform" action="#" method="get" class="radius-xl">
                                        <div class="input-group">
                                            <input class="form-control" value="" name="q" type="search" placeholder="Type to search">
                                            <span class="input-group-append"><button type="button" class="search-btn"><i class="fa fa-search"></i></button></span>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

            </div></div>

        </header>

        <!-- HEADER START -->

        <!-- HEADER END -->

        @yield('content')

        <!-- FOOTER START -->
        <footer class="site-footer footer-large footer-dark text-white footer-style3" >


            <!-- FOOTER BLOCKES START -->
            <div class="footer-top">
                <div class="container">
                  <div class="row">

                        <div class="col-lg-4 col-md-6">
                            <div class="widget widget_about">
                                <div class="logo-footer clearfix">
                                    <a href="{{url('/')}}"><img src="{{url('/')}}/uploads/logo-footer.png" alt="Boldmark Contruction LTD" ></a>
                                </div>
                                {{-- <p class="text-center">Boldmark construction ltd is an all-in-one construction company where we do both big and small residential and business buildings.</p> --}}
                             </div>
                            <div class="widget recent-posts-entry">
                               <ul class="widget_address">
                                    <li><i class="fa fa-map-marker"></i>Moi Avenue , Nairobi Kenya, Pricely House, rm 321</li>
                                    <li><i class="fa fa-envelope"></i>info@boldmark.co.ke</li>
                                    <li> <i class="fa fa-phone"></i>0705 840 760 </li>
                                </ul>
                                <ul class="social-icons  wt-social-links footer-social-icon">
                                    <li><a href="https://www.instagram.com/BoldmarkContractorsLTD/" class="fa fa-instagram"></a></li>
                                    <li><a href="https://web.facebook.com/BoldmarkContractorsLTD" class="fa fa-facebook"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                    <li><a href="https://www.linkedin.com/company/boldmark-contractors-limited/" class="fa fa-linkedin"></a></li>
                                    <li><a href="mailto:info@boldmark.co.ke" class="fa fa-envelope"></a></li>
                                    <li><a href="tel:0703895999" class="fa fa-phone"></a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="widget widget_services">
                                <h3 class="widget-title text-center" style="text-shadow: 1px 1px #ffffff; text-transform:capitalize">Services</h3>
                                <ul class="text-center">
                                <?php $Services = DB::table('services')->get(); ?>
                                    @foreach ($Services as $Ser)
                                    <li><a href="{{url('/')}}/services/{{$Ser->slung}}">{{$Ser->title}}</a></li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="widget widget_services">
                                <h3 class="widget-title text-center" style="text-shadow: 1px 1px #ffffff; text-transform:capitalize">Important Links</h3>
                                <ul class="text-center">
                                    <li><a href="{{url('/')}}/health-and-safety">Health and Safety</a></li>
                                    <li><a href="{{url('/')}}/terms-and-conditions">Terms and Conditions</a></li>
                                    <li><a href="{{url('/')}}/copyright">Copyright Statement</a></li>
                                    <li><a href="{{url('/')}}/privacy-policy">Privacy Policy</a></li>
                                    <li><a href="{{url('/')}}/strategy">Our Strategy</a></li>

                                </ul>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <!-- FOOTER COPYRIGHT -->

            <div class="footer-bottom">
              <div class="container">
                <div class="wt-footer-bot-left d-flex justify-content-between">
                    <span class="copyrights-text">Copyright © {{date('Y')}} BoldMark Contractors LTD Powered by <span class="site-text-primary" style="text-transform:capitalize">Designekta Studios</span></span>
                    <ul class="copyrights-nav">
                        <li><a href="{{url('/')}}/terms-and-conditions">Terms & Condition</a></li>
                        <li><a href="{{url('/')}}/privacy-policy">Privacy Policy</a></li>
                        <li><a href="{{url('/')}}/contact-us">Contact Us</a></li>
                    </ul>
                </div>
              </div>
            </div>


        </footer>
        <!-- FOOTER END -->



        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>



 	</div>

<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">

        <div class="loader">
            <span class="block-1"></span>
            <span class="block-2"></span>
            <span class="block-3"></span>
            <span class="block-4"></span>
            <span class="block-5"></span>
            <span class="block-6"></span>
            <span class="block-7"></span>
            <span class="block-8"></span>
            <span class="block-9"></span>
            <span class="block-10"></span>
            <span class="block-11"></span>
            <span class="block-12"></span>
            <span class="block-13"></span>
            <span class="block-14"></span>
            <span class="block-15"></span>
            <span class="block-16"></span>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->

<!-- JAVASCRIPT  FILES ========================================= -->
<script  src="{{asset('theme/js/jquery-2.2.0.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script  src="{{asset('theme/js/popper.min.js')}}"></script><!-- POPPER.MIN JS -->
<script  src="{{asset('theme/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script  src="{{asset('theme/js/bootstrap-select.min.js')}}"></script><!-- Form js -->
<script  src="{{asset('theme/js/magnific-popup.min.js')}}"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="{{asset('theme/js/waypoints.min.js')}}"></script><!-- WAYPOINTS JS -->
<script  src="{{asset('theme/js/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script  src="{{asset('theme/js/waypoints-sticky.min.js')}}"></script><!-- STICKY HEADER -->
<script  src="{{asset('theme/js/isotope.pkgd.min.js')}}"></script><!-- MASONRY  -->
<script  src="{{asset('theme/js/owl.carousel.min.js')}}"></script><!-- OWL  SLIDER  -->
<script  src="{{asset('theme/js/stellar.min.js')}}"></script><!-- PARALLAX BG IMAGE   -->
<script  src="{{asset('theme/js/theia-sticky-sidebar.js')}}"></script><!-- STICKY SIDEBAR  -->
<script  src="{{asset('theme/js/jquery.bootstrap-touchspin.js')}}"></script><!-- FORM JS -->
<script  src="{{asset('theme/js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->
<script  src="{{asset('theme/js/lc_lightbox.lite.js')}}" ></script><!-- IMAGE POPUP -->
<script  src="{{asset('theme/js/switcher.js')}}"></script><!-- SHORTCODE FUCTIONS  -->

<!-- REVOLUTION JS FILES -->

<script  src="{{asset('theme/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script  src="{{asset('theme/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script  src="{{asset('theme/plugins/revolution/revolution/js/extensions/revolution-plugin.js')}}"></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script  src="{{asset('theme/js/rev-script-11.js')}}"></script>




</body>


</html>
