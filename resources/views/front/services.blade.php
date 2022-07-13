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
                            <h2 style="text-shadow: 2px 2px #ffffff; text-transform:capitalize" class="site-text-primary">{{$title}}</h2>
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

        @foreach ($Services as $ser)
        <!-- SERVICE DETAIL SECTION START -->
        <div class="section-full small-device  p-t80 p-b50 bg-white">
            <div class="section-content">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-12 rightSidebar">
                            <div class="all_services">
                                <ul>
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <?php $Services = DB::table('services')->get(); ?>
                                    @foreach ($Services as $Ser)
                                    @if($Ser->id == $ser->id)

                                    @else
                                    <li><a href="{{url('/')}}/services/{{$Ser->slung}}">{{$Ser->title}}</a></li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>

                            <div class="service-side-btn m-b30 site-bg-secondry p-a20 text-white">
                                <h2 class="wt-title">Downloads</h2>
                                <p>Boldmark construction ltd is an all-in-one construction company where we do both big and small residential and business buildings.</p>


                                <div class="wt-icon-box-wraper left ">
                                    <a download href="{{url('/')}}/uploads/New-Boldmark-Profile-rd.pdf" class="btn-block  p-a15 m-tb10">
                                        <span class="text-black m-r10"><i class="fa fa-file-pdf-o"></i></span>
                                        <strong class="text-uppercase text-black">Profile .PDF</strong>
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-8 col-md-12">
                            <div class="section-content">
                                <!-- TITLE START -->
                                <div class="text-left">
                                    <h2 class="wt-title">{{$ser->title}}</h2>
                                </div>
                                <!-- TITLE END -->
                            <div class="wt-box services-etc m-b30">
                                <p>
                                    {!!html_entity_decode($ser->content)!!}
                                </p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SERVICE DETAIL SECTION END -->
        @endforeach




    </div>
    <!-- CONTENT END -->
@endsection
