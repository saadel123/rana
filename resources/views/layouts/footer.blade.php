 <!-- ======= Footer ======= -->
 <style>
     .text-facebook {
         color: #3b5998;
         /* Facebook Blue */
     }

     .text-instagram {
         color: #005099;
         /* Instagram Gradient */
     }

     .footer .footer-top .social-links a {
         font-size: 30px;
     }
 </style>
 <footer id="footer" class="footer">
     <div class="footer-top">
         <div class="container">
             <div class="row gy-4">
                 <div class="col-lg-4 col-md-12 footer-info d-flex justify-content-center align-self-center">
                     <a href="/" class="logo">
                         <img src="{{ asset('assets/img/logo-footer.png') }}" alt="" />
                     </a>
                 </div>
                 <div class="col-lg-4 col-6 footer-links">
                     <h4>{{ __('partials.navbar.pages') }}</h4>
                     <ul>
                         <li>
                             <i class="bi bi-chevron-right"></i> <a
                                 href="{{ url('/qui-sommes-nous') }}">{{ __('partials.navbar.qui-sommes-nous') }}</a>
                         </li>
                         <li>
                             <i class="bi bi-chevron-right"></i> <a
                                 href="{{ url('/produits') }}">{{ __('partials.navbar.produits') }}</a>
                         </li>
                         <li>
                             <i class="bi bi-chevron-right"></i> <a
                                 href="{{ url('/nos-atouts') }}">{{ __('partials.navbar.nos_atouts') }}</a>
                         </li>
                         <li>
                             <i class="bi bi-chevron-right"></i>
                             <a href="{{ route('distribution.index') }}">{{ __('partials.navbar.distribution') }}</a>
                         </li>
                         <li>
                             <i class="bi bi-chevron-right"></i>
                             <a href="{{ route('blogs.index') }}">{{ __('partials.navbar.blog') }}</a>
                         </li>
                         <li>
                             <i class="bi bi-chevron-right"></i>
                             <a href="{{ url('/contactez-nous') }}">{{ __('partials.navbar.contact') }}</a>
                         </li>
                     </ul>
                 </div>
                 <div class="col-lg-4 col-6 footer-links">
                     <h4>{{ __('partials.navbar.social-media') }}</h4>
                     <div class="social-links mt-3">
                         <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                         <a href="#" target="_blank" class="facebook"><i
                                 class="bi bi-facebook "></i></a>
                         <a href="#" target="_blank" class="instagram"><i
                                 class="bi bi-instagram "></i></a>
                         <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                     </div>
                 </div>
                    {{-- <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                     <h4>{{ __('partials.navbar.map') }}</h4>
                     <div>
                         <iframe
                             src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3324.276279283151!2d-7.649082884484539!3d33.57217525032214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7d322193f9f61%3A0x7ea999c2e7a9240!2sDirect%20Invest!5e0!3m2!1sen!2sma!4v1676473490487!5m2!1sen!2sma"
                             width="70%" height="200" style="border: 3px solid #3e6493;" allowfullscreen=""
                             loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                 </div> --}}
             </div>
         </div>
     </div>
 </footer>
 <!-- End Footer -->
