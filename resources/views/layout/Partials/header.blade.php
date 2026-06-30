    <!-- Header Start -->
    <header class="main-header">
        <div class="topbar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="site-logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets/images/logo1.png') }}" alt="Logo">
                            </a>
                        </div>
                        <!-- Logo End -->
                    </div>

                    <div class="col-lg-9 col-md-12">
                        <!-- Topbar Contact Information Start -->
                        <div class="topbar-contact-info">
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="icon-box">
                                            <img src="{{ asset('assets/images/icon-phone.svg') }}" alt="">
                                        </div>
                                        <p>+1 (630) 339-2658 </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="icon-box">
                                            <img src="{{ asset('assets/images/icon-mail.svg') }}" alt="">
                                        </div>
                                        <p> Info@hanudaglobal.com</p>
                                    </a>
                                </li>
                            </ul>
                            <!-- Topbar Qoute Button Start -->
                            <div class="topbar-qoute-btn">
                                <a href="{{ url('/contact') }}" class="btn-default"><span>Get a quote</span></a>
                            </div>
                            <!-- Topbar Qoute Button End -->
                        </div>
                        <!-- Topbar Contact Information End -->
                    </div>
                </div>
            </div>
        </div>

        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
                    </a>
                    <!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/products') }}">Products</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                            </ul>
                        </div>

                        <!-- Header Social Box Start -->
                        <div class="header-social-box d-inline-flex">
                            <!-- Header Social Links Start -->
                            <div class="header-social-links">
                                <ul>

                                    <li><a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <!-- Header Social Links End -->
                        </div>
                        <!-- Header Social Box End -->
                    </div>
                    <!-- Main Menu End -->
                    <div class="navbar-toggle"></div>
                </div>
            </nav>
            <div class="responsive-menu"></div>
        </div>
    </header>
    <!-- Header End -->
