@extends('layout.default')
@section('title', 'Home')
@section('content')
<!-- Hero Section Start -->
<div class="hero hero-video">
    <!-- Video Start -->
    <div class="hero-bg-video">
        <!-- Selfhosted Video Start -->
        <!-- <video autoplay muted loop id="myVideo"><source src="images/hero-bg-video.mp4" type="video/mp4"></video> -->
        <video autoplay muted loop id="myVideo">
            {{-- <source src="https://demo.awaikenthemes.com/assets/videos/toplax-video.mp4" type="video/mp4"> --}}
            <source src="{{ asset('assets/images/home1.mp4') }}" type="video/mp4">
        </video>

        <!-- Selfhosted Video End -->

        <!-- Youtube Video Start -->
        <!-- <div id="herovideo" class="player" data-property="{videoURL:'74DWwSxsVSs',containment:'.hero-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div> -->
        <!-- Youtube Video End -->
    </div>
    <!-- Video End -->
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <!-- Hero Content Start -->
                <div class="hero-content">
                    <!-- Section Title Start -->
                    <div class="section-title dark-section">
                        <h3 class="wow fadeInUp">welcome to Hanuda Global Supply & Services INC.</h3>
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Reliable Supply | Quality Products | Trusted Partner </h1>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Hanuda Global delivers dependable Maintenance,
                            Repair, and Operations solutions tailored for industrial environments. With a strong
                            portfolio of mechanical, electrical, and power transmission products, we help businesses
                            reduce downtime, improve efficiency, and maintain operational excellence. </p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Hero Button Start -->
                    <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                        <a href="{{ url('/about') }}" class="btn-default"><span>explore more</span></a>
                    </div>
                    <!-- Hero Button End -->
                </div>
                <!-- Hero Content End -->
            </div>

            <div class="col-lg-12">
                <!-- Excellence Innovating List Start -->
                <div class="excellence-innovating-list wow fadeInUp" data-wow-delay="0.6s">
                    <ul>
                        <li>Industrial MRO Solutions.</li>
                        <li>Power Transmission Components</li>
                        <li>Electrical & Mechanical Systems</li>
                    </ul>
                </div>
                <!-- Excellence Innovating List End -->
            </div>
        </div>
    </div>
</div>
<!-- Hero Section End -->

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
                            <img src="{{ asset('assets/images/about-img-2.png') }}" alt="">
                        </figure>
                    </div>
                    <!-- About Image End -->

                    <!-- Company Experience Start -->
                    <div class="company-experience">
                        <div class="company-experience-counter">
                            <h2><span class="counter">25</span>+</h2>
                        </div>
                        <div class="company-experience-content">
                            <p>years of experience</p>
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
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Engineering Reliability For 
                            <span>The Industries That Drive The World</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Hanuda Global is a trusted supplier of
                            Maintenance, Repair, and Operations (MRO) products, supporting industrial facilities with
                            dependable components essential for daily operations. </p>
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
                                            <li>Complete MRO Solutions</li>
                                            <li>Quality Industrial Products</li>
                                            <li>Minimized Equipment Downtime</li>
                                            <li>Expert Technical Support</li>
                                        </ul>
                                    </div>
                                    <!-- About Content List End -->

                                    <!-- About Content Btn Start -->
                                    <div class="about-content-btn wow fadeInUp" data-wow-delay="0.75s">
                                        <a href="{{ url('/about') }}" class="btn-default"><span>learn more</span></a>
                                    </div>
                                    <!-- About Content Btn End -->
                                </div>
                                <!-- About List Btn Box End -->
                            </div>

                            {{-- <div class="col-md-6">
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
                                                <p>15.5K genuine rating</p>
                                            </div>
                                        </div>
                                        <!-- About Counter Item End -->
                                    </div>
                                    <!-- About Content Counter End -->
                                </div> --}}
                        </div>
                    </div>
                </div>
                <!-- About Content End -->
            </div>
        </div>
    </div>
</div>
<!-- About Us End -->

