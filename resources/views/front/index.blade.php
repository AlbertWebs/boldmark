@extends('front.master')

@section('content')
<!-- CONTENT START -->
<div class="page-content">

    @include('front.slider')

    <!-- ABOUT ONE SECTION START -->
    <div class="section-full p-t90 p-b50 bg-no-repeat bg-bottom-left bg-white" id="about"  style="background-image:url('{{asset('theme/images/background/building-bg.html')}}');">
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
                    <?php $Services = DB::table('services')->get(); ?>
                    @foreach ($Services as $Ser)
                        <!-- COLUMNS 1 -->
                        <div class="col-lg-4 col-md-6  col-sm-6 m-b30" >
                            <div class="service-icon-box-three shadow-bx text-center" style="border:6px solid #666666; min-height:542px;">

                                <div class="wt-icon-box-wraper circle-bg  scale-up-center">
                                    <div class="icon-lg inline-icon">
                                        <span class="icon-cell"><img src="{{asset('theme/images/home-11/icon/')}}/{{$Ser->icon}}"></span>
                                    </div>
                                </div>

                                <div class="service-icon-box-title">
                                    <h4 class="wt-title"><a href="{{url('/')}}/services/{{$Ser->slung}}">{{$Ser->title}}</a></h4>
                                </div>

                                <div class="service-icon-box-content">
                                    <p>{{$Ser->meta}}</p>
                                    <a style="border:2px solid #7c141c; padding:5px; border-radius:10px;" href="{{url('/')}}/services/{{$Ser->slung}}" class="site-button-link site-text-primary">Read More</a>
                                </div>

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

    </div>
    <!-- INTRO SECTION END -->


    <!-- GET IN TOUCH SECTION START -->
    <div class="section-full p-t0 p-b50 bg-white get-in-touch-wraper">

        <div class="container">
            <div class="get-in-touch">

                <div class="row justify-content-between d-flex align-items-center">
                    <div class="col-lg-12 col-md-12">
                        {{-- <div class="get-in-touch-pic text-center" style="min-height: 200px;"> --}}

                            <!-- Circle Animation Start-->
                                {{-- <div class='ripple-background'>
                                    <div class='ls-circle ls-xxlarge ls-shade1'></div>
                                    <div class='ls-circle ls-xlarge ls-shade2'></div>
                                    <div class='ls-circle ls-large ls-shade3'></div>
                                    <div class='ls-circle ls-medium ls-shade4'></div>
                                    <div class='ls-circle ls-small ls-shade5'></div>
                                </div> --}}
                            <!-- Circle Animation End-->
                            <h2 class="wt-title text-center">Quality and reliabile services to
                                provide a solution to your project
                            </h2>
                            <a download="" href="{{url('/')}}/uploads/New-Boldmark-Profile-rd.pdf" class="site-button site-btn-effect"><i class="fa fa-download"></i> Download Profile</a>
                        {{-- </div> --}}
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
                                    <div>
                                        Latest Articles Updated Daily
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
                                                <li class="post-date">March 9, 2022</li>
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
                                                <li class="post-date">March 9, 2022</li>
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
                                                <li class="post-date">March 9, 2022</li>
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
                                                <li class="post-date">March 9, 2022</li>
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
                                                <li class="post-date">March 9, 2022</li>
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
                                                <li class="post-date">March 9, 2022</li>
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
