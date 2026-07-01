    <!-- Header Start -->
    <header class="main-header">
        <div class="topbar">
            <div class="container">
                <div class="row align-items-center">

                    <!-- Logo -->
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="text-center text-md-start">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets/images/hanudalogo.png') }}" alt="Hanuda Global Logo">
                            </a>
                        </div>
                    </div>
                        {{-- site-logo --}}

                    <!-- Contact Information -->
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="topbar-contact-info">

                            <ul>
                                 <li>
                                    <a href="tel:+16472692148">
                                        <div class="country-icon">
                                            <img src="{{ asset('assets/images/canada.svg') }}" alt="Canada">
                                        </div>
                                        <div>
                                            {{-- <span>Canada</span> --}}
                                            <p>(+1) 905-915-0210</p>
                                        </div>
                                    </a>
                                </li>

                                <!-- USA Number -->
                                <li>
                                    <a href="tel:+16303392658">
                                        <div class="country-icon">
                                            <img src="{{ asset('assets/images/united-states.svg') }}" alt="USA">
                                        </div>
                                        <div>
                                          
                                            <p>(+1) 630-339-2658</p>
                                        </div>
                                    </a>
                                </li>


                               


                                <!-- Email -->
                                <li>
                                    <a href="mailto:Info@hanudaglobal.com">

                                        <div class="icon-box">
                                            <i class="fas fa-envelope" alt="Email"></i>
                                        </div>

                                        <div>
                                            {{-- <span>Email</span> --}}
                                            <p>Info@hanudaglobal.com</p>
                                        </div>

                                    </a>
                                </li>


                            </ul>


                            <!-- Quote Button -->
                            <div class="topbar-qoute-btn">
                                <a href="{{ url('/contact') }}" class="btn-default">
                                    <span>Get a Quote</span>
                                </a>
                            </div>


                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('assets/images/new1.png') }}" alt="Logo">
                    </a>
                    <!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/products') }}">Products</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                            </ul>
                        </div>

                        <!-- Header Social Box Start -->
                        <div class="header-social-box d-inline-flex">
                            <!-- Header Social Links Start -->
                            <div class="header-social-links">
                                <ul>

                                    <li><a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
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
    <style>
        .topbar {
            padding: 15px 0;
            background: #fff;
        }


        .site-logo img {
            max-width: 220px;
            height: auto;
        }


        .topbar-contact-info {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 25px;
        }


        .topbar-contact-info ul {
            display: flex;
            align-items: center;
            /* gap: 25px; */
            padding: 0;
            margin: 0;
            list-style: none;
        }


        .topbar-contact-info li a {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            color: #222;
        }


        .country-icon img {
            width: 25px;
            height: 25px;
            object-fit: cover;
        }


        .icon-box img {
            width: 35px;
        }


        .topbar-contact-info span {
            font-size: 15px;
            color: #000;
            display: block;
            font-weight: 600;
        }


        .topbar-contact-info p {
            margin: 0;
            color: #222;
            font-size: 14px;
            font-weight: 600;
            white-space: nowrap;
        }


        .topbar-qoute-btn .btn-default {

            position: relative;
            display: inline-block;
            font-size: 16px;
            font-weight: 600;
            line-height: 0.6em;
            text-transform: capitalize;
            color: var(--primary-color);
            background-color: var(--accent-color);
            border-radius: 10px;
            padding: 2px 40px 2px 2px;
            border: none;
            overflow: hidden;
            transition: all 0.5s ease-in-out
        }



        /* Tablet */
        @media(max-width:991px) {

            .topbar-contact-info {
                margin-top: 20px;
                justify-content: center;
                flex-wrap: wrap;
            }

        }

        @media(max-width:1400px){
            .topbar-contact-info ul li p {
                font-size:13px !important;
            }
        }



        /* Mobile */
        @media(max-width:767px) {

            .topbar{
                display: none !important;
            }
            .site-logo {
                text-align: center;
                margin-bottom: 15px;
            }


            .topbar-contact-info {
                flex-direction: column;
                gap: 15px;
            }


            .topbar-contact-info ul {

                flex-direction: column;
                width: 100%;
                gap: 15px;

            }


            .topbar-contact-info li a {
                justify-content: center;
            }


            .topbar-qoute-btn {
                width: 100%;
                text-align: center;
            }


        }
    </style>
    <!-- Header End -->
