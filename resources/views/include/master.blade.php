<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="theme-color" content="#003366" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      Cdigital | ICT,Security,Energy,Software ,Hydromet,Mines & Minerals
    </title>
 
    <!-- LCP Image Preload -->
    @if (!empty($data->slider) && isset($data->slider[0]))
    <link rel="preload" as="image" href="/{{ $data->slider[0]->video ?? 'assets/images/default-hero.jpg' }}" fetchpriority="high">
    @endif

    <!-- Critical CSS inline -->
    <style>
    .banner{position:relative;height:100vh;overflow:hidden}
    .lcp-hero-image{position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;z-index:1}
    .lcp-content{position:relative;z-index:2;height:100vh;display:flex;align-items:center;background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5))}
    .slider-title{font-size:clamp(2rem,5vw,4rem);margin:0 0 1rem 0;font-weight:bold;line-height:1.2;color:white}
    .container{max-width:1200px;margin:0 auto;padding:0 15px}
    *{box-sizing:border-box;margin:0;padding:0}
    body{font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,sans-serif;line-height:1.6}
    .navbar{position:absolute;top:0;width:100%;z-index:1000;padding:1rem 0;transition:all 0.3s}
    .navbar-brand img{height:40px}
    .nav-link{color:#fff;text-decoration:none;padding:0.5rem 1rem}
    .text-white{color:#fff!important}
    </style>

    
     <link rel="icon" type="image/png" href="{{ url('assets/images/favicon.png')}}" />
    
    <!-- Defer non-critical CSS -->
    <link rel="preload" href="{{ url('assets/lib/bootstrap/bootstrap.min.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ url('assets/lib/bootstrap/bootstrap.min.css')}}"></noscript>
    
    <link rel="preload" href="{{ url('css/fontawesome-minimal.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ url('css/fontawesome-minimal.css')}}"></noscript>
    <link rel="preload" href="{{ url('assets/lib/slick-1.8.1/slick/slick.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ url('assets/lib/slick-1.8.1/slick/slick.css')}}"></noscript>

    <link
      rel="preload"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
      as="style" onload="this.onload=null;this.rel='stylesheet'"
    />
    <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"></noscript>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
    <link rel="preload" href="{{ url('assets/lib/slick-1.8.1/slick/slick-theme.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ url('assets/lib/slick-1.8.1/slick/slick-theme.css')}}"></noscript>
    
    <link rel="preload" href="{{ url('assets/lib/animate/animate.min.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ url('assets/lib/animate/animate.min.css')}}"></noscript>
    
    <link rel="preload" href="{{ url('assets/css/main.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ url('assets/css/main.css')}}"></noscript>
    
    <script src="{{ url('js/css-loader.js')}}" defer></script>
  </head>
  <body>
    <!-- Header section starts -->
   <header>
      <nav class="navbar navbar-expand-lg position-absolute" id="navbarchange">
        <div class="container my-md-1">
          <button
            class="navbar-toggler"
            onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarScroll"
            aria-controls="navbarScroll"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <!-- <span class="navbar-toggler-icon"></span> -->
            <!-- <button class="menu" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu"> -->
            <svg width="50" height="50" viewBox="0 0 100 100">
              <path
                class="line line1"
                d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058"
              />
              <path class="line line2" d="M 20,50 H 80" />
              <path
                class="line line3"
                d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942"
              />
            </svg>
            <!-- </button> -->
          </button>
          <div class="mobile-menu">
            <a class="navbar-brand" href="./index.html">
              <img
                id="mobile-logo"
                src="{{ url('assets/images/logo-white.png') }}"
                alt=""
              />
            </a>
            <a href="./contact-us.html" class="btn-main btn-sm-padding"
              >Get in Touch</a
            >
          </div>

          <div class="collapse navbar-collapse" id="navbarScroll">
            <a class="navbar-brand" href="{{ route('home') }}">
              <img id="logo" src="{{ url('assets/images/logo-white.png') }}" alt="" />
            </a>
            <ul
              class="navbar-nav w-100 my-2 my-lg-0 navbar-nav-scroll bordered"
              style="--bs-scroll-height: 100px"
            >
              <li class="nav-item">
                <a
                  class="nav-link active"
                  aria-current="page"
                  href="{{ route('home') }}"
                  >Home</a
                >
              </li>
              <ul class="d-flex justify-content-end w-100 navbar-nav">
               
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    data-bs-toggle="dropdown"
                    href="#"
                    role="button"
                    aria-expanded="false"
                    >Our Division</a
                  >

                  <ul class="dropdown-menu mega-menu">
                    <div class="container">
                      <div class="row">
                        @foreach ($data->category as $category)
                          
                        <li class="col-sm-4">
                          <ul>
                            <li>
                              <a
                                href="/division.html"
                                class="dropdown-header p-0"
                                >{{ $category->title }}</a
                              >
                            </li>
                            @foreach ($category['sub_categories'] as $subCategory)
                              
                            <li id="liSecurityDocumentReport">
                             <a href="{{url('/project/details/'.$subCategory['title'])}}">
                                {{ $subCategory['title'] }}
                            </a>
                              
                            </li>
                            @endforeach
                            {{-- <li id="liSecurityDocumentReport">
                              <a href="/division-detail.html"
                                >Technical Consulting Services</a
                              >
                            </li>
                            <li id="liSecurityEmailReport">
                              <a href="/division-detail.html"
                                >Product Design Assurance
                              </a>
                            </li>
                            <li id="liSecuritySiteReport">
                              <a href="/division-detail.html"
                                >Software Solution Development</a
                              >
                            </li>
                            <li id="liSecuritySiteReport">
                              <a href="/division-detail.html"
                                >Cybersecurity & Compliance</a
                              >
                            </li>
                            <li id="liSecuritySiteReport">
                              <a href="/division-detail.html"
                                >Hardware & Networking</a
                              >
                            </li> --}}
                          </ul>
                        </li>
                        @endforeach
                        {{-- <li class="col-sm-4">
                          <ul>
                            <li>
                              <a
                                href="/division.html"
                                class="dropdown-header p-0"
                                >HYDROMET</a
                              >
                            </li>
                            <li id="liSecurityDocumentReport">
                              <a href="/division-detail.html"
                                >Hydrological Monitoring</a
                              >
                            </li>
                            <li id="liSecurityDocumentReport">
                              <a href="/division-detail.html"
                                >Weather Monitoring</a
                              >
                            </li>
                            <li id="liSecurityEmailReport">
                              <a href="/division-detail.html"
                                >Environmental Monitoring
                              </a>
                            </li>
                            <li id="liSecuritySiteReport">
                              <a href="/division-detail.html"
                                >Technical Consulting Services</a
                              >
                            </li>
                          </ul>
                        </li>
                        <li class="col-sm-4">
                          <ul>
                            <li>
                              <a
                                href="/division.html"
                                class="dropdown-header p-0"
                                >Biotechnology</a
                              >
                            </li>
                            <li id="liSecurityDocumentReport">
                              <a href="/division-detail.html"
                                >Biotech Development Services</a
                              >
                            </li>
                            <li id="liSecurityDocumentReport">
                              <a href="/division-detail.html"
                                >Biotech & Medical Technologies Solutions</a
                              >
                            </li>
                            <li id="liSecurityEmailReport">
                              <a href="/division-detail.html"
                                >Technical Consulting Services</a
                              >
                            </li>
                          </ul>
                        </li>
                        <li class="col-sm-4">
                          <ul>
                            <li>
                              <a
                                href="/division.html"
                                class="dropdown-header p-0"
                                >Renewable Energy</a
                              >
                            </li>
                            <li id="liSecurityDocumentReport">
                              <a href="/division-detail.html"
                                >Solar Energy Solutions</a
                              >
                            </li>
                            <li id="liSecurityDocumentReport">
                              <a href="/division-detail.html"
                                >Green Energy Solutions</a
                              >
                            </li>
                            <li id="liSecurityEmailReport">
                              <a href="/division-detail.html"
                                >Wind & Hybrid Energy Systems</a
                              >
                            </li>
                          </ul>
                        </li>
                        <li class="col-sm-4">
                          <ul>
                            <li>
                              <a
                                href="/division.html"
                                class="dropdown-header p-0"
                                >Mining & Minerals</a
                              >
                            </li>
                            <li id="liSecurityDocumentReport">
                              <a href="/division-detail.html"
                                >Mineral Extraction Automation Solutions</a
                              >
                            </li>
                            <li id="liSecurityDocumentReport">
                              <a href="/division-detail.html"
                                >Mining Management Systems</a
                              >
                            </li>
                          </ul>
                        </li>
                        <li class="col-sm-4">
                          <ul>
                            <li>
                              <a
                                href="/division.html"
                                class="dropdown-header p-0"
                                >Security Systems</a
                              >
                            </li>
                            <li id="liSecurityDocumentReport">
                              <a href="/division-detail.html"
                                >CCTV, Surveillance & Access Control</a
                              >
                            </li>
                            <li id="liSecurityDocumentReport">
                              <a href="/division-detail.html"
                                >Smart Security Solutions</a
                              >
                            </li>
                          </ul>
                        </li> --}}
                      </div>
                    </div>
                  </ul>
                </li>
                
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    data-bs-toggle="dropdown"
                    href="#"
                    role="button"
                    aria-expanded="false"
                    >Resources</a
                  >
                  <ul class="dropdown-menu mega-menu resources">
                    <div class="container">
                      <div class="row">
                        <li class="col-sm-12">
                          <ul>
                            <li class="p-0">
                              <a href="/insights.html" class="dropdown-header"
                                >Insights & Updates</a
                              >
                            </li>
                            <li class="p-0">
                              <a href="/gallery.html" class="dropdown-header"
                                >Gallery</a
                              >
                            </li>
                          </ul>
                        </li>
                      </div>
                    </div>
                  </ul>
                  
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    data-bs-toggle="dropdown"
                    href="#"
                    role="button"
                    aria-expanded="false"
                    >About Us</a
                  >
                  <ul class="dropdown-menu mega-menu gallery">
                    <div class="container">
                      <div class="row">
                        <li class="col-sm-12">
                          <ul>
                            <li>
                              <a
                                href="/resources.html"
                                class="dropdown-header p-0"
                              >
                                COMPANY OVERVIEW</a
                              >
                            </li>
                           
                          </ul>
                        </li>
                        <li class="col-sm-12">
                          <ul>
                            <li>
                              <a
                                href="/certifications.html"
                                class="dropdown-header p-0"
                                >Certifications & Registrations</a
                              >
                            </li>
                          </ul>
                        </li>
                        <li class="col-sm-12">
                          <ul>
                            <li>
                              <a
                                href="/success-stories.html"
                                class="dropdown-header p-0"
                                >Success Stories</a
                              >
                            </li>
                          </ul>
                        </li>
                        <li class="col-sm-12">
                          <ul>
                            <li>
                              <a
                                href="/careers.html"
                                class="dropdown-header p-0"
                                >Careers</a
                              >
                            </li>
                          </ul>
                        </li>
                      </div>
                    </div>
                  </ul>
                </li>
              </ul>
            </ul>

            <div>
              <a href="./contact-us.html" class="btn-main d-sm-none-btn"
                >Contact</a
              >
            </div>
          </div>

          <!-- <div>
            <label class="switch">
                <input type="checkbox">
                <span class="slider"></span>
            </label> 
          </div> -->
        </div>
      </nav>
    </header>
     @yield('slider')

   @yield('content')
     <!-- Footer -->
   <x-new-footer/>
   
    <script src="{{ url('assets/lib/bootstrap/bootstrap.min.js')}}" defer></script>
    <script src="{{ url('assets/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{ url('assets/lib/fontawesome/fontawesome.js')}}" defer></script>
    <script src="{{ url('assets/lib/slick-1.8.1/slick/slick.min.js')}}" defer></script>

    <script src="{{ url('assets/js/main-minimal.js')}}"></script>
    <script src="{{ url('assets/js/main.js')}}" defer></script>
  </body>
</html>