<!-- Our Service Start -->
<div class="our-services parallaxie">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title dark-section">
                    <h3 class="wow fadeInUp">services</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Complete Industrial Solutions <span>Built Around Reliability</span></h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Title Content Start -->
                <div class="section-title-content dark-section wow fadeInUp" data-wow-delay="0.25s">
                    <p>With expertise in industrial supply solutions, Hanuda Global supports businesses with
                        high-quality components, dependable sourcing, and technical solutions that drive productivity,
                        reliability, and long-term operational excellence.</p>
                </div>
                <!-- Section Title Content End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Service End -->

<!-- Our Service List Start -->
<div class="our-services-list">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Services List Box Start -->
                <div class="services-list-box">
                    <!-- Service Item Start -->
                    <div class="service-item">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-service-1.svg') }}" alt="">
                        </div>

                        <div class="service-body">
                            <h3>Bearings & Motion Control Products</h3>
                        </div>

                        <div class="service-footer">
                            <a href="{{ url('/products') }}" class="service-btn">
                                <img src="{{ asset('assets/images/arrow-dark.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- Service Item End -->

                    <!-- Service Item Start -->
                    <div class="service-item">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-service-2.svg') }}" alt="">
                        </div>

                        <div class="service-body">
                            <h3>
                                Electrical Products & Drives</h3>
                        </div>

                        <div class="service-footer">
                            <a href="{{ url('/products') }}" class="service-btn">
                                <img src="{{ asset('assets/images/arrow-dark.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- Service Item End -->

                    <!-- Service Item Start -->
                    <div class="service-item">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-service-3.svg') }}" alt="">
                        </div>

                        <div class="service-body">
                            <h3>Mechanical & Power Transmission Products</h3>
                        </div>

                        <div class="service-footer">
                            <a href="{{ url('/products') }}" class="service-btn">
                                <img src="{{ asset('assets/images/arrow-dark.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- Service Item End -->

                    <!-- Service Item Start -->
                    <div class="service-item">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-service-4.svg') }}" alt="">
                        </div>

                        <div class="service-body">
                            <h3>
                                Industrial Belting Products</h3>
                        </div>

                        <div class="service-footer">
                            <a href="{{ url('/products') }}" class="service-btn">
                                <img src="{{ asset('assets/images/arrow-dark.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
                <!-- Services List Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Service List End -->

<!-- Our Story Start -->
<div class="our-story">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">our story</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Building Industrial Reliability Through
                        <span> Quality & Commitment</span>
                    </h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Our Story Header Image Start -->
                <div class="our-story-header-img">
                    <figure class="reveal image-anime">
                        <img src="{{ asset('assets/images/our-story-header-img-1.jpg') }}" alt="">
                    </figure>

                    <figure class="reveal image-anime">
                        <img src="{{ asset('assets/images/our-story-header-img-2.jpg') }}" alt="">
                    </figure>
                </div>
                <!-- Our Story Header Image End -->
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Our Story Image Start -->
                <div class="our-story-img">
                    <figure class="reveal image-anime">
                        <img src="{{ asset('assets/images/our-story-img.jpg') }}" alt="">
                    </figure>
                </div>
                <!-- Our Story Image End -->
            </div>

            <div class="col-lg-6">
                <div class="our-story-content">
                    <div class="our-story-content-body">
                        <p>We specialize in revolutionizing industries by delivering innovative, efficient solutions
                            that enhance productivity and streamline processes. Through advanced technologies, precision
                            engineering, and sustainable practices.</p>
                    </div>

                    <div class="our-story-counters">
                        <!-- Our Story Counter Start -->
                        <div class="our-story-counter">
                            <h3><span class="counter">150</span>+</h3>
                            <p>Happy Clients</p>
                        </div>
                        <!-- Our Story Counter End -->

                        <!-- Our Story Counter Start -->
                        <div class="our-story-counter">
                            <h3><span class="counter">15</span>+</h3>
                            <p>Employees</p>
                        </div>
                       
                    </div>

                    <!-- Our Story Intro Video Start -->
                    {{-- <div class="our-story-intro-video">
                            <!-- Our Story Client Image Start -->
                            <div class="our-story-client-img">
                                <!-- Client Image Start -->
                                <div class="client-image">
                                    <figure class="image-anime reveal">
                                        <img src="{{ asset('assets/images/story-client-img-1.jpg')}}" alt="">
                    </figure>
                </div>
                <!-- Client Image End -->

                <!-- Client Image Start -->
                <div class="client-image">
                    <figure class="image-anime reveal">
                        <img src="{{ asset('assets/images/story-client-img-2.jpg') }}" alt="">
                    </figure>
                </div>
                <!-- Client Image End -->

                <!-- Client Image Start -->
                <div class="client-image">
                    <figure class="image-anime reveal">
                        <img src="{{ asset('assets/images/story-client-img-3.jpg')}}" alt="">
                    </figure>
                </div>
                <!-- Client Image End -->
            </div>
            <!-- Our Story Client Image End -->

            <!-- Intro Video Box Start -->
            <div class="intro-video-box">
                <!-- Video Play Button Start -->
                <div class="video-play-button">
                    <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video" data-cursor-text="Play">
                        <i class="fa-solid fa-play"></i>
                    </a>
                    <p>watch intro</p>
                </div>
                <!-- Video Play Button End -->
            </div>
            <!-- Intro Video Box End -->
        </div> --}}
        
    </div>
