@extends('layout.default')
@section('title', 'About Us')
@section('content')
<!-- Page Header Start -->
<div class="page-header parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">About <span>Us</span></h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">about us</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- About Us Start -->
<div class="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- About Us Image Start -->
                <div class="about-image">
                    <!-- About Image Start -->
                    <div class="about-img-1">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('assets/images/about-img-1.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- About Image End -->

                    <!-- About Image Start -->
                    <div class="about-img-2">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('assets/images/about-img-2.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- About Image End -->

                    <!-- Company Experience Start -->
                    <div class="company-experience">
                        <div class="company-experience-counter">
                            <h2><span class="counter">150</span>+</h2>
                        </div>
                        <div class="company-experience-content">
                            <p>Happy Clients</p>
                        </div>
                    </div>
                    <!-- Company Experience End -->
                </div>
                <!-- About Us Image End -->
            </div>

            <div class="col-lg-6">
                <!-- About Content Start -->
                <div class="about-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">about us</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Reliable MRO Solutions <span>That Keep Industries Running</span>
                        </h2>

                        <p class="wow fadeInUp" data-wow-delay="0.25s">
                            Hanuda Global is a trusted provider of Maintenance, Repair, and Operations (MRO) products, helping industrial businesses maintain smooth and uninterrupted operations. We deliver dependable components that support efficiency, safety, and long-term performance.
                        </p>

                        <p class="wow fadeInUp" data-wow-delay="0.25s">
                            Our extensive product range includes bearings, electric motors, belting systems, roller chains, power transmission equipment, lubricants, and material handling solutions. With a strong focus on product quality and timely delivery, we ensure that your operations continue without delays or disruptions.
                        </p>
                    </div>
                    <!-- Section Title End -->

                    <div class="about-content-body">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <!-- About List Btn Box Start -->
                                <div class="about-list-btn">

                                    <!-- About Content List Start -->
                                    <div class="about-content-list wow fadeInUp" data-wow-delay="0.5s">
                                        <ul>
                                            <li>high-quality industrial products</li>
                                            <li>reliable and timely delivery</li>
                                            <li>efficient Globalchain solutions</li>
                                            <li>dedicated customer support</li>
                                        </ul>
                                    </div>
                                    <!-- About Content List End -->

                                    <!-- About Content Btn Start -->
                                    <div class="about-content-btn wow fadeInUp" data-wow-delay="0.75s">
                                        <a href="{{ url('/contact') }}" class="btn-default">
                                            <span>contact us</span>
                                        </a>
                                    </div>
                                    <!-- About Content Btn End -->

                                </div>
                                <!-- About List Btn Box End -->
                            </div>

                            <div class="col-md-6">
                                <!-- About Content Counter Start -->
                                <div class="genuine-rating-counter">

                                    <!-- About Counter Item Start -->
                                    <div class="about-counter-item">
                                        <div class="about-counter">
                                            <h2><span class="counter">4.9</span></h2>
                                        </div>

                                        <div class="genuine-rating">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="genuine-rating-counter-content">
                                            <p>Trusted by 150+ happy customers</p>
                                        </div>
                                    </div>
                                    <!-- About Counter Item End -->

                                </div>
                                <!-- About Content Counter End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content End -->
            </div>
        </div>
    </div>
</div>
<!-- About Us End -->

<!-- Our Mission Vision Section Start -->
<div class="our-mission-vision">
    <div class="mission-vision-bg parallaxie">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title dark-section">
                        <h3 class="wow fadeInUp">our approach</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Empowering sustainable <span>growth in industry</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Mission Vision Box Start -->
                <div class="mission-vision-box tab-content wow fadeInUp" data-wow-delay="0.25s" id="missionvision">
                    <!-- Sidebar Mission Vision Nav start -->
                    <div class="mission-vision-nav">
                        <ul class="nav nav-tabs" id="mvTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="remodeling-tab" data-bs-toggle="tab" data-bs-target="#mission" type="button" role="tab" aria-selected="true"><img src="{{ asset('assets/images/icon-mission-nav.svg') }}" alt=""> our mission</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="installation-tab" data-bs-toggle="tab" data-bs-target="#vision" type="button" role="tab" aria-selected="false"><img src="{{ asset('assets/images/icon-vision-nav.svg') }}" alt=""> our vision</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="value-tab" data-bs-toggle="tab" data-bs-target="#value" type="button" role="tab" aria-selected="false"><img src="{{ asset('assets/images/icon-value-nav.svg') }}" alt=""> our value</button>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar Mission Vision Nav End -->

                    <!-- Mission Vision Item Start -->
                    <div class="mission-vision-item tab-pane fade show active" id="mission" role="tabpanel">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <!-- Mission Vision Content Start -->
                                <div class="mission-vision-content">
                                    <div class="mission-vision-content-header">
                                        <p>Our mission is to empower industrial operations with reliable MRO solutions that enhance efficiency, reduce downtime, and ensure uninterrupted productivity. We are committed to delivering high-quality components backed by responsive service and consistent supply.</p>
                                    </div>

                                    <div class="mission-vision-content-list">
                                        <ul>
                                            <li>Reliable and high-performance industrial products</li>
                                            <li>Efficient Globalchain and quick fulfillment</li>
                                            <li>Focus on operational continuity and uptime</li>
                                            <li>Customer-first service approach</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Mission Vision Content End -->
                            </div>

                            <div class="col-lg-6">
                                <!-- Mission Vision Image Start -->
                                <div class="mission-vision-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('assets/images/mission-image.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <!-- Mission Vision Image End -->
                            </div>
                        </div>
                    </div>
                    <!-- Mission Vision Item End -->

                    <!-- Mission Vision Item Start -->
                    <div class="mission-vision-item tab-pane fade" id="vision" role="tabpanel">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <!-- Mission Vision Content Start -->
                                <div class="mission-vision-content">
                                    <div class="mission-vision-content-header">
                                        <p>Our vision is to become a leading MRO solutions provider, recognized for quality, trust, and long-term partnerships. We aim to support industries with innovative and dependable solutions that drive sustainable growth and operational excellence.</p>
                                    </div>

                                    <div class="mission-vision-content-list">
                                        <ul>
                                            <li>Be a trusted partner across industries</li>
                                            <li>Continuously expand product and service capabilities</li>
                                            <li>Adopt innovation to improve industrial efficiency</li>
                                            <li>Build long-term value for customers and stakeholders</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Mission Vision Content End -->
                            </div>

                            <div class="col-lg-6">
                                <!-- Mission Vision Image Start -->
                                <div class="mission-vision-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('assets/images/vision-image.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <!-- Mission Vision Image End -->
                            </div>
                        </div>
                    </div>
                    <!-- Mission Vision Item End -->

                    <!-- Mission Vision Item Start -->
                    <div class="mission-vision-item tab-pane fade" id="value" role="tabpanel">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <!-- Mission Vision Content Start -->
                                <div class="mission-vision-content">
                                    <div class="mission-vision-content-header">
                                        <p>Our values define how we operate and serve our customers. We believe in integrity, reliability, and commitment to excellence in every product we Globaland every relationship we build.</p>
                                    </div>

                                    <div class="mission-vision-content-list">
                                        <ul>
                                            <li>Quality you can depend on</li>
                                            <li>Integrity in every transaction</li>
                                            <li>Consistency in Globaland service</li>
                                            <li>Commitment to customer success</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Mission Vision Content End -->
                            </div>

                            <div class="col-lg-6">
                                <!-- Mission Vision Image Start -->
                                <div class="mission-vision-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('assets/images/value-image.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <!-- Mission Vision Image End -->
                            </div>
                        </div>
                    </div>
                    <!-- Mission Vision Item End -->
                </div>
                <!-- Mission Vision Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Mission Vision Section End -->

@endsection
