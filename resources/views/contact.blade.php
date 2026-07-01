@extends('layout.default')
@section('title', 'Contact')
@section('content')

<div class="page-header parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Contact <span>us</span></h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">contact us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-contact-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="contact-information">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">contact us</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Get in touch <span>with us</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Reach out for any inquiries, support, or to discuss how we can meet your industrial needs.</p>
                    </div>
                    <div class="contact-info-box">
                        <div class="contact-info-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-phone.svg') }}" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>contact</h3>
                                <ul style="margin-left: -5px">

                                    <!-- Canada Number -->
                                    <li>
                                        <a href="tel:+19059150210" class="footer-contact-item">
                                            <img src="{{ asset('assets/images/canada.svg') }}" alt="Canada">
                                            <span> (+1) 905-915-0210</span>
                                        </a>
                                    </li>


                                    <!-- USA Number -->
                                    <li>
                                        <a href="tel:+16303392658" class="footer-contact-item">
                                            <img src="{{ asset('assets/images/united-states.svg') }}" alt="USA">
                                            <span>(+1) 630-339-2658</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-mail.svg') }}" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>Email</h3>
                                <p>Info@hanudaglobal.com</p>
                            </div>
                        </div>
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-location.svg') }}" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>Our Address</h3>
                                <p>17 McEwan Dr West, Bolton Ontario, Canada L7E1H5</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="contact-us-form">
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Contact <span>me</span></h2>
                    </div>

                    <div class="contact-form">
                        <form id="contactForm" action="{{ route('contact.submit') }}" method="POST" class="wow fadeInUp" data-wow-delay="0.5s">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="first_name" class="form-control" id="fname" placeholder="Enter first name" required>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="last_name" class="form-control" id="lname" placeholder="Enter last name" required>
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your e-mail" required>
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter your phone no." required>
                                </div>

                                <div class="form-group col-md-12 mb-5">
                                    <textarea name="message" class="form-control" id="message" rows="4" placeholder="Write Message" required></textarea>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn-default" id="submitBtn"><span>submit message</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="google-map">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="google-map-iframe">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2876.4348560124355!2d-79.74205122340323!3d43.86749033854157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b3d6cb50db1ab%3A0xe5a3c9be0272ef5!2s17%20McEwan%20Dr%20W%2C%20Bolton%2C%20ON%20L7E%201H5%2C%20Canada!5e0!3m2!1sen!2s!4v1710000000000!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    $(document).ready(function() {
        toastr.options = {
            "closeButton": true
            , "progressBar": true
            , "positionClass": "toast-top-right"
            , "timeOut": "5000"
        };

        $('#contactForm').off('submit').on('submit', function(e) {
            e.preventDefault();
            e.stopImmediatePropagation();

            let form = $(this);
            let actionUrl = form.attr('action');
            let formData = form.serialize();
            let submitBtn = $('#submitBtn');

            if (submitBtn.prop('disabled')) {
                return false;
            }

            submitBtn.prop('disabled', true).css('pointer-events', 'none').text('Sending...');

            $.ajax({
                url: actionUrl
                , type: 'POST'
                , data: formData
                , success: function(response) {
                    toastr.success(response.message || 'Message sent successfully!');
                    form[0].reset();
                }
                , error: function(xhr) {
                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            toastr.error(value[0]);
                        });
                    } else {
                        let errorMsg = xhr.responseJSON ? (xhr.responseJSON.error || xhr.responseJSON.message) : 'Something went wrong. Please try again.';
                        toastr.error(errorMsg);
                    }
                }
                , complete: function() {
                    submitBtn.prop('disabled', false).css('pointer-events', 'auto').html('<span>submit message</span>');
                }
            });
        });
    });

</script>
@endsection