</div>
</div>
</div>
</div>
<!-- Our Story End -->

  <!-- What We Do Start -->
     <div class="what-we-do">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <!-- What We Do Content Start -->
                    <div class="what-we-do-content">
                        <!-- Section Title Start -->
                        <div class="section-title dark-section">
                            <h3 class="wow fadeInUp">what we do</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Supporting Industries With <span>Smarter Supply Solutions</span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- What We Do List Start -->
                        <div class="what-we-do-list">
                            <div class="what-we-do-list-box-1">
                                <!-- What We Do Item Start -->
                                <div class="what-we-do-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/icon-who-we-do-1.svg') }}" alt="">
                                    </div>
                                    <div class="what-we-item-content">
                                        <h3>Quality Control</h3>
                                        <p>Reliable industrial products from trusted brands.</p>
                                    </div>
                                </div>
                                <!-- What We Do Item End -->

                                <!-- What We Do Item Start -->
                                <div class="what-we-do-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/icon-who-we-do-2.svg') }}" alt="">
                                    </div>
                                    <div class="what-we-item-content">
                                        <h3>MRO Expertise</h3>
                                        <p>Solutions designed for maintenance and operational efficiency.</p>
                                    </div>
                                </div>
                                <!-- What We Do Item End -->
                            </div> 
                            
                            <div class="what-we-do-list-box-2">
                                <!-- What We Do Item Start -->
                                <div class="what-we-do-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/icon-who-we-do-3.svg') }}" alt="">
                                    </div>
                                    <div class="what-we-item-content">
                                        <h3>Industry Support</h3>
                                        <p>Helping businesses improve performance and reduce downtime.</p>
                                    </div>
                                </div>
                                <!-- What We Do Item End -->

                                <!-- What We Do Item Start -->
                                <div class="what-we-do-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/images/icon-who-we-do-4.svg') }}" alt="">
                                    </div>
                                    <div class="what-we-item-content">
                                        <h3>On-Time Delivery</h3>
                                        <p>Dependable supply chain support when you need it most.</p>
                                    </div>
                                </div>
                                <!-- What We Do Item End -->
                            </div>                                         
                        </div>
                        <!-- What We Do List Start -->

                        <!-- What We Do Footer Start -->
                        {{-- <div class="what-we-do-footer">
                            <p>Lorem ipsum is a placeholder text commonly used <span>to demonstrate</span></p>
                        </div> --}}
                        <!-- What We Do Footer End -->
                    </div>
                    <!-- What We Do Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- What We Do Image Start -->
                    <div class="what-we-do-image">
                        <figure class="image-anime">
                            <img src="{{ asset('assets/images/what-we-do-image.jpg') }}" alt="">
                        </figure>

                        <!-- Contact Now Circle Start -->
                        <div class="contact-now-circle">
                              <a href="{{url('/contact')}}">
                            <img src="{{ asset('assets/images/contact-now-circle.svg') }}" alt="">
                              </a>
                        </div>
                        <!-- Contact Now Circle End -->
                    </div>      
                    <!-- What We Do Image End -->              
                </div>
            </div>
        </div>
     </div>
    <!-- What We Do End -->



