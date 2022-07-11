@extends('front.master')

@section('content')
     <!-- CONTENT START -->
     <div class="page-content">



        <!-- FAQ SECTION START -->
        <div class="section-full p-t80 p-b50 bg-white">
            <div class="container">

                <!-- TITLE START-->
                <div class="section-head center wt-small-separator-outer text-center">
                    <div class="wt-small-separator site-text-primary">
                        <div  class="sep-leaf-left"></div>
                        <div>{{$title}}</div>
                        <div  class="sep-leaf-right"></div>
                    </div>
                </div>
                <!-- TITLE END-->

                <div class="section-content">

                    <div class="row d-flex justify-content-center">

                        <div class="col-lg-12 col-md-6 col-sm-12">

                             <!-- Accordian -->
                            <div class="wt-accordion acc-bg-gray faq-accorfion" id="accordion5">

                                <div class="panel wt-panel">
                                    <div class="acod-head  acc-actives">
                                         <h3 class="acod-title">
                                            <a data-toggle="collapse" href="#collapseOne5" data-parent="#accordion5" >
                                                General Information
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                         </h3>
                                    </div>
                                    <div id="collapseOne5" class="acod-body collapse show">
                                        <div class="acod-content p-a20 bg-gray">
                                            <p>
                                                Boldmark Construction LTD values privacy of any person or organization, business in nature or otherwise. We are therefore committed to protecting any personal information collected through the boldmark.co.ke website Boldmark Construction LTD may from time to time change this information and will inform all interested parties of the changes.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                         <h3 class="acod-title">
                                            <a data-toggle="collapse" href="#collapseTwo5" class="collapsed" data-parent="#accordion5" >
                                                Policies
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                         </h3>
                                    </div>
                                    <div id="collapseTwo5" class="acod-body collapse">
                                        <div class="acod-content p-a20 bg-gray">
                                            {{--  --}}
                                            <div class="col-12 align-self-center">


                                                                        <p><br></p><h4><i>Personal Information Collected</i>
                                                </h4>boldmark.co.ke will gather information in the background when any person or legal entity visits the boldmark.co.ke website using cookies. This may include IP address, device type, Internet browser type, operating system, location and other device specific infomation. Data collected is for business intelligence meant for enhancing user experience any time a user visits the boldmark.co.ke.<h4>&nbsp;<i>Management of personal database</i></h4>
                                                <span> You can choose whether you wish to receive promotional communications from our web site by email using the subscribe form in the footer section of this page. If you receive promotional email or SMS messages from us and would like to opt out, you can request deletion of your email info@boldmark.co.ke. </span> <span><br><br>
                                                </span>
                                                <h4><i>Contact</i></h4>&nbsp;You have the right to review the personal data we keep about you. You can request an overview of your personal data that by emailing&nbsp;info@boldmark.co.ke with the subject line Request for personal information. To help us prevent fraudulent collection of personal information, please include a scan of your passport or identity card. If you would like us to remove your personal information from our database, please email&nbsp;info@boldmark.co.ke with the subject line Request for removal of personal information. Please bear in mind that we may need to retain certain information for legal and/or administrative purposes such as record keeping or to detect fraudulent or criminal activities. <br><br><p></p>

                                            </div>
                                            {{--  --}}
                                        </div>
                                    </div>
                                </div>






                            </div>
                        </div>

                        {{-- <div class="col-lg-4 col-md-6 col-sm-12">

                            <div class="faq-sidebar">
                                <div class="service-side-btn m-b30 site-bg-secondry p-a20 text-white">
                                   <h2 class="wt-title">Downloads</h2>
                                    <p>Boldmark construction ltd is an all-in-one construction company where we do both big and small residential and business buildings.</p>


                                    <div class="wt-icon-box-wraper left ">
                                        <a download href="{{url('/')}}/uploads/New-Boldmark-Profile-rd.pdf" class="btn-block  p-a15 m-tb10">
                                            <span class="text-black m-r10"><i class="fa fa-file-pdf-o"></i></span>
                                            <strong class="text-uppercase text-black">Profile .PDF</strong>
                                        </a>
                                    </div>
                                    <div class="wt-icon-box-wraper left">
                                        <a download href="{{url('/')}}/uploads/New-Boldmark-Profile-rd.pdf" class="btn-block  p-a15 m-tb10">
                                            <span class="text-black m-r10"><i class="fa fa-file-pdf-o"></i></span>
                                            <strong class="text-uppercase text-black"> Portfolio .PDF</strong>
                                        </a>
                                    </div>
                                    <div class="wt-icon-box-wraper left">
                                        <a download href="{{url('/')}}/uploads/New-Boldmark-Profile-rd.pdf" class="btn-block  p-a15 m-tb10">
                                            <span class="text-black m-r10"><i class="fa fa-file-pdf-o"></i></span>
                                            <strong class="text-uppercase text-black">Construction World .PDF</strong>
                                        </a>
                                    </div>
                                </div>

                            <div class="wt-box p-a30 need-help site-bg-primary text-white m-b30">
                                <h2 class="m-t0">Need any help!</h2>
                                <p>
                                    We take over your project from feasibility stage, design through to handing over of the same.

                                    At Boldmark, we believe in close attention to the very minute details in order to produce the best and quality projects.
                                </p>
                                <a href="{{url('/')}}/contact-us" class="site-button-secondry site-btn-effect">Contact Us</a>
                            </div>
                            </div>

                        </div> --}}


                    </div>

                </div>
            </div>
        </div>
        <!-- FAQ SECTION END -->

    </div>
    <!-- CONTENT END -->
@endsection
