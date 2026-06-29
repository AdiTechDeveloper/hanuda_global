@extends('layout.default')
@section('content')
<div class="page-projects">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Choose Our Project Nav start -->
                <div class="our-Project-nav wow fadeInUp" data-wow-delay="0.4s">
                    <ul>
                        <li><a href="#" class="active-btn" data-filter="*">all</a></li>
                        <li><a href="#" data-filter=".bearings">Bearings</a></li>
                        <li><a href="#" data-filter=".electricalmotors">Electrical Motors</a></li>
                        <li><a href="#" data-filter=".beltingbelts">Belting / Belts</a></li>
                        <li><a href="#" data-filter=".rollerchains">Roller Chains</a></li>
                        <li><a href="#" data-filter=".gearboxes">Gear Boxes</a></li>
                        <li><a href="#" data-filter=".casters">Casters</a></li>
                        <li><a href="#" data-filter=".lubricants">Lubricants</a></li>
                        <li><a href="#" data-filter=".constructionmining">Construction & Mining</a></li>
                    </ul>
                </div>
                <!-- Choose Our Project Nav End -->
            </div>

            <div class="col-lg-12">
                <!-- Project Item Boxes start -->
                <div class="row project-item-boxes align-items-center">
                    <div class="col-md-6 project-item-box bearings automation">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/bearings.jpeg') }}" alt="">
                                </figure>
                            </div>

                            <div class="project-tag">
                                <a href="project-single.html">Bearings</a>
                            </div>

                            <div class="project-content">
                                <h3><a href="project-single.html">Total Quality Management Implementation</a></h3>
                            </div>
                        </div>
                        <!-- Project Item End -->
                    </div>

                    <div class="col-md-6 project-item-box electricalmotors sustainability development">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/electrical-moter.jpeg') }}" alt="">
                                </figure>
                            </div>

                            <div class="project-tag">
                                <a href="project-single.html">electricalmotors</a>
                            </div>

                            <div class="project-content">
                                <h3><a href="project-single.html">Advanced Research in Material Science</a></h3>
                            </div>
                        </div>
                        <!-- Project Item End -->
                    </div>

                    <div class="col-md-6 project-item-box beltingbelts infrastructure">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/belts.jpeg') }}" alt="">
                                </figure>
                            </div>

                            <div class="project-tag">
                                <a href="project-single.html">Belting Belts</a>
                            </div>

                            <div class="project-content">
                                <h3><a href="project-single.html">Workplace Safety Enhancement Initiative</a></h3>
                            </div>
                        </div>
                        <!-- Project Item End -->
                    </div>

                    <div class="col-md-6 project-item-box rollerchains development">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/roller-chain.jpeg') }}" alt="">
                                </figure>
                            </div>

                            <div class="project-tag">
                                <a href="project-single.html">Roller Chains</a>
                            </div>

                            <div class="project-content">
                                <h3><a href="project-single.html">Robotic Process Automation Deployment</a></h3>
                            </div>
                        </div>
                        <!-- Project Item End -->
                    </div>

                    <div class="col-md-6 project-item-box gearboxes manufacturing">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp" data-wow-delay="0.8s">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/gear-box.jpeg') }}" alt="">
                                </figure>
                            </div>

                            <div class="project-tag">
                                <a href="project-single.html">Gear Boxes</a>
                            </div>

                            <div class="project-content">
                                <h3><a href="project-single.html">Energy-Efficient Manufacturing Systems</a></h3>
                            </div>
                        </div>
                        <!-- Project Item End -->
                    </div>

                    <div class="col-md-6 project-item-box casters infrastructure">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp" data-wow-delay="1s">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/casters.jpeg') }}" alt="">
                                </figure>
                            </div>

                            <div class="project-tag">
                                <a href="project-single.html">Casters</a>
                            </div>

                            <div class="project-content">
                                <h3><a href="project-single.html">Redesigning Factory Layouts for Efficiency</a></h3>
                            </div>
                        </div>
                        <!-- Project Item End -->
                    </div>

                    <div class="col-md-6 project-item-box lubricants infrastructure">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp" data-wow-delay="1s">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/lubricants.jpeg') }}" alt="">
                                </figure>
                            </div>

                            <div class="project-tag">
                                <a href="project-single.html">Lubricants</a>
                            </div>

                            <div class="project-content">
                                <h3><a href="project-single.html">Redesigning Factory Layouts for Efficiency</a></h3>
                            </div>
                        </div>
                        <!-- Project Item End -->
                    </div>

                    <div class="col-md-6 project-item-box constructionmining infrastructure">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp" data-wow-delay="1s">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/construction-&-mining.jpeg') }}" alt="">
                                </figure>
                            </div>

                            <div class="project-tag">
                                <a href="project-single.html">Construction & Mining</a>
                            </div>

                            <div class="project-content">
                                <h3><a href="project-single.html">Redesigning Factory Layouts for Efficiency</a></h3>
                            </div>
                        </div>
                        <!-- Project Item End -->
                    </div>
                </div>
                <!-- Project Item Boxes End -->
            </div>
        </div>
    </div>
</div>
@endsection
