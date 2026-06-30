@extends('layout.default')
@section('title', 'Help')
@section('content')

<div class="page-header parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Help & Support</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">help</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>

<section class="support-section py-5">

    <div class="container">

        <!-- Header -->
        <div class="text-center mb-5">
            <h1 class="fw-bold">
                Help & <span class="text-orange">Support</span>
            </h1>
            <p class="text-muted">
                Our team is here to assist you with product selection,
                technical guidance, quotations, and industrial supply support.
            </p>
        </div>


        <div class="row g-4">


            <!-- Product Assistance -->
            <div class="col-lg-6">
                <div class="support-card h-100">

                    <div class="icon-box">
                        <i class="bi bi-box-seam"></i>
                    </div>

                    <h4>Product Assistance</h4>

                    <p>
                        Our team can help you select the right MRO products
                        including bearings, motors, power transmission components,
                        lubricants, and material handling solutions.
                    </p>

                </div>
            </div>



            <!-- Quote -->
            <div class="col-lg-6">
                <div class="support-card h-100">

                    <div class="icon-box">
                        <i class="bi bi-file-earmark-text"></i>
                    </div>

                    <h4>Requesting a Quote</h4>

                    <p>
                        To request a quotation, use the Get a Quote option on our
                        website or contact us directly with your product requirements.
                    </p>

                </div>
            </div>



            <!-- Order Support -->
            <div class="col-lg-6">
                <div class="support-card h-100">

                    <div class="icon-box">
                        <i class="bi bi-cart-check"></i>
                    </div>

                    <h4>Order Support</h4>

                    <p>
                        For order-related inquiries such as availability, delivery
                        timelines, or order status, contact our support team with
                        relevant details.
                    </p>

                </div>
            </div>




            <!-- Technical Support -->
            <div class="col-lg-6">
                <div class="support-card h-100">

                    <div class="icon-box">
                        <i class="bi bi-gear"></i>
                    </div>

                    <h4>Technical Support</h4>

                    <p>
                        We provide assistance in identifying suitable products or
                        replacements based on your operational and maintenance needs.
                    </p>

                </div>
            </div>



            <!-- Returns -->
            <div class="col-lg-6">
                <div class="support-card h-100">

                    <div class="icon-box">
                        <i class="bi bi-arrow-left-right"></i>
                    </div>

                    <h4>Returns & Issues</h4>

                    <p>
                        If there are any issues with received products, notify us
                        promptly so we can provide effective assistance.
                    </p>

                </div>
            </div>



            <!-- Business Inquiry -->
            <div class="col-lg-6">
                <div class="support-card h-100">

                    <div class="icon-box">
                        <i class="bi bi-building"></i>
                    </div>

                    <h4>Business Inquiries</h4>

                    <p>
                        For bulk orders, partnerships, or long-term supply
                        arrangements, contact us for customized industrial solutions.
                    </p>

                </div>
            </div>


        </div>



        <!-- Contact Section -->

        <div class="contact-support mt-5">

            <div class="row align-items-center">

                <div class="col-lg-8">

                    <h3>
                        Contact <span class="text-orange">Support</span>
                    </h3>

                    <p>
                        Our support team is ready to assist you with product
                        information, quotations, and industrial supply requirements.
                    </p>

                </div>


                <div class="col-lg-4">

                    <div class="contact-box">

                        <p>
                            <i class="bi bi-envelope"></i>
                            Info@hanudaglobal.com
                        </p>

                        <p>
                            <i class="bi bi-telephone"></i>
                           (+1) 630 339-2658
                        </p>

                          <p>
                            <i class="bi bi-telephone"></i>
                           (+1) 905-915-0210

                        </p>


                    </div>

                </div>

            </div>

        </div>


    </div>

</section>




<style>

.support-section{
    background:#f7f7f7;
}


.text-orange{
    color:#FF9900;
}


.support-card{

    background:#fff;
    padding:30px;
    border-radius:15px;
    border-left:5px solid #FF9900;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
    transition:.3s;

}


.support-card:hover{

    transform:translateY(-5px);
    box-shadow:0 15px 35px rgba(0,0,0,.15);

}


.support-card h4{

    color:#222;
    font-weight:700;
    margin-bottom:15px;

}


.support-card p{

    color:#555;
    line-height:1.7;

}



.icon-box{

    width:55px;
    height:55px;
    background:#222;
    color:#FF9900;
    border-radius:50%;

    display:flex;
    justify-content:center;
    align-items:center;

    font-size:24px;
    margin-bottom:20px;

}



.contact-support{

    background:#222;
    color:white;
    padding:40px;
    border-radius:20px;

}


.contact-support h3{

    color:white;

}


.contact-box{

    background:#FF9900;
    color:#222;
    padding:20px;
    border-radius:12px;
    font-weight:600;

}


.contact-box p{

    margin-bottom:10px;

}

</style>
@endsection