<!-- Our Process Section Start -->
<div class="our-process">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">our process</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">How We Support Your Operations <span>Through
                            Reliable MRO Supply</span></h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Title Content Start -->
                <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                    <p>At Hanuda Global, we focus on understanding your maintenance and operational requirements to
                        deliver the right MRO products at the right time.</p>
                </div>
                <!-- Section Title Content End -->
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Our Process Image Start -->
                <div class="our-process-image">
                    <figure class="image-anime reveal">
                        <img src="{{ asset('assets/images/our-process-image.jpg') }}" alt="">
                    </figure>
                </div>
                <!-- Our Process Image End -->
            </div>

            <div class="col-lg-6">
                <!-- Process Step Box Start -->
                <div class="process-steps-box">
                    <!-- Process Step Item Start -->
                    <div class="process-step-item wow fadeInUp">
                        <div class="process-step-no">
                            <h2>01</h2>
                        </div>
                        <div class="process-step-content">
                            <h3>Requirement Analysis</h3>
                            <p>Understanding your industrial needs to deliver suitable MRO solutions.</p>
                        </div>
                    </div>
                    <!-- Process Step Item End -->

                    <!-- Process Step Item Start -->
                    <div class="process-step-item active wow fadeInUp" data-wow-delay="0.25s">
                        <div class="process-step-no">
                            <h2>02</h2>
                        </div>
                        <div class="process-step-content">
                            <h3>Quality Product Sourcing</h3>
                            <p>Providing reliable components from trusted brands for maximum performance.</p>
                        </div>
                    </div>
                    <!-- Process Step Item End -->

                    <!-- Process Step Item Start -->
                    <div class="process-step-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="process-step-no">
                            <h2>03</h2>
                        </div>
                        <div class="process-step-content">
                            <h3>Efficient Supply Support</h3>
                            <p>Ensuring timely delivery to minimize downtime and maintain productivity.</p>
                        </div>
                    </div>
                    <!-- Process Step Item End -->
                </div>
                <!-- Process Step Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Process Section End -->



<!-- Our Testimonial Section Start -->
<div class="our-testimonial">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Our Testimonial Image Start -->
                <div class="our-testimonial-image">
                    <figure class="image-anime reveal">
                        <img src="{{ asset('assets/images/background.webp') }}" alt="">
                    </figure>
                </div>
                <!-- Our Testimonial Image End -->
            </div>

            <div class="col-lg-6">
                <!-- Our Testimonial Content Start -->
                <div class="our-testimonial-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Our client say</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">What our satisfied clients <span>are
                                saying</span></h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>

                                        <div class="testimonial-content">
                                            <p>"We have been sourcing a wide range of MRO products from Hanuda Global
                                                for our
                                                engineering and maintenance activities. Their product range,
                                                availability, and
                                                responsiveness stand out. The team is knowledgeable and ensures we
                                                receive the right
                                                components for our applications, which has significantly reduced
                                                equipment downtime and
                                                improved overall maintenance reliability."</p>
                                        </div>

                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('assets/images/author-1.jpg') }}" alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>Maintenance Head</h3>
                                                <p>Industrial Operations</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>

                                        <div class="testimonial-content">
                                            <p>"Hanuda Global has proven to be a reliable supplier for our industrial
                                                MRO requirements.
                                                Their ability to support urgent maintenance needs, combined with
                                                consistent supply and
                                                professional service, has made them a trusted partner. We value their
                                                commitment to
                                                quality and their understanding of industrial operations."</p>
                                        </div>

                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('assets/images/author-2.jpg') }}" alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>Procurement Manager</h3>
                                                <p>Industrial Operations</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                            </div>
                            <div class="testimonial-btn">
                                <div class="testimonial-button-prev"></div>
                                <div class="testimonial-button-next"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->
                </div>
                <!-- Our Testimonial Content End -->
            </div>

            <div class="col-lg-12">
    <div class="testimonial-company-slider">
        <div class="swiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="company-logo">
                        <img src="{{ asset('assets/images/client_icon_1.png') }}" alt="Client Logo">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="company-logo">
                        <img src="{{ asset('assets/images/client_icon_2.png') }}" alt="Client Logo">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="company-logo">
                        <img src="{{ asset('assets/images/client_icon_8.png') }}" alt="Client Logo">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="company-logo">
                        <img src="{{ asset('assets/images/client_icon_4.png') }}" alt="Client Logo">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="company-logo">
                        <img src="{{ asset('assets/images/client_icon_5.png') }}" alt="Client Logo">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="company-logo">
                        <img src="{{ asset('assets/images/client_icon_6.png') }}" alt="Client Logo">
                    </div>
                </div>
                 <div class="swiper-slide">
                    <div class="company-logo">
                        <img src="{{ asset('assets/images/elecon.webp') }}" alt="Client Logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="company-logo">
                        <img src="{{ asset('assets/images/weg1.png') }}" alt="Client Logo">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
