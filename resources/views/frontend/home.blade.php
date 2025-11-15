@extends('layouts.app')

@section('content')
    @include('components.slider')

    <!-- start: About Section -->
    <section class="tj-about-section section-gap">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 order-lg-1 order-2">
                    <div class="about-img-area wow fadeInLeft" data-wow-delay=".2s">
                        <div class="about-img overflow-hidden">
                            <video data-speed="0.8" autoplay muted loop playsinline>
                                <source src="{{ asset('frontend_assets/video/about-us2.mp4') }}" type="video/mp4" />
                            </video>
                        </div>
                        <div class="box-area">
                            <div class="experience-box wow fadeInUp" data-wow-delay=".3s">
                                <span class="sub-title">Experiences</span>
                                <div class="customers-number">20+</div>
                                <h6 class="customers-text">
                                    Decades of Experience, Endless Innovation
                                </h6>
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
                                Empowering Businesses with Innovation, Expertise, and
                                for <span>Success.</span>
                            </h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay=".5s">
                            <a class="text-btn" href="about.html">
                                <span class="btn-text"><span>Learn More</span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="about-bottom-area">
                        <div class="experience-box max-w-220 wow fadeInUp" data-wow-delay=".3s">
                            <span class="sub-title">Peojects</span>
                            <div class="customers-number">100+</div>
                            <h6 class="customers-text">
                                Decades of Experience, Endless Innovation
                            </h6>
                        </div>
                        <div class="experience-box max-w-220 wow fadeInUp" data-wow-delay=".3s">
                            <span class="sub-title">Partner</span>
                            <div class="customers-number">50+</div>
                            <h6 class="customers-text">
                                Decades of Experience, Endless Innovation
                            </h6>
                        </div>
                        <div class="experience-box max-w-220 wow fadeInUp" data-wow-delay=".3s">
                            <span class="sub-title">Clients Served</span>
                            <div class="customers-number">50+</div>
                            <h6 class="customers-text">
                                Decades of Experience, Endless Innovation
                            </h6>
                        </div>
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
                            <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Our Solutions</span>
                            <h2 class="sec-title text-white text-anim">
                                Tailored Business Solutions for our
                                <span>Corporates.</span>
                            </h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay=".6s">
                            <a class="tj-primary-btn" href="service.html">
                                <span class="btn-text"><span>More Services</span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="service-wrapper-2">
                        <div class="service-item-wrapper tj-fadein-right-on-scroll">
                            <div class="service-item style-2">
                                <div class="title-area">
                                    <div class="service-icon">
                                        <i class="tji-service-1"></i>
                                    </div>
                                    <h4 class="title">
                                        <a href="service-details.html">Business Strategy Development</a>
                                    </h4>
                                </div>
                                <div class="service-content">
                                    <p class="desc">
                                        Through a combination of data-driven insights and
                                        innovative approaches, we work closely with you to
                                        develop customized.
                                    </p>
                                    <ul class="list-items">
                                        <li>
                                            <i class="tji-list"></i>Expansion Strategies
                                        </li>
                                        <li>
                                            <i class="tji-list"></i>Operational Efficiency
                                        </li>
                                        <li><i class="tji-list"></i>Competitive Edge</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="service-item-wrapper tj-fadein-right-on-scroll">
                            <div class="service-item style-2">
                                <div class="title-area">
                                    <div class="service-icon">
                                        <i class="tji-service-2"></i>
                                    </div>
                                    <h4 class="title">
                                        <a href="service-details.html">Customer Experience Solutions</a>
                                    </h4>
                                </div>
                                <div class="service-content">
                                    <p class="desc">
                                        Developing personalized customer journeys to
                                        increase satisfaction and loyalty of our expansion
                                        to keep competitive.
                                    </p>
                                    <ul class="list-items">
                                        <li>
                                            <i class="tji-list"></i>Personalized Customer
                                        </li>
                                        <li><i class="tji-list"></i>Seamless Service</li>
                                        <li><i class="tji-list"></i>Proactive Support</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="service-item-wrapper tj-fadein-right-on-scroll">
                            <div class="service-item style-2">
                                <div class="title-area">
                                    <div class="service-icon">
                                        <i class="tji-service-3"></i>
                                    </div>
                                    <h4 class="title">
                                        <a href="service-details.html">Sustainability and ESG Consulting</a>
                                    </h4>
                                </div>
                                <div class="service-content">
                                    <p class="desc">
                                        Provide tailored strategies that not only drive
                                        long-term value but also build trust with
                                        stakeholders, investors.
                                    </p>
                                    <ul class="list-items">
                                        <li>
                                            <i class="tji-list"></i>Strategy Development
                                        </li>
                                        <li>
                                            <i class="tji-list"></i>Sustainable Business
                                        </li>
                                        <li><i class="tji-list"></i>Impactful Reporting</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="service-item-wrapper tj-fadein-right-on-scroll">
                            <div class="service-item style-2">
                                <div class="title-area">
                                    <div class="service-icon">
                                        <i class="tji-service-4"></i>
                                    </div>
                                    <h4 class="title">
                                        <a href="service-details.html">Training and Development Programs</a>
                                    </h4>
                                </div>
                                <div class="service-content">
                                    <p class="desc">
                                        Training and Development Programs are designed to
                                        empower employees with the skills, knowledge, and
                                        tools they need.
                                    </p>
                                    <ul class="list-items">
                                        <li>
                                            <i class="tji-list"></i>Leadership Development
                                        </li>
                                        <li><i class="tji-list"></i>Skill Enhancement</li>
                                        <li><i class="tji-list"></i>Employee Engagement</li>
                                    </ul>
                                </div>
                            </div>
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
                        <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>Insights &
                            Ideas</span>
                        <h2 class="sec-title title-anim">
                            Read Our Latest Blog & News.
                        </h2>
                        <div class="h8-blog-more wow fadeInUp" data-wow-delay=".8s">
                            <a class="tj-primary-btn" href="blog.html">
                                <span class="btn-text"><span>More Blogs</span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 col-xl-9">
                    <div class="blog-wrapper h8-blog-wrapper">
                            @foreach ($data->blogs as $blog)
                                <div class="blog-item style-2 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="blog-thumb">
                                        <a href="blog-details.html">
                                            <img src="{{ asset($blog->image) }}" alt="{{ $blog->alt }}" />
                                            <!-- <img src="{{ asset('storage/'.$blog->image) }}" alt="{{ $blog->alt }}" /> -->
                                        </a>
                                        <div class="blog-date">
                                            <span class="date">{{ $blog->created_at->format('d') }}</span>
                                            <span class="month">{{ $blog->created_at->format('M') }}</span>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="title-area">
                                            <div class="blog-meta">
                                                <span class="categories"><a href="blog-details.html">{{$blog->category->title}}</a></span>
                                                <!-- <span>By
                                                    <a href="blog-details.html">Ellinien Loma</a></span> -->
                                            </div>
                                            <h3 class="title">
                                                <a href="blog-details.html">{{ $blog->title }}</a>
                                            </h3>
                                        </div>
                                        <a class="text-btn" href="blog-details.html">
                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                            <span class="btn-text"><span>Read More</span></span>
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        <!-- Reference -->
                        <!-- <div class="blog-item style-2 wow fadeInUp" data-wow-delay=".4s">
                            <div class="blog-thumb">
                                <a href="blog-details.html"><img
                                        src="{{ asset('frontend_assets/images/blog/blog-5.webp') }}" alt="" /></a>
                                <div class="blog-date">
                                    <span class="date">28</span>
                                    <span class="month">Feb</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="title-area">
                                    <div class="blog-meta">
                                        <span class="categories"><a href="blog-details.html">Business</a></span>
                                        <span>By
                                            <a href="blog-details.html">Ellinien Loma</a></span>
                                    </div>
                                    <h3 class="title">
                                        <a href="blog-details.html">Mastering Change Management Lessons for
                                            Businesses.</a>
                                    </h3>
                                </div>
                                <a class="text-btn" href="blog-details.html">
                                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                    <span class="btn-text"><span>Read More</span></span>
                                </a>
                            </div>
                        </div> -->
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
                <div class="col-12">
                    <!-- <div class="client-content style-2 wow fadeIn" data-wow-delay=".3s">
                          <h5 class="sec-title">Join Over <span class="client-numbers">1000+</span> Companies with
                            <span class="client-text">Cdigital</span> Here
                          </h5>
                        </div> -->
                    <div class="swiper client-slider client-slider-1 wow fadeIn" data-wow-delay=".5s">
                        <div class="swiper-wrapper">
                            @foreach ($data->partners as $client)
                                <div class="swiper-slide client-item">
                                    <div class="client-logo">
                                        <img src="{{ asset($client->image) }}" alt="{{ $client->alt }}" />
                                    </div>
                                </div>
                            @endforeach
                            <!-- Reference -->
                            <!-- <div class="swiper-slide client-item">
                                <div class="client-logo">
                                    <img src="{{ asset('frontend_assets/images/brands/brand-6.webp') }}"
                                        alt="" />
                                </div>
                            </div> -->
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
                                <span class="sub-title wow fadeInUp" data-wow-delay=".3s">OUR Industries</span>
                                <h2 class="sec-title title-anim">
                                    Empowering Business with Expertise.
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
                                    <div class="project-item">
                                        <div class="project-img">
                                           <img src="{{ asset($client->image) }}" alt="{{ $client->alt }}" />
                                        </div>
                                        <div class="project-content">
                                            <div class="project-text">
                                                <h4 class="title">
                                                    <a href="portfolio-details.html">{{$client->title}}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- Reference -->
                                <!-- <div class="swiper-slide">
                                    <div class="project-item">
                                        <div class="project-img">
                                            <img src="{{ asset('frontend_assets/images/industries/3.jpg') }}"
                                                alt="" />
                                        </div>
                                        <div class="project-content">
                                            <span class="categories"><a href="portfolio-details.html">Business</a></span>
                                            <div class="project-text">
                                                <h4 class="title">
                                                    <a href="portfolio-details.html">Education</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
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
                            <img src="{{ asset('frontend_assets/images/bg/map.svg') }}" alt="Image" />
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
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form style-2 wow fadeInUp" data-wow-delay=".4s">
                        <div class="sec-heading">
                            <span class="sub-title text-white"><i class="tji-box"></i>Get in Touch</span>
                            <h2 class="sec-title title-anim">
                                Drop Us a <span>Line.</span>
                            </h2>
                        </div>
                        <form id="contact-form-2">
                            <div class="row wow fadeInUp" data-wow-delay=".5s">
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <input type="text" name="cfName2" placeholder="Full Name *" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <input type="email" name="cfEmail2" placeholder="Email Address *" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <input type="tel" name="cfPhone2" placeholder="Phone number *" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <div class="tj-nice-select-box">
                                            <div class="tj-select">
                                                <select name="cfSubject2">
                                                    <option value="0">Chose a option</option>
                                                    <option value="1">Business Strategy</option>
                                                    <option value="2">Customer Experience</option>
                                                    <option value="3">
                                                        Sustainability and ESG
                                                    </option>
                                                    <option value="4">
                                                        Training and Development
                                                    </option>
                                                    <option value="5">
                                                        IT Support & Maintenance
                                                    </option>
                                                    <option value="6">Marketing Strategy</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-input message-input">
                                        <textarea name="cfMessage2" id="message" placeholder="Type message *"></textarea>
                                    </div>
                                </div>
                                <div class="submit-btn">
                                    <button class="tj-primary-btn" type="submit">
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
