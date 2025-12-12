       <footer class="tj-footer-section footer-2 h5-footer h6-footer section-gap-x">
           <div class="footer-main-area">
               <div class="container">
                   <div class="row justify-content-between">
                       <div class="col-xl-4 col-lg-4 col-md-6">
                           <div class="footer-widget widget-subscribe h6-footer-subscribe wow fadeInUp"
                               data-wow-delay=".3s">
                               <h3 class="title text-anim">
                                   Subscribe to Our Newsletter
                               </h3>
                               <div class="subscribe-form">
                                   <form action="#">
                                       <input type="email" name="email" placeholder="Enter email" />
                                       <button type="submit"><i class="tji-plane"></i></button>
                                       <label for="agree"><input id="agree" type="checkbox" />Agree to our
                                           <a href="#">Terms & Condition?</a></label>
                                   </form>
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-3 col-lg-3 col-md-6">
                           <div class="footer-widget footer-col-2 widget-nav-menu h6-footer-col-2 wow fadeInUp"
                               data-wow-delay=".3s">
                               <h5 class="title">Divisions</h5>
                               <ul>
                                    {{-- @php
                                        dd($footer->services);
                                    @endphp --}}
                                   @foreach ($footer->services as $service)
                                        <li>
                                            <a href="{{ $service->slug ?: url('/' . $$service->slug) }}">{{ $service->title }}</a>
                                        </li>
                                        {{-- href="{{ $subCategory->url ?: url('/' . $subCategory->slug) }}" --}}
                                   @endforeach
                               </ul>
                           </div>
                       </div>
                       <div class="col-xl-2 col-lg-2 col-md-6">
                           <div class="footer-widget footer-col-3 widget-nav-menu h6-footer-col-3 wow fadeInUp"
                               data-wow-delay=".5s">
                               <h5 class="title">About Us</h5>
                               <ul>
                                   <li><a href="/about_us">Company Overview</a></li>
                                   <li><a href="/case-studies">Case Studies</a></li>
                                   <li><a href="/careers">Careers</a></li>
                                   {{-- <li>
                                       <a href="careers.html">Careers <span class="badge">New</span></a>
                                   </li>
                                   <li><a href="#">News</a></li>
                                   <li><a href="#">Feedback</a></li> --}}
                               </ul>
                           </div>
                       </div>
                       <div class="col-xl-3 col-lg-3 col-md-6">
                           <div class="footer-widget widget-contact h6-footer-contact wow fadeInUp"
                               data-wow-delay=".7s">
                               <h5 class="title">Our Office</h5>
                               <div class="footer-contact-info">
                                   @if (!empty($footer->profile))
                                       <div class="contact-item">
                                           <span>{{ $footer->profile->location ?? 'No address available' }}</span>
                                       </div>
                                       <div class="contact-item">
                                           @if (!empty($footer->profile->contact))
                                               <a href="tel:{{ $footer->profile->contact }}">P:
                                                   {{ $footer->profile->contact }}</a>
                                           @endif
                                           @if (!empty($footer->profile->contact_2))
                                               <a href="tel:{{ $footer->profile->contact_2 }}">P:
                                                   {{ $footer->profile->contact_2 }}</a>
                                           @endif
                                           @if (!empty($footer->profile->contact_3))
                                               <a href="tel:{{ $footer->profile->contact_3 }}">P:
                                                   {{ $footer->profile->contact_3 }}</a>
                                           @endif

                                           @if (!empty($footer->profile->email))
                                               <a href="mailto:{{ $footer->profile->email }}">M:
                                                   {{ $footer->profile->email }}</a>
                                           @endif

                                       </div>

                                       <div class="contact-item">
                                           <span>
                                               <i class="tji-clock"></i>
                                               {{ ($footer->profile->open_days ?? '') . ' ' . ($footer->profile->open_time ?? '') }}
                                               {{-- {{ $footer->profile->open_days ?? 'Mon-Fri 10am-10pm' }} --}}
                                           </span>
                                       </div>
                                   @else
                                       <p>No office information available.</p>
                                   @endif
                               </div>
                           </div>
                       </div>

                   </div>
               </div>
           </div>
           <div class="h6-footer-logo-area">
               <div class="container">
                   <div class="row">
                       <div class="col-12">
                           <div class="h6-footer-logo">
                               <a href="index.html" class="wow fadeInUpBig" data-wow-delay=".3s">
                                   <img src="{{ url('frontend_assets/images/logos/logolarge.png') }}" alt="" />
                               </a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="tj-copyright-area-2 h5-footer-copyright h6-footer-copyright">
               <div class="container">
                   <div class="row">
                       <div class="col-12">
                           <div class="copyright-content-area">
                               <div class="copyright-text">
                                   <p>
                                       &copy; 2025 <a href="https://themeforest.net/user/theme-junction/portfolio"
                                           target="_blank">Cdigital</a>
                                       All right reserved
                                   </p>
                               </div>
                               <div class="social-links style-3 style-6">
                                   <ul>
                                       <li>
                                           <a href="https://www.facebook.com/CDigitalPakOfficial" target="_blank"><i
                                                   class="fa-brands fa-facebook-f"></i></a>
                                       </li>
                                       <li>
                                           <a href="https://www.instagram.com/" target="_blank"><i
                                                   class="fa-brands fa-instagram"></i></a>
                                       </li>
                                       <li>
                                           <a href="https://x.com/" target="_blank"><i
                                                   class="fa-brands fa-x-twitter"></i></a>
                                       </li>
                                       <li>
                                           <a href="https://www.linkedin.com/company/cdigital/" target="_blank"><i
                                                   class="fa-brands fa-linkedin-in"></i></a>
                                       </li>
                                   </ul>
                               </div>
                               <div class="copyright-menu">
                                   <ul>
                                       <li><a href="{{ route('policies.page') }}">Privacy Policy</a></li>
                                       <li><a href="{{ route('terms.page') }}">Terms & Conditions</a></li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="bg-shape-1">
               <img src=" {{ url('frontend_assets/images/shape/pattern-2.svg') }}" alt="" />
           </div>
           <div class="bg-shape-2">
               <img src=" {{ url('frontend_assets/images/shape/pattern-3.svg') }}" alt="" />
           </div>
           <div class="bg-shape-3 wow fadeInUpBig" data-wow-delay="1s">
               <img src=" {{ url('frontend_assets/images/shape/footer-bg-shape-blur.svg') }}" alt="" />
           </div>
       </footer>
