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

                        <div class="col-lg-8 col-md-6 col-sm-12">

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
                                                Providing outstanding service is the core of our business. Because spa services reserv especially for you, we ask that you notify us 24 hours in advance to change or cancel appointments without penalty. Without 24 hour notice, we will charge a fee of 50% of the price of the cancelled service, and 100% of the service in the event of a “no-show.” We thank you in advance for your cooperation and understanding. Spa packages and groups must give a minimum 48 hour cancellation notice.
                                            </p>
                                        <p>Efficiently unleash cross-media information without cross-media value. Quickly timely deliverables. Efficiently unleash cross-media information without cross-media value. Quickly maximize maximized timely deliverables for real-time schemas. Dramatically maintain solutions. Dramatically maintain solutions. Efficiently unleash cross-media information without cross-media value. Quickly maximize timely fixed deliverables for real-time functional schemas.</p></div>
                                    </div>
                                </div>

                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                         <h3 class="acod-title">
                                            <a data-toggle="collapse" href="#collapseTwo5" class="collapsed" data-parent="#accordion5" >
                                                What are your hours?
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                         </h3>
                                    </div>
                                    <div id="collapseTwo5" class="acod-body collapse">
                                        <div class="acod-content p-a20 bg-gray">
                                        Monday – Friday: 9 to 7pm Saturday: 8 to 6pm Sunday: Closed
                                        </div>
                                    </div>
                                </div>

                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                         <h3 class="acod-title">
                                            <a data-toggle="collapse" href="#collapseThree5" class="collapsed" data-parent="#accordion5">
                                             How do I schedule an appointment?
                                            <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                         </h3>
                                    </div>
                                    <div id="collapseThree5" class="acod-body collapse">
                                        <div class="acod-content p-a20 bg-gray">You can schedule your appointment by phone, in person or online. Reservations for your appointment are held with a credit card or gift certificate.</div>
                                    </div>
                                </div>

                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                        <h3 class="acod-title">
                                        <a data-toggle="collapse"  href="#collapseFour5" class="collapsed"  data-parent="#accordion5">
                                        What should I wear for a spa or salon treatment?
                                        <span class="indicator"><i class="fa fa-plus"></i></span>
                                        </a>
                                     </h3>
                                    </div>
                                    <div id="collapseFour5" class="acod-body collapse">
                                        <div class="acod-content p-a20 bg-gray">No special clothing is required; come as you are! If you are enjoying several services, you will be provided with a robe and slippers. Towels for the eucalyptus steam shower are available. Your personal comfort is always most important to us!</div>
                                    </div>
                                </div>

                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                         <h3 class="acod-title">
                                            <a data-toggle="collapse" href="#collapseFive5" class="collapsed" data-parent="#accordion5" >
                                                What if I have lost my gift certificate?
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                         </h3>
                                    </div>
                                    <div id="collapseFive5" class="acod-body collapse">
                                        <div class="acod-content p-a20 bg-gray">Your certificate is considered the same as cash. It is necessary to keep track of this valuable property.</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12">

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

                        </div>


                    </div>

                </div>
            </div>
        </div>
        <!-- FAQ SECTION END -->

    </div>
    <!-- CONTENT END -->
@endsection
