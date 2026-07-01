 <!-- Footer Start -->
 <footer class="main-footer">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <!-- Footer Header Start -->
                 <div class="footer-header">
                     <!-- Section Title Start -->
                     <div class="section-title dark-section">
                         <h2 class="text-anime-style-2" data-cursor="-opaque">Ready to work with us?</h2>
                         <p>Join us to experience cutting-edge industrial solutions that drive innovation, lasting
                             success.</p>
                     </div>
                     <!-- Section Title End -->

                     <!-- Footer Contact Circle Start -->
                     <div class="footer-contact-circle">
                         <a href="{{url('/contact')}}">
                             <img src="{{ asset('assets/images/contact-now-circle.svg') }}" alt="">
                         </a>
                     </div>
                     <!-- Footer Contact Circle End -->
                 </div>
                 <!-- Footer Header End -->
             </div>

             <div class="col-lg-6 col-md-12">
                 <!-- About Footer Start -->
                 <div class="about-footer">
                     <!-- Footer Logo Start -->
                     <div class="footer-logo">
                         <img src="{{ asset('assets/images/hanuda.png') }}" alt="">
                     </div>
                     <!-- Footer Logo End -->

                     <!-- About Footer Content Start -->
                     <div class="about-footer-content">
                         <p>Supporting industries with Reliable Supply, Quality Products, and Trusted Partner.</p>
                     </div>
                     <!-- About Footer Content End -->

                     <!-- Footer Social Link Start -->
                     <div class="footer-social-links">
                         <ul>
                             <li><a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                             <li><a href="#" title="instagram" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                             <li><a href="#" title="linkedin" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                         </ul>
                     </div>
                     <!-- Footer Social Link End -->
                 </div>
                 <!-- About Footer End -->
             </div>

             <div class="col-lg-2 col-md-4 col-6">
                 <!-- Footer Links Start -->
                 <div class="footer-links">
                     <h3>quick links</h3>
                     <ul>
                         <li><a href="{{ url('/') }}">Home</a></li>
                         <li><a href="{{ url('/about') }}">About Us</a></li>
                         <li><a href="{{ url('/products') }}">Products</a></li>
                         <li><a href="{{ url('/contact') }}">Contact</a></li>
                         <li><a href="{{ url('/terms-conditions') }}">Terms & Conditions</a></li>
                         <li><a href="{{ url('/help') }}">Help</a></li>
                     </ul>
                 </div>
                 <!-- Footer Links End -->
             </div>

             @php
             $products = config('products');
             @endphp

             <div class="col-lg-2 col-md-4 col-6">
                 <!-- Footer Links Start -->
                 <div class="footer-links">
                     <h3>Products</h3>
                     <ul>
                         @foreach($products as $product)
                         <li>
                             <a href="{{ url('/products/'.$product['slug']) }}">
                                 {{ $product['title'] }}
                             </a>
                         </li>
                         @endforeach
                     </ul>
                 </div>
                 <!-- Footer Links End -->
             </div>

             <div class="col-lg-2 col-md-4 col-12">
                 <!-- Footer Links Start -->
                 <div class="footer-links">
                     <h3>Contact</h3>
                     <ul>
                         <!-- Canada Number -->
                         <li style="margin-left: 24px">
                             <a href="tel:+19059150210" class="footer-contact-item">
                                 <img src="{{ asset('assets/images/canada.svg') }}" alt="Canada">
                                 <span> (+1) 905-915-0210</span>
                             </a>
                         </li>
                         <!-- USA Number -->
                         <li style="margin-left: 24px">
                             <a href="tel:+16303392658" class="footer-contact-item">
                                 <img src="{{ asset('assets/images/united-states.svg') }}" alt="USA">
                                 <span>(+1) 630-339-2658</span>
                             </a>
                         </li>
                         <!-- Email -->
                         <li>
                             <a class="email" href="mailto:info@hanudaglobal.com">
                                 info@hanudaglobal.com
                             </a>
                         </li>
                         <!-- Address -->
                         <li>
                             17 McEwan Dr West, Bolton
                             Ontario, Canada L7E1H5
                         </li>
                     </ul>
                 </div>
                 <!-- Footer Links End -->
             </div>
         </div>

         <!-- Footer Copyright Section Start -->
         <div class="footer-copyright">
             <div class="row align-items-center">
                 <div class="col-lg-12">
                     <!-- Footer Copyright Start -->
                     <div class="footer-copyright-text">
                         <p>
                             Crafted with Code & Creativity by{{ " " }}
                             <a href="https://theaditech.com" target="_blank" rel="noopener noreferrer" style="color: #ff9900;">
                                 The AdiTech
                             </a>
                         </p>
                     </div>
                     <!-- Footer Copyright End -->
                 </div>
             </div>
         </div>
         <!-- Footer Copyright Section End -->
     </div>
 </footer>

 <style>
     .footer-contact-item {
         display: flex;
         align-items: center;
         gap: 10px;
         text-decoration: none;
         color: inherit;
         margin-left: -25px;
     }

     .footer-contact-item img {
         width: 24px;
         height: 16px;
         object-fit: cover;
         border-radius: 2px;
     }

     .footer-contact-item span {
         line-height: 1.5;
     }

 </style>
 <!-- Footer End -->
