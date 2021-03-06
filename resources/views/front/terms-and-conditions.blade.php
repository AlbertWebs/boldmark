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
                                                Introduction
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                         </h3>
                                    </div>
                                    <div id="collapseOne5" class="acod-body collapse show">
                                        <div class="acod-content p-a20 bg-gray">
                                            <p>
                                                Last updated: May 17, 2022
                                                It is highly reccomended that you read these Terms and Conditions carefully before using the www.boldmark.co.ke website operated by Boldmark Construction LTD . Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Service. By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service. The Terms and Conditions agreement for Boldmark Construction LTD has been created by boldmark.co.ke.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                         <h3 class="acod-title">
                                            <a data-toggle="collapse" href="#collapseTwo5" class="collapsed" data-parent="#accordion5" >
                                                Links To Other Websites
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                         </h3>
                                    </div>
                                    <div id="collapseTwo5" class="acod-body collapse">
                                        <div class="acod-content p-a20 bg-gray">
                                            Our Service may contain links to third-party web sites or services that are not owned or controlled by Designekta Studios. Designekta has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that Designekta shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services. We strongly advise you to read the terms and conditions and privacy policies of any third-party web sites or services that you visit.
                                        </div>
                                    </div>
                                </div>

                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                         <h3 class="acod-title">
                                            <a data-toggle="collapse" href="#collapseThree5" class="collapsed" data-parent="#accordion5">
                                             Changes
                                            <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                         </h3>
                                    </div>
                                    <div id="collapseThree5" class="acod-body collapse">
                                        <div class="acod-content p-a20 bg-gray">
                                            We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 30 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion. By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service.
                                        </div>
                                    </div>
                                </div>

                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                        <h3 class="acod-title">
                                        <a data-toggle="collapse"  href="#collapseFour5" class="collapsed"  data-parent="#accordion5">
                                        Contact Us
                                        <span class="indicator"><i class="fa fa-plus"></i></span>
                                        </a>
                                     </h3>
                                    </div>
                                    <div id="collapseFour5" class="acod-body collapse">
                                        <div class="acod-content p-a20 bg-gray">
                                            If you have any questions about these Terms, please contact us through info@boldmark.co.ke.
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
