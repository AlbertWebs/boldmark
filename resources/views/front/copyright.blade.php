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

                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                         </h3>
                                    </div>
                                    <div id="collapseOne5" class="acod-body collapse show">
                                        <div class="acod-content p-a20 bg-gray">
                                            <div class="col-12 align-self-center">
                                                <h2 class="featured mt-0 ml-0">Copyright Statement</h2>
                                                <p></p>
                                                <p>&nbsp;This website and its content is copyright of Boldmark Construction LTD - ©
                                                        Boldmark Construction LTD  2022. All rights reserved.

                                                        Any redistribution or reproduction of part or all of the contents in
                                                        any form is partially prohibited other than the following:
                                                        </p><ul><li>
                                                            you may print or download to a local hard disk extracts for your
                                                            personal and non-commercial use only
                                                            </li><li>
                                                            you may copy the content to individual third parties for their
                                                            personal use, but only if you acknowledge the website as the source
                                                            of the material
                                                            </li><li>
                                                            Free Web themes can be downloaded reused and redistributed but the
                                                            footer back-links have to be retained
                                                        </li></ul>

                                                        You may not, except with our express written permission, distribute
                                                        or commercially exploit the content. Nor may you transmit it or store
                                                        it in any other website or other form of electronic retrieval system.

                                                        <br><p></p>

                                                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        {{-- <div class="col-lg-4 col-md-6 col-sm-12">

                            @include('front.legal-sidebar')

                        </div> --}}


                    </div>

                </div>
            </div>
        </div>
        <!-- FAQ SECTION END -->

    </div>
    <!-- CONTENT END -->
@endsection
