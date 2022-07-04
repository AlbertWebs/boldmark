@extends('front.master')

@section('content')
<!-- CONTENT START -->
<div class="page-content">

    <!-- SLIDER START -->
    <div class="slider-outer2 bg-white">
        <div class="mid-slider">
            <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="typewriter-effect" data-source="gallery">
                <div id="welcome_two" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                    <ul>

                        <!-- SLIDE 1 -->
                        <li data-index="rs-901"
                        data-transition="slidingoverlayhorizontal"
                        data-slotamount="default"
                        data-hideafterloop="0"
                        data-hideslideonmobile="off"
                        data-easein="default"
                        data-easeout="default"
                        data-masterspeed="default"
                        data-thumb="{{asset('theme/images/home-11/slider/slide1.jpg')}}"
                        data-rotate="0"
                        data-saveperformance="off"
                        data-title="Slide" data-param1=""
                        data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('theme/images/home-11/slider/slide1.jpg')}}" alt=""  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina/>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 [ for overlay ] -->
                            <div class="tp-caption tp-shape tp-shapewrapper "
                            id="slide-901-layer-0"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                            data-width="full"
                            data-height="full"
                            data-whitespace="nowrap"
                            data-type="shape"
                            data-basealign="slide"
                            data-responsive_offset="off"
                            data-responsive="off"
                            data-frames='[
                            {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                            {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                            ]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 1;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                            </div>

                            <!-- LAYER NR. 2 [ Small Title ] -->
                            <div class="tp-caption   tp-resizeme site-text-primary"
                            id="slide-901-layer-2"
                            data-x="['left','left','left','left']" data-hoffset="['30','120','34','30']"
                            data-y="['top','middle','middle','middle']" data-voffset="['180','-80','-80','-60']"
                            data-fontsize="['24','24','24','20']"
                            data-lineheight="['24','24','24','20']"
                            data-width="['700','700','96%','96%']"
                            data-height="['none','none','none','none']"
                            data-whitespace="['normal','normal','normal','normal']"

                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[
                            {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                            {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                            ]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 13;
                            white-space: normal;
                            font-weight: 700;
                            font-family: 'Exo', sans-serif;">We Make Sure</div>

                            <!-- LAYER NR. 3 [ Large Title ] -->
                            <div class="tp-caption   tp-resizeme"
                            id="slide-901-layer-3"
                            data-x="['left','left','left','left']" data-hoffset="['30','120','30','30']"
                            data-y="['top','middle','middle','middle']" data-voffset="['230','20','0','0']"
                            data-fontsize="['56','56','46','30']"
                            data-lineheight="['66','66','48','38']"
                            data-width="['600','700','96%','96%']"
                            data-height="['none','none','none','none']"
                            data-whitespace="['normal','normal','normal','normal']"

                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[
                            {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                            {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                            ]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[5,5,5,5]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 13;
                            white-space: normal;
                            font-weight: 900;
                            color:#fff;
                            border-width:0px; font-family: 'Exo', sans-serif; text-transform:uppercase;">Build Everything You Needs</div>

                            <!-- LAYER NR. 4 [ for paragraph] -->
                            <div class="tp-caption  tp-resizeme"
                            id="slide-901-layer-4"
                            data-x="['left','left','left','left']" data-hoffset="['30','120','30','30']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['50','130','100','80']"
                            data-fontsize="['16','16','20','14']"
                            data-lineheight="['30','30','30','22']"
                            data-width="['600','600','90%','90%']"
                            data-height="['none','none','none','none']"
                            data-whitespace="['normal','normal','normal','normal']"

                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[
                            {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                            {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                            ]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 13;
                            font-weight: 500;
                            color:#fff;
                            border-width:0px;font-family: 'Exo', sans-serif;">
                            We only hire great people who strive to push their ideas into fruition by outmuscling and outhustling the competition.
                            </div>

                            <!-- LAYER NR. 5 [ for see all service botton ] -->
                            <div class="tp-caption tp-resizeme"
                            id="slide-901-layer-5"
                            data-x="['left','left','left','left']" data-hoffset="['30','120','30','30']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['150','230','180','180']"
                            data-lineheight="['none','none','none','none']"
                            data-width="['200','200','200','200']"
                            data-height="['none','none','none','none']"
                            data-whitespace="['normal','normal','normal','normal']"

                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[
                            {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                            {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                            ]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index:13; text-transform:uppercase;">
                            <a href="about-1.html" class="site-button btn-hover-animation"><i class="flaticon-right"></i>More About</a>
                            </div>


                        </li>

                        <!-- SLIDE 2 -->
                        <li data-index="rs-902"
                        data-transition="slidingoverlayhorizontal"
                        data-slotamount="default"
                        data-hideafterloop="0"
                        data-hideslideonmobile="off"
                        data-easein="default"
                        data-easeout="default"
                        data-masterspeed="default"
                        data-thumb="{{asset('theme/images/home-11/slider/slide2.jpg')}}"
                        data-rotate="0"
                        data-saveperformance="off"
                        data-title="Slide" data-param1=""
                        data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('theme/images/home-11/slider/slide2.jpg')}}"  alt=""  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina/>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 [ for overlay ] -->
                            <div class="tp-caption tp-shape tp-shapewrapper "
                            id="slide-902-layer-0"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                            data-width="full"
                            data-height="full"
                            data-whitespace="nowrap"
                            data-type="shape"
                            data-basealign="slide"
                            data-responsive_offset="off"
                            data-responsive="off"
                            data-frames='[
                            {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                            {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                            ]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 1;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                            </div>

                            <!-- LAYER NR. 2 [ Small Title ] -->
                            <div class="tp-caption   tp-resizeme site-text-primary"
                            id="slide-902-layer-2"
                            data-x="['left','left','left','left']" data-hoffset="['30','120','34','30']"
                            data-y="['top','middle','middle','middle']" data-voffset="['180','-80','-80','-60']"
                            data-fontsize="['24','24','24','20']"
                            data-lineheight="['24','24','24','20']"
                            data-width="['700','700','96%','96%']"
                            data-height="['none','none','none','none']"
                            data-whitespace="['normal','normal','normal','normal']"

                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[
                            {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                            {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                            ]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 13;
                            white-space: normal;
                            font-weight: 700;
                            font-family: 'Exo', sans-serif;">We Make Sure</div>

                            <!-- LAYER NR. 3 [ Large Title ] -->
                            <div class="tp-caption   tp-resizeme"
                            id="slide-902-layer-3"
                            data-x="['left','left','left','left']" data-hoffset="['30','120','30','30']"
                            data-y="['top','middle','middle','middle']" data-voffset="['230','20','0','0']"
                            data-fontsize="['56','56','46','30']"
                            data-lineheight="['66','66','48','38']"
                            data-width="['600','700','96%','96%']"
                            data-height="['none','none','none','none']"
                            data-whitespace="['normal','normal','normal','normal']"

                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[
                            {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                            {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                            ]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[5,5,5,5]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 13;
                            white-space: normal;
                            font-weight: 900;
                            color:#fff;
                            border-width:0px; font-family: 'Exo', sans-serif; text-transform:uppercase;">We will build your dream home.</div>

                            <!-- LAYER NR. 4 [ for paragraph] -->
                            <div class="tp-caption  tp-resizeme"
                            id="slide-902-layer-4"
                            data-x="['left','left','left','left']" data-hoffset="['30','120','30','30']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['50','130','100','80']"
                            data-fontsize="['16','16','20','14']"
                            data-lineheight="['30','30','30','22']"
                            data-width="['600','600','90%','90%']"
                            data-height="['none','none','none','none']"
                            data-whitespace="['normal','normal','normal','normal']"

                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[
                            {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                            {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                            ]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 13;
                            font-weight: 500;
                            color:#fff;
                            border-width:0px;font-family: 'Exo', sans-serif;">
                            We only hire great people who strive to push their ideas into fruition by outmuscling and outhustling the competition.
                            </div>

                            <!-- LAYER NR. 5 [ for see all service botton ] -->
                            <div class="tp-caption tp-resizeme"
                            id="slide-902-layer-5"
                            data-x="['left','left','left','left']" data-hoffset="['30','120','30','30']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['150','230','180','180']"
                            data-lineheight="['none','none','none','none']"
                            data-width="['200','200','200','200']"
                            data-height="['none','none','none','none']"
                            data-whitespace="['normal','normal','normal','normal']"

                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[
                            {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                            {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                            ]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index:13; text-transform:uppercase;">
                            <a href="about-1.html" class="site-button btn-hover-animation"><i class="flaticon-right"></i>More About</a>
                            </div>

                        </li>


                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- SLIDER END -->

    <!-- ABOUT ONE SECTION START -->
    <div class="section-full p-t90 p-b50 bg-no-repeat bg-bottom-left bg-white"  style="background-image:url(images/background/building-bg.html);">
        <div class="about-section-11">
            <div class="container">
                <div class="section-content">
                    <div class="row justify-content-center d-flex">

                        <div class="col-lg-6 col-md-12 m-b30">
                            <div class="about-section-11-right">
                                <!-- TITLE START-->
                                <div class="section-head left wt-small-separator-outer">
                                    <div class="wt-small-separator site-text-primary">
                                        <div>About Us</div>
                                    </div>
                                    <h2>We build your visions, with perfection.</h2>
                                </div>
                                <!-- TITLE END-->

                                <div class="about-one">
                                    <p>Boldmark construction ltd is an
                                        all-in-one construction company
                                        where we do both big and small
                                        residential and business buildings.
                                    </p>
                                    <p>We take over your project from
                                        feasibility stage, design through
                                        to handing over of the same.
                                    </p>
                                    <p>At Boldmark, we believe in
                                        close attention to the very minute
                                        details in order to produce the
                                        best and quality projects.
                                    </p>
                                </div>

                                 <ul class="description-list p-b20">
                                    <li><i class="fa fa-angle-right"></i>Quality assured structures</li>
                                    <li><i class="fa fa-angle-right"></i>Highly Professional Staff</li>
                                    <li><i class="fa fa-angle-right"></i>Expertise & Innovation of global standards</li>
                                </ul>

                                <a href="#services" class="site-button site-btn-effect">Services</a>
                           </div>
                       </div>

                        <div class="col-lg-6 col-md-12 m-b30 about-max-12-position">
                            <div class="about-max-12">
                                <span class="ipad-pencil"><img src="{{asset('theme/images/home-11/background/ipad-pencil.png')}}" class="ipad-pencil-jump"></span>
                                <div class="ser-ipad-warp">
                                    <span class="ser-ipad-cam"></span>
                                    <div class="ser-ipad-pic" style="background-image:url('{{asset('theme/images/home-11/project/1.jpg')}}')">
                                      <div class="ser-ipad-overlay"></div>
                                      {{-- <a href="https://www.youtube.com/watch?v=c1XNqw2gSbU" class="mfp-video play-now-video">
                                        <i class="icon fa fa-play"></i>
                                        <span class="ripple"></span>
                                    </a> --}}
                                    </div>
                                    <span class="ser-ipad-btn"></span>
                                </div>
                            </div>
                        </div>

                   </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT ONE SECTION END -->

    <!-- INTRO SECTION START -->
    <div class="section-full p-t90 p-b50 bg-gray">

        <div class="container">


            <!-- TITLE START-->
            <div class="section-head center  wt-small-separator-outer">
                <div class="wt-small-separator site-text-primary">
                    <div>What We Do!</div>
                </div>
                <h2 class="wt-title">Let's build your dream together</h2>
            </div>
            <!-- TITLE END-->



            <div class="s-section">
                <div class="row">
                    <!-- COLUMNS 1 -->
                    <div class="col-lg-4 col-md-6  col-sm-6 m-b30">
                        <div class="service-icon-box-three shadow-bx text-center">

                            <div class="wt-icon-box-wraper circle-bg  scale-up-center">
                                <div class="icon-lg inline-icon">
                                    <span class="icon-cell"><img src="{{asset('theme/images/home-11/icon/pic-1.png')}}"></span>
                                </div>
                            </div>

                            <div class="service-icon-box-title">
                                <h4 class="wt-title"><a href="#">Architectural and structural designs</a></h4>
                            </div>

                            <div class="service-icon-box-content">
                                <p>Lorem ipsum dolor sit and amet, adipisicing elit, sed do eiusmod tempor.</p>
                                <a href="#" class="site-button-link site-text-primary">Read More</a>
                            </div>

                        </div>
                    </div>

                    <!-- COLUMNS 2 -->
                    <div class="col-lg-4 col-md-6  col-sm-6 m-b30">
                        <div class="service-icon-box-three shadow-bx text-center">

                            <div class="wt-icon-box-wraper circle-bg  scale-up-center">
                                <div class="icon-lg inline-icon">
                                    <span class="icon-cell"><img src="{{asset('theme/images/home-11/icon/pic-2.png')}}"></span>
                                </div>
                            </div>

                            <div class="service-icon-box-title">
                                <h4 class="wt-title"><a href="#">Preparation of bills of quantities</a></h4>
                            </div>

                            <div class="service-icon-box-content">
                                <p>Lorem ipsum dolor sit and amet, adipisicing elit, sed do eiusmod tempor.</p>
                                <a href="#" class="site-button-link site-text-primary">Read More</a>
                            </div>

                        </div>
                    </div>

                    <!-- COLUMNS 3 -->
                    <div class="col-lg-4 col-md-6  col-sm-6 m-b30">
                        <div class="service-icon-box-three shadow-bx text-center">

                            <div class="wt-icon-box-wraper circle-bg  scale-up-center">
                                <div class="icon-lg inline-icon">
                                    <span class="icon-cell"><img src="{{asset('theme/images/home-11/icon/pic-3.png')}}"></span>
                                </div>
                            </div>

                            <div class="service-icon-box-title">
                                <h4 class="wt-title"><a href="#">Project management consultancy</a></h4>
                            </div>

                            <div class="service-icon-box-content">
                                <p>Lorem ipsum dolor sit and amet, adipisicing elit, sed do eiusmod tempor.</p>
                                <a href="#" class="site-button-link site-text-primary">Read More</a>
                            </div>

                        </div>
                    </div>


                    <!-- COLUMNS 4 -->
                    <div class="col-lg-4 col-md-6  col-sm-6 m-b30">
                        <div class="service-icon-box-three shadow-bx text-center">

                            <div class="wt-icon-box-wraper circle-bg  scale-up-center">
                                <div class="icon-lg inline-icon">
                                    <span class="icon-cell"><img src="{{asset('theme/images/home-11/icon/pic-4.png')}}"></span>
                                </div>
                            </div>

                            <div class="service-icon-box-title">
                                <h4 class="wt-title"><a href="#">Renovations</a></h4>
                            </div>

                            <div class="service-icon-box-content">
                                <p>Lorem ipsum dolor sit and amet, adipisicing elit, sed do eiusmod tempor.</p>
                                <a href="#" class="site-button-link site-text-primary">Read More</a>
                            </div>

                        </div>
                    </div>

                    <!-- COLUMNS 4 -->
                    <div class="col-lg-4 col-md-6  col-sm-6 m-b30">
                        <div class="service-icon-box-three shadow-bx text-center">

                            <div class="wt-icon-box-wraper circle-bg  scale-up-center">
                                <div class="icon-lg inline-icon">
                                    <span class="icon-cell"><img src="{{asset('theme/images/home-11/icon/pic-4.png')}}"></span>
                                </div>
                            </div>

                            <div class="service-icon-box-title">
                                <h4 class="wt-title"><a href="#">Construction</a></h4>
                            </div>

                            <div class="service-icon-box-content">
                                <p>Lorem ipsum dolor sit and amet, adipisicing elit, sed do eiusmod tempor.</p>
                                <a href="#" class="site-button-link site-text-primary">Read More</a>
                            </div>

                        </div>
                    </div>

                     <!-- COLUMNS 4 -->
                     <div class="col-lg-4 col-md-6  col-sm-6 m-b30">
                        <div class="service-icon-box-three shadow-bx text-center">

                            <div class="wt-icon-box-wraper circle-bg  scale-up-center">
                                <div class="icon-lg inline-icon">
                                    <span class="icon-cell"><img src="{{asset('theme/images/home-11/icon/pic-1.png')}}"></span>
                                </div>
                            </div>

                            <div class="service-icon-box-title">
                                <h4 class="wt-title"><a href="#">Interior design and fit-outs</a></h4>
                            </div>

                            <div class="service-icon-box-content">
                                <p>Lorem ipsum dolor sit and amet, adipisicing elit, sed do eiusmod tempor.</p>
                                <a href="#" class="site-button-link site-text-primary">Read More</a>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
    <!-- INTRO SECTION END -->


    <!-- GET IN TOUCH SECTION START -->
    <div class="section-full p-t0 p-b50 bg-white get-in-touch-wraper" style="min-height: 300px; padding:100px">

        <div class="container">
            <div class="get-in-touch">

                <div class="row justify-content-between d-flex align-items-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="get-in-touch-pic text-center" style="min-height: 200px;">
                            {{-- <img src="{{asset('theme/images/home-11/afro-american-builders-wearing-helmets-face-masks-while-working-removebg-preview.png')}}" alt=""> --}}
                            <!-- Circle Animation Start-->
                                {{-- <div class='ripple-background'>
                                    <div class='ls-circle ls-xxlarge ls-shade1'></div>
                                    <div class='ls-circle ls-xlarge ls-shade2'></div>
                                    <div class='ls-circle ls-large ls-shade3'></div>
                                    <div class='ls-circle ls-medium ls-shade4'></div>
                                    <div class='ls-circle ls-small ls-shade5'></div>
                                </div> --}}
                            <!-- Circle Animation End-->
                            <h2 class="wt-title">Quality and reliability services to
                                provide a solution to your project,
                                we do it all and fast
                            </h2>
                            <a download="" href="{{url('/')}}/uploads/New-Boldmark-Profile-rd.pdf" class="site-button site-btn-effect"><i class="fa fa-download"></i> Download Profile</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
    <!-- GET IN TOUCH SECTION End -->

    <!-- OUR BLOG START -->
    <div class="section-full  p-t80 p-b80 blog-gallery-block-wrap  overflow-hide bg-gray">
        <div class="blog-gallery-block-outer">



            <div class="container">

                <div class="wt-separator-two-part">
                    <div class="row wt-separator-two-part-row">
                        <div class="col-lg-6 col-md-12 wt-separator-two-part-left">
                            <!-- TITLE START-->
                            <div class="section-head left wt-small-separator-outer when-bg-dark">
                                <div class="wt-small-separator site-text-primary">
                                    <div>Latest Articles Updated Daily
                                    </div>
                                </div>
                                {{-- <h2 class="wt-title">We Are Here To Learn You More From Blog</h2> --}}
                            </div>
                            <!-- TITLE END-->
                        </div>

                    </div>
                </div>

                <div class="section-content">

                    <div class="blog-gallery-style1">
                        <div class="owl-carousel blog-gallery-one owl-btn-vertical-center ">

                            <!-- COLUMNS 1 -->
                            <div class="item ">
                                <div class="blog-post latest-blog-11  block-shadow">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="javascript:;"><img src="{{asset('theme/images/home-11/blog/bg5.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="wt-post-info  bg-white">
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date">March 9, 2021</li>
                                            </ul>
                                        </div>
                                        <div class="wt-post-title ">
                                            <h4 class="post-title">Broad vision. Careful thought. Hand-crafted design.</h4>
                                        </div>
                                        <div class="wt-post-readmore">
                                            <a href="Javascript:;" class="site-button-link site-text-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- COLUMNS 2 -->
                            <div class="item ">
                                <div class="blog-post latest-blog-11  block-shadow">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="javascript:;"><img src="{{asset('theme/images/home-11/blog/bg5.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="wt-post-info  bg-white">
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date">March 9, 2021</li>
                                            </ul>
                                        </div>
                                        <div class="wt-post-title ">
                                            <h4 class="post-title">Building your dream house shouldn’t be a nightmare!</h4>
                                        </div>
                                        <div class="wt-post-readmore">
                                            <a href="Javascript:;" class="site-button-link site-text-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- COLUMNS 3 -->
                            <div class="item ">
                                <div class="blog-post latest-blog-11  block-shadow">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="javascript:;"><img src="{{asset('theme/images/home-11/blog/bg5.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="wt-post-info  bg-white">
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date">March 9, 2021</li>
                                            </ul>
                                        </div>
                                        <div class="wt-post-title ">
                                            <h4 class="post-title">Creating quality urban lifestyles, building stronger communities.</h4>
                                        </div>
                                        <div class="wt-post-readmore">
                                            <a href="Javascript:;" class="site-button-link site-text-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- COLUMNS 4 -->
                            <div class="item ">
                                <div class="blog-post latest-blog-11  block-shadow">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="javascript:;"><img src="{{asset('theme/images/home-11/blog/bg5.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="wt-post-info  bg-white">
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date">March 9, 2021</li>
                                            </ul>
                                        </div>
                                        <div class="wt-post-title ">
                                            <h4 class="post-title">For your roofing and siding, quality we’ll be providing!</h4>
                                        </div>
                                        <div class="wt-post-readmore">
                                            <a href="Javascript:;" class="site-button-link site-text-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- COLUMNS 5 -->
                            <div class="item ">
                                <div class="blog-post latest-blog-11  block-shadow">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="javascript:;"><img src="{{asset('theme/images/home-11/blog/bg5.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="wt-post-info  bg-white">
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date">March 9, 2021</li>
                                            </ul>
                                        </div>
                                        <div class="wt-post-title ">
                                            <h4 class="post-title">Doing it right costs less than doing it over!</h4>
                                        </div>
                                        <div class="wt-post-readmore">
                                            <a href="Javascript:;" class="site-button-link site-text-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- COLUMNS 6 -->
                            <div class="item ">
                                <div class="blog-post latest-blog-11  block-shadow">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="javascript:;"><img src="{{asset('theme/images/home-11/blog/bg5.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="wt-post-info  bg-white">
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date">March 9, 2021</li>
                                            </ul>
                                        </div>
                                        <div class="wt-post-title ">
                                            <h4 class="post-title">Developing our people, Growing our business.</h4>
                                        </div>
                                        <div class="wt-post-readmore">
                                            <a href="Javascript:;" class="site-button-link site-text-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- OUR BLOG END -->


</div>
<!-- CONTENT END -->
@endsection
