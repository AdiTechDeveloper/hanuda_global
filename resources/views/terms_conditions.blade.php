@extends('layout.default')
@section('title', 'Terms & Condition')
@section('content')

<!-- Page Header Start -->
<div class="page-header parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Terms & <span>Condition </span></h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Terms & Condition </li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>


<section class="terms-section py-5">
    <div class="container">

        <!-- Page Header -->
        <div class="text-center mb-5">
            <h1 class="fw-bold text-dark">
                Terms & <span class="text-orange">Conditions</span>
            </h1>
            <p class="text-muted">
                Please read these terms carefully before using Hanuda Supply services.
            </p>
        </div>


        <div class="row g-4">

            <!-- Introduction -->
            <div class="col-lg-6">
                <div class="terms-card h-100">
                    <div class="icon-box">
                        <i class="bi bi-info-circle"></i>
                    </div>
                    <h4>Introduction</h4>
                    <p>
                        Welcome to Hanuda Supply. By accessing or using our website,
                        products, or services, you agree to comply with and be bound by
                        these Terms & Conditions.
                    </p>
                </div>
            </div>


            <!-- Use of Website -->
            <div class="col-lg-6">
                <div class="terms-card h-100">
                    <div class="icon-box">
                        <i class="bi bi-globe"></i>
                    </div>
                    <h4>Use of Website</h4>
                    <p>
                        This website is intended for general business and informational
                        purposes only. You agree not to misuse the website or engage in
                        unlawful activities.
                    </p>
                </div>
            </div>


            <!-- Products -->
            <div class="col-lg-6">
                <div class="terms-card h-100">
                    <div class="icon-box">
                        <i class="bi bi-box-seam"></i>
                    </div>
                    <h4>Products & Services</h4>
                    <p>
                        Hanuda Supply provides Maintenance, Repair, and Operations (MRO)
                        products. Product specifications, availability, and details may
                        change without prior notice.
                    </p>
                </div>
            </div>


            <!-- Pricing -->
            <div class="col-lg-6">
                <div class="terms-card h-100">
                    <div class="icon-box">
                        <i class="bi bi-currency-dollar"></i>
                    </div>
                    <h4>Pricing & Quotations</h4>
                    <p>
                        Prices displayed on the website are indicative. Final pricing is
                        confirmed through official quotations. Taxes and shipping charges
                        may apply.
                    </p>
                </div>
            </div>


            <!-- Orders -->
            <div class="col-lg-6">
                <div class="terms-card h-100">
                    <div class="icon-box">
                        <i class="bi bi-cart-check"></i>
                    </div>
                    <h4>Orders & Payments</h4>
                    <p>
                        All orders are subject to acceptance and availability. Payment
                        terms will be communicated during order confirmation.
                    </p>
                </div>
            </div>


            <!-- Intellectual Property -->
            <div class="col-lg-6">
                <div class="terms-card h-100">
                    <div class="icon-box">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                    <h4>Intellectual Property</h4>
                    <p>
                        All website content including text, images, graphics, and logos
                        belong to Hanuda Supply or respective owners and are protected by
                        applicable laws.
                    </p>
                </div>
            </div>


            <!-- Third Party -->
            <div class="col-lg-6">
                <div class="terms-card h-100">
                    <div class="icon-box">
                        <i class="bi bi-building"></i>
                    </div>
                    <h4>Third-Party Brands</h4>
                    <p>
                        Brand names and logos displayed on this website belong to their
                        respective owners and are used only for identification purposes.
                    </p>
                </div>
            </div>


            <!-- Liability -->
            <div class="col-lg-6">
                <div class="terms-card h-100">
                    <div class="icon-box">
                        <i class="bi bi-exclamation-triangle"></i>
                    </div>
                    <h4>Limitation of Liability</h4>
                    <p>
                        Hanuda Supply shall not be liable for direct or indirect damages
                        arising from the use of this website or our products.
                    </p>
                </div>
            </div>


            <!-- Changes -->
            <div class="col-lg-6">
                <div class="terms-card h-100">
                    <div class="icon-box">
                        <i class="bi bi-arrow-repeat"></i>
                    </div>
                    <h4>Changes to Terms</h4>
                    <p>
                        We reserve the right to modify these Terms & Conditions at any
                        time. Continued website usage means acceptance of updated terms.
                    </p>
                </div>
            </div>


            <!-- Contact -->
            <div class="col-lg-6">
                <div class="terms-card h-100">
                    <div class="icon-box">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <h4>Contact Information</h4>
                    <p>
                        For questions regarding these Terms & Conditions, contact us at:
                        <br>
                        <strong class="text-orange">
                            Info@hanudaglobal.com
                        </strong>
                    </p>
                </div>
            </div>


        </div>

    </div>
</section>


<style>

.terms-section{
    background:#f8f8f8;
}


.text-orange{
    color:#FF9900;
}


.terms-card{
    background:#ffffff;
    padding:30px;
    border-radius:15px;
    border-left:5px solid #FF9900;
    box-shadow:0 8px 25px rgba(0,0,0,0.08);
    transition:0.3s ease;
}


.terms-card:hover{
    transform:translateY(-5px);
    box-shadow:0 12px 30px rgba(0,0,0,0.15);
}


.terms-card h4{
    color:#222222;
    font-weight:700;
    margin-bottom:15px;
}


.terms-card p{
    color:#555;
    line-height:1.7;
    margin-bottom:0;
}


.icon-box{
    width:50px;
    height:50px;
    background:#222222;
    color:#FF9900;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:22px;
    margin-bottom:20px;
}


</style>
<!-- Page Header End -->
@endsection
