@extends('layouts.app')

@section('content')
    @include('components.slider')

    <style>
        .experience-box .customers-number {
            font-size: 36px;
        }

        .mb {
            margin-bottom: 50px;
        }


        .service-item.style-2 .desc,
        .service-item.style-2 .service-content ul li {
            color: white !important;
        }

        .service-item.style-2 .service-content {
            color: white;
        }

        .service-item.style-2 .service-content ul {
            color: white;
        }

        .partners-tagline {
            text-align: center;
            width: 100%;
            margin-bottom: 0;
        }

        .partners-tagline .sec-heading {
            margin-bottom: 0;
        }

        /* .partners-tagline .sec-heading .sub-title{
                    border: 1px dashed gray;
                } */

        .service-item-wrapper .title-area {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            width: 100%;
            max-width: 200px;
            margin: 0 auto;
        }

        .service-item-wrapper .title-area .service-icon {
            width: 60px;
            height: 60px;
            padding: 10px;
            border-radius: 50%;
            border-color: #DB8801 !important;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }

        .service-item-wrapper .title-area .service-icon img {
            max-width: 100%;
            height: auto;
        }

        .about-bottom-area {
            display: flex !important;
            flex-wrap: nowrap !important;
            gap: 15px !important;
        }

        .about-bottom-area .experience-box {
            flex: 1 !important;
            min-width: 0 !important;
        }

        .about-bottom-area .experience-box .sub-title {
            font-size: 0.80em !important;
        }

        .about-bottom-area .experience-box .customers-number {
            font-size: 1.8em;
        }

        .about-bottom-area .experience-box .customers-text {
            font-size: 0.65em !important;
        }

        .left-experince-box .customers-number {
            font-size: 3.0rem !important;
        }

        .left-experince-box .customers-text {
            font-size: 0.8rem !important;
        }

        .experience-box .customers-number {
            color: #DB8801 !important;
        }

        .experience-box .sub-title {
            color: #2a2e3f !important;
        }

        .global-map-img img {
            position: relative;
            left: -80px;
            /* adjust this value to move more or less */
        }
        
        @media (max-width: 480px) {
            .global-map-img img {
                left: -120px !important;
            }
            
            .location-indicator {
                transform: scale(1.2) !important;
            }
            .tj-about-section{
                padding-bottom: 0 !important;
            }
        }

        .industry-hover-item {
            overflow: hidden !important;
            border-radius: 12px !important;
        }

        .industry-hover-item.project-item {
            overflow: hidden !important;
            border-radius: 12px !important;
        }

        .industry-hover-item .project-img {
            position: relative;
            height: 450px;
            background-size: cover !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            border-radius: 10px !important;
        }

        .industry-hover-item .project-img::after {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0);
            transition: background 0.4s ease, backdrop-filter 0.4s ease;
            z-index: 1;
            border-radius: 10px !important;
        }

        .industry-hover-item .project-img:hover::after {
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(10px);
        }

        .industry-hover-item .industry-content {
            position: absolute;
            top: 50%;
            left: 55%;
            transform: translate(-50%, -50%);
            z-index: 2;
            text-align: center;
            width: 90%;
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .industry-hover-item .project-img:hover .industry-content {
            opacity: 1;
        }

        .industry-hover-item .title {
            color: white !important;
            font-size: 25px;
            font-weight: 700;
            margin: 0;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const clientSlider = document.querySelector('.client-slider-1');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        clientSlider.style.animationPlayState = 'running';
                    } else {
                        clientSlider.style.animationPlayState = 'paused';
                    }
                });
            }, {
                threshold: 0.1
            });

            if (clientSlider) {
                clientSlider.style.animationPlayState = 'paused';
                observer.observe(clientSlider);
            }
        });
    </script>



    @php
        use App\Models\CdSkill;
        use App\Models\CdCoreValue;
        use App\Models\CdOffer;
        use App\Models\CdSolution;

        $skillsLeft = CdSkill::where('position', 'left')->get()->last();
        $skillsRight = CdSkill::where('position', 'right')->get();

        $video = CdCoreValue::get()->last()->video;

        $heading = CdOffer::first()->title;

        // Convert sentence to array of words
        $words = explode(' ', trim($heading));
        // Extract last two words
        $subHeading = implode(' ', array_slice($words, -1));
        // Extract remaining part
        $mainHeading = implode(' ', array_slice($words, 0, -1));

        $solutions = CdOffer::where('position', 'bottom')->where('alt', 'home_page_card')->get();

    @endphp
    <section class="tj-about-section section-gap">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 order-lg-1 order-2">
                    <div class="about-img-area wow fadeInLeft" data-wow-delay=".2s">
                        <div class="about-img overflow-hidden">
                            <video data-speed="0.8" autoplay muted loop playsinline>
                                <source src="/{{ $video }}" type="video/mp4" />
                            </video>
                        </div>
                        <div class="box-area">
                            <div class="experience-box left-experince-box wow fadeInUp" data-wow-delay=".3s">
                                <span class="sub-title">{{ $skillsLeft->title }}</span>
                                <div class="customers-number">{{ $skillsLeft->percentage }}</div>
                                <h6 class="customers-text">{{ $skillsLeft->description }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 order-lg-2 order-1">
                    <div class="about-content-area style-1 wow fadeInLeft" data-wow-delay=".2s">
                        <div class="sec-heading">
                            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>Get to Know
                                Us</span>
                            <h2 class="sec-title title-anim">
                                {{ $mainHeading }}<span> {{ $subHeading }}</span>
                            </h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay=".5s">
                            <a class="text-btn mb" href="/about_us">
                                <span class="btn-text"><span>Learn More</span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="about-bottom-area">
                        @foreach ($skillsRight as $skill)
                            <div class="experience-box max-w-220 wow fadeInUp" data-wow-delay=".3s">
                                <span class="sub-title">{{ $skill->title }}</span>
                                <div class="customers-number">{{ $skill->percentage }}</div>
                                <h6 class="customers-text">{{ $skill->description }}</h6>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: About Section -->

    <!-- start: Solutions Section -->
    <section class="tj-service-section service-2 section-gap section-gap-x slidebar-stickiy-container mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="content-wrap slidebar-stickiy">
                        <div class="sec-heading style-2">
                            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>Our
                                Departments</span>
                            <h2 class="sec-title text-white text-anim">
                                Powering Progress in Every Sector
                                <span>We Touch</span>
                            </h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay=".6s">
                            <a class="tj-primary-btn" href="/contact">
                                <span class="btn-text"><span>Contact Us</span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="service-wrapper-2">
                        @foreach ($solutions as $solution)
                            <div class="service-item-wrapper tj-fadein-right-on-scroll">
                                <div class="service-item box style-2">
                                    <div class="title-area">
                                        <div class="service-icon">
                                            <img src="{{ $solution->image }}" alt="icon" style="">
                                            {{-- <i class="{{$solution->class}}"></i> --}}
                                            <!-- tji-service-1  tji-service-2   tji-service-3   tji-service-4 -->
                                        </div>
                                        <h4 class="title">
                                            <a href="{{ $solution->slug }}">{!! $solution->title !!}</a>
                                        </h4>
                                    </div>
                                    <div class="service-content">
                                        <p class="desc">
                                            {!! $solution->description !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>


            </div>
        </div>
        <div class="bg-shape-1">
            <img src="{{ asset('frontend_assets/images/shape/pattern-2.svg') }}" alt="" />
        </div>
        <div class="bg-shape-2">
            <img src="{{ asset('frontend_assets/images/shape/pattern-3.svg') }}" alt="" />
        </div>
        <div class="bg-shape-3">
            <img src="{{ asset('frontend_assets/images/shape/shape-blur.svg') }}" alt="" />
        </div>
    </section>
    <!-- end: Service Section -->

    <!-- start: Blog Section -->
    <section class="tj-blog-section-2 h8-blog section-gap slidebar-stickiy-container">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 col-xl-3">
                    <div class="sec-heading style-3 slidebar-stickiy">
                        <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>Case Studies</span>
                        <h2 class="sec-title title-anim ">
                            Experience the Impact
                        </h2>
                        <div class="h8-blog-more wow fadeInUp" data-wow-delay=".8s">
                            <a class="tj-primary-btn" href="/case-studies">
                                <span class="btn-text"><span>More Case Studies</span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                {{--  --}}
                <div class="col-12 col-lg-8 col-xl-9 desktop-only">
                    <div class="blog-wrapper h8-blog-wrapper">
                        @foreach ($data->caseStudies as $caseStudy)
                            <div class="blog-item style-2 wow fadeInUp" data-wow-delay=".3s">
                                <div class="blog-thumb">
                                    <a href="/case-study/{{ $caseStudy->slug ?? $caseStudy->title }}">
                                        <img src="{{ asset($caseStudy->images[0]->image ?? '') }}"
                                            alt="{{ $caseStudy->images[0]->alt ?? '' }}" />
                                    </a>
                                </div>

                                <div class="blog-content">
                                    <div class="title-area">
                                        <div class="blog-meta">
                                            <span class="categories">
                                                <a href="/case-study/{{ $caseStudy->slug ?? $caseStudy->title }}">
                                                    Case Study
                                                </a>
                                            </span>
                                        </div>
                                        <h3 class="title">
                                            <a href="/case-study/{{ $caseStudy->slug ?? $caseStudy->title }}">
                                                @php
                                                    $html = $caseStudy->description;

                                                    $dom = new DOMDocument();
                                                    libxml_use_internal_errors(true);
                                                    $dom->loadHTML($html);
                                                    libxml_clear_errors();

                                                    $h3Tags = $dom->getElementsByTagName('h3');

                                                    $firstH3 = $h3Tags->length > 0 ? $h3Tags->item(0)->textContent : null;

                                                    // dd($firstH3);
                                                @endphp
                                                {{ $firstH3 }}
                                            </a>
                                        </h3>
                                    </div>

                                    <a class="text-btn" href="/case-study/{{ $caseStudy->slug ?? $caseStudy->title }}">
                                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                        <span class="btn-text"><span>Read More</span></span>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>



                <div class="col-12 mobile-only">
                    <div class="swiper case-slider">
                        <div class="swiper-wrapper">

                            @foreach ($data->caseStudies as $caseStudy)
                                <div class="swiper-slide">
                                    <div class="blog-item style-2">
                                        <div class="blog-thumb">
                                            <a href="/case-study/{{ $caseStudy->slug ?? $caseStudy->title }}">
                                                <img src="{{ asset($caseStudy->images[0]->image ?? '') }}"
                                                    alt="">
                                            </a>
                                        </div>

                                        <div class="blog-content">
                                            <div class="title-area">
                                                <div class="blog-meta">
                                                    <span class="categories" style="margin: auto;">
                                                        <a href="/case-study/{{ $caseStudy->slug ?? $caseStudy->title }}">
                                                            Case Study
                                                        </a>
                                                    </span>
                                                </div>
                                                <h3 class="title" style="font-size: 16px;text-align: center;">
                                                    <a href="/case-study/{{ $caseStudy->slug ?? $caseStudy->title }}">
                                                        {{ $firstH3 }}
                                                    </a>
                                                </h3>
                                            </div>

                                            <a class="text-btn"
                                                style="margin: auto; margin-top: 10px;"
                                                href="/case-study/{{ $caseStudy->slug ?? $caseStudy->title }}">
                                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                <span class="btn-text" style="margin: auto;"><span  style="margin: auto;">Read More</span></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        {{-- <div class="swiper-pagination"></div> --}}
                        
                    </div>
                </div>
            </div>
        </div>




    </section>
    <!-- end: Blog Section -->

    <!-- start: Client Section -->
    <section class="tj-client-section section-top-gap">
        <div class="container-fluid client-container">
            <div class="row">
                <div class="col-12 col-lg-4 col-xl-3 partners-tagline">
                    <div class="sec-heading style-3 slidebar-stickiy">
                        <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>Partnered with
                            the world’s most trusted brands</span>
                    </div>
                </div>
                <div class="col-12">
                    <!-- <div class="client-content style-2 wow fadeIn" data-wow-delay=".3s">
                                  <h5 class="sec-title">Join Over <span class="client-numbers">1000+</span> Companies with
                                    <span class="client-text">Cdigital</span> Here
                                  </h5>
                                </div> -->
                    <!-- <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Our Departments</span> -->
                    <div class="swiper client-slider client-slider-1 wow fadeInUp" data-wow-delay=".3s">
                        <div class="swiper-wrapper mb-5">
                            @foreach ($data->partners as $client)
                                <div class="swiper-slide client-item">
                                    <div class="client-logo">
                                        <img src="{{ asset($client->image) }}" alt="{{ $client->alt }}" />
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Client Section -->

    <!-- start: Project Section -->
    <section class="tj-project-section-3 h9-project section-gap mt-5 mb-3 section-gap-x">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-heading-wrap">
                        <div class="heading-wrap-content">
                            <div class="sec-heading style-8">
                                <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>OUR
                                    Industries</span>
                                <h2 class="sec-title title-anim">
                                    Empowering Business with Expertise
                                </h2>
                            </div>
                            <div class="slider-navigation d-none d-md-inline-flex wow fadeInUp" data-wow-delay=".5s">
                                <div class="slider-prev">
                                    <span class="anim-icon">
                                        <i class="tji-arrow-left"></i>
                                        <i class="tji-arrow-left"></i>
                                    </span>
                                </div>
                                <div class="slider-next">
                                    <span class="anim-icon">
                                        <i class="tji-arrow-right"></i>
                                        <i class="tji-arrow-right"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="project-wrapper h9-project-wrapper wow fadeInUp" data-wow-delay=".4s">
                        <div class="swiper h9-project-slider">
                            <div class="swiper-wrapper">
                                @foreach ($data->client as $client)
                                    <div class="swiper-slide">
                                        <div class="project-item industry-hover-item">
                                            <div class="project-img"
                                                style="background-image: url('{{ asset($client->image) }}'); background-size: cover; background-position: center;">
                                                <div class="industry-content">
                                                    <h4 class="title">{{ $client->title }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination-area"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-shape-1">
            <img src="{{ asset('frontend_assets/images/shape/pattern-2.svg') }}" alt="" />
        </div>
        <div class="bg-shape-2">
            <img src="{{ asset('frontend_assets/images/shape/pattern-3.svg') }}" alt="" />
        </div>
    </section>
    <!-- end: Project Section -->

    <!-- start: Team Section -->
    <x-team />
    <!-- end: Team Section -->

    <!-- start: Contact Section -->
    <section class="tj-contact-section section-gap section-gap-x">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="global-map wow fadeInUp" data-wow-delay=".3s">
                        <div class="global-map-img">
                            <img src="{{ asset('frontend_assets/images/bg/map2.png') }}" alt="Image" />
                            <div class="location-indicator active loc-1">
                                <div class="location-tooltip">
                                    <span></span>
                                </div>
                            </div>
                            <div class="location-indicator active loc-2">
                                <div class="location-tooltip">
                                    <span></span>
                                </div>
                            </div>
                            <div class="location-indicator active loc-3">
                                <div class="location-tooltip">
                                    <span></span>
                                </div>
                            </div>
                            <div class="location-indicator active loc-4">
                                <div class="location-tooltip">
                                    <span></span>
                                </div>
                            </div>
                            <div class="location-indicator active loc-5">
                                <div class="location-tooltip">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form style-2 wow fadeInUp" data-wow-delay=".4s">
                        <div class="sec-heading">
                            <span class="sub-title text-white"><i class="tji-box"></i>Get in Touch</span>
                            <h2 class="sec-title title-anim">
                                Drop Us a <span>Line</span>
                            </h2>
                        </div>
                        <form id="contact-form-2" method="POST" action="{{ route('contact.store') }}">
                            @csrf
                            <input type="hidden" name="redirect_to" value="home">
                            <div class="row wow fadeInUp" data-wow-delay=".5s">
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <input type="text" name="name" placeholder="Full Name *" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <input type="email" name="email" placeholder="Email Address *" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <input type="tel" name="phone" placeholder="Phone number *" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <div class="tj-nice-select-box">
                                            <div class="tj-select">
                                                <select name="subject" required>
                                                    <option value="">Choose an option</option>
                                                    <option value="Business Strategy">Business Strategy</option>
                                                    <option value="Customer Experience">Customer Experience</option>
                                                    <option value="Sustainability and ESG">Sustainability and ESG</option>
                                                    <option value="Training and Development">Training and Development
                                                    </option>
                                                    <option value="IT Support & Maintenance">IT Support & Maintenance
                                                    </option>
                                                    <option value="Marketing Strategy">Marketing Strategy</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-input message-input">
                                        <textarea name="message" placeholder="Type message *" required></textarea>
                                    </div>
                                </div>
                                <div class="submit-btn">
                                    <button class="tj-primary-btn" type="button" onclick="submitHomeForm()">
                                        <span class="btn-text"><span>Send Message</span></span>
                                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-shape-1">
            <img src="{{ asset('frontend_assets/images/shape/pattern-2.svg') }}" alt="" />
        </div>
        <div class="bg-shape-2">
            <img src="{{ asset('frontend_assets/images/shape/pattern-3.svg') }}" alt="" />
        </div>
    </section>
    <!-- end: Contact Section -->
@endsection

@push('styles')
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endpush

@push('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        function submitHomeForm() {
            var form = document.getElementById('contact-form-2');
            var formData = new FormData(form);

            fetch('{{ route('contact.store') }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                })
                .then(response => {
                    if (response.status === 302) {
                        return response.json().then(data => {
                            toastr.options = {
                                'progressBar': true
                            };
                            toastr.info(data.message);
                        });
                    }
                    return response.json().then(data => {
                        toastr.options = {
                            'progressBar': true
                        };
                        toastr.success(data.message);
                        form.reset();
                    });
                })
                .catch(error => {
                    toastr.options = {
                        'progressBar': true
                    };
                    toastr.error('An error occurred. Please try again.');
                });
        }

        if (window.innerWidth <= 480) {
            var caseSlider = new Swiper(".case-slider", {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                navigation: {
                    nextEl: ".cs-next",
                    prevEl: ".cs-prev",
                },
                autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                    type: 'bullets',
                },
            });
        }
    </script>
@endpush