<!-- Our Testimonial Section End -->

<!-- Our Blog Section Start -->
{{-- <div class="our-blog">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-5">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">latest blog</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Insights from our <span>latest blogs</span>
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-7">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                        <p>Stay updated with the latest trends, innovations, and expert insights in the manufacturing and
                            industrial sectors</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <figure>
                                <a href="https://www.iata.org/en/publications/newsletters/iata-knowledge-hub/optimizing-decisions-amid-aviation-supply-chain-turmoil/" target="_blank" class="image-anime" data-cursor-text="View">
                                    <img src="{{ asset('assets/images/blog2.webp') }}" alt="">
</a>
</figure>
</div>
<!-- Post Featured Image End -->

<!-- Post Item Body Start -->
<div class="post-item-body">
    <!-- Post Item Content Start -->
    <div class="post-item-content">
        <h2><a href="https://www.iata.org/en/publications/newsletters/iata-knowledge-hub/optimizing-decisions-amid-aviation-supply-chain-turmoil/" target="_blank">
                IATA Knowledge Hub
                Learn, apply, improve</a></h2>
    </div>
    <!-- Post Item Content End -->

    <!-- Post Item Button Start -->
    <div class="post-item-btn">
        <a href="https://www.iata.org/en/publications/newsletters/iata-knowledge-hub/optimizing-decisions-amid-aviation-supply-chain-turmoil/" target="_blank"><img src="{{ asset('assets/images/arrow-white.svg') }}" alt=""></a>
    </div>
    <!-- Post Item Button End -->
</div>
<!-- Post Item Body End -->
</div>
<!-- Post Item End -->
</div>

<div class="col-md-6">
    <!-- Post Item Start -->
    <div class="post-item wow fadeInUp">
        <!-- Post Featured Image Start-->
        <div class="post-featured-image">
            <figure>
                <a href="https://www.klsescreener.com/v2/news/view/1723617/turbulence-proof-asia-s-business-jet-mro-market-defies-global-headwinds" target="_blank" class="image-anime" data-cursor-text="View">
                    <img src="{{ asset('assets/images/blog1.jpg') }}" alt="">
                </a>
            </figure>
        </div>
        <!-- Post Featured Image End -->

        <!-- Post Item Body Start -->
        <div class="post-item-body">
            <!-- Post Item Content Start -->
            <div class="post-item-content">
                <h2><a href="https://www.klsescreener.com/v2/news/view/1723617/turbulence-proof-asia-s-business-jet-mro-market-defies-global-headwinds" target="_blank">KLSC Screener</a>
                </h2>
            </div>
            <!-- Post Item Content End -->

            <!-- Post Item Button Start -->
            <div class="post-item-btn">
                <a href="https://www.klsescreener.com/v2/news/view/1723617/turbulence-proof-asia-s-business-jet-mro-market-defies-global-headwinds" target="_blank"><img src="{{ asset('assets/images/arrow-white.svg') }}" alt=""></a>
            </div>
            <!-- Post Item Button End -->
        </div>
        <!-- Post Item Body End -->
    </div>
    <!-- Post Item End -->
</div>
</div>
</div>
</div> --}}
<!-- Our Blog Section End -->



<!-- Mirrored from html.awaikenthemes.com/toplax/index-video.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jun 2026 07:17:49 GMT -->

<style>
    .company-logo{
    height:150px;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:10px;
}


.company-logo img{

    width:300px !important ;
    max-width:100%;
    height:100px;
    object-fit:contain;

    /* Default black effect */
    filter: grayscale(100%) brightness(0);

    transition:all 0.4s ease;

}


/* Hover show original color */

.company-logo:hover img{

    filter:none;
    transform:scale(1.08);

}
</style>
@endsection
