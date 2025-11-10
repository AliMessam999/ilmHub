@extends('layouts.app')

@section('content')

<!-- start: Breadcrumb Section -->
<section
    class="tj-page-header rounded-0"
    data-bg-image="/frontend_assets/images/bg/pheader-bg.webp">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-page-header-content text-center mt-5">
                    <h1 class="tj-page-title">About Us</h1>
                    <div class="tj-page-link">
                        <span><i class="tji-home"></i></span>
                        <span>
                            <a href="index.html">Home</a>
                        </span>
                        <span><i class="tji-arrow-right"></i></span>
                        <span>
                            <span>About Us</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- end: Breadcrumb Section -->

<!-- start: Choose Section -->
<section id="choose" class="tj-choose-section section-gap">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-heading-wrap">
                    <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>Choose the Best</span>
                    <div class="heading-wrap-content">
                        <div class="sec-heading">
                            <h2 class="sec-title title-anim">
                                Empowering Business with <span>Expertise.</span>
                            </h2>
                        </div>
                        <div class="btn-wrap wow fadeInUp" data-wow-delay=".6s">
                            <a class="tj-primary-btn" href="contact.html">
                                <span class="btn-text"><span>Request a Call</span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-gap-4 rightSwipeWrap">
            <div class="col-lg-4">
                <div class="choose-box right-swipe">
                    <div class="choose-content">
                        <div class="choose-icon">
                            <i class="tji-innovative"></i>
                        </div>
                        <h4 class="title">Innovative Solutions</h4>
                        <p class="desc">
                            We stay ahead of the curve, leveraging cutting-edge
                            technologies and strategies to keep you competitive in a
                            marketplace.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="choose-box right-swipe">
                    <div class="choose-content">
                        <div class="choose-icon">
                            <i class="tji-award"></i>
                        </div>
                        <h4 class="title">Award-Winning Expertise</h4>
                        <p class="desc">
                            Recognized by industry leaders, our award-winning team
                            has a proven record of delivering excellence across
                            projects.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="choose-box right-swipe">
                    <div class="choose-content">
                        <div class="choose-icon">
                            <i class="tji-support"></i>
                        </div>
                        <h4 class="title">Dedicated Support</h4>
                        <p class="desc">
                            Our team is always available to address your concerns,
                            providing quick and effective solution to keep your
                            business.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Choose Section -->

<!-- start: About Section -->
<section class="tj-about-section-2 section-gap section-gap-x">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 order-lg-1 order-2">
                <div
                    class="about-img-area style-2 wow fadeInLeft"
                    data-wow-delay=".3s">
                    <div class="about-img overflow-hidden">
                        <img
                            data-speed=".8"
                            src="/frontend_assets/images/about/about-1.webp"
                            alt="" />
                    </div>
                    <div class="box-area style-2">
                        <div
                            class="progress-box wow fadeInUp"
                            data-wow-delay=".3s">
                            <h4 class="title">Business Progress</h4>
                            <ul class="tj-progress-list">
                                <li>
                                    <h6 class="tj-progress-title">Revenue</h6>
                                    <div class="tj-progress">
                                        <span class="tj-progress-percent">82%</span>
                                        <div
                                            class="tj-progress-bar"
                                            data-percent="82"></div>
                                    </div>
                                </li>
                                <li>
                                    <h6 class="tj-progress-title">Satisfaction</h6>
                                    <div class="tj-progress">
                                        <span class="tj-progress-percent">90%</span>
                                        <div
                                            class="tj-progress-bar"
                                            data-percent="90"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 order-lg-2 order-1">
                <div class="about-content-area">
                    <div class="sec-heading">
                        <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>Get to Know Us</span>
                        <h2 class="sec-title title-anim">
                            Driving Innovation and Excellence for Sustainable
                            Corporate Success
                            <span>Worldwide.</span>
                        </h2>
                    </div>
                </div>
                <div class="about-bottom-area">
                    <div
                        class="mission-vision-box wow fadeInLeft"
                        data-wow-delay=".5s">
                        <h4 class="title">Our Mission</h4>
                        <p class="desc">
                            our mission is empower businesses through innovate best
                            solution, exceptional service.
                        </p>
                        <ul class="list-items">
                            <li><i class="tji-list"></i>Innovation & Excellence</li>
                            <li><i class="tji-list"></i>Exceptional Customer</li>
                            <li><i class="tji-list"></i>Business Growth</li>
                        </ul>
                    </div>
                    <div
                        class="mission-vision-box wow fadeInRight"
                        data-wow-delay=".5s">
                         <h4 class="title">Our Vision</h4>
                        <p class="desc">
                            Our vision is to become a global leader in providing
                            transformative business solutions.
                        </p>
                        <ul class="list-items">
                            <li><i class="tji-list"></i>Global Leadership</li>
                            <li><i class="tji-list"></i>Transformative Impact</li>
                            <li><i class="tji-list"></i>Sustainable Success</li>
                        </ul>
                    </div>
                </div>
                <div class="about-btn-area wow fadeInUp" data-wow-delay=".6s">
                    <a class="tj-primary-btn" href="about.html">
                        <span class="btn-text"><span>Learn More About Us</span></span>
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-shape-1">
        <img src="/frontend_assets/images/shape/pattern-2.svg" alt="" />
    </div>
    <div class="bg-shape-2">
        <img src="/frontend_assets/images/shape/pattern-3.svg" alt="" />
    </div>
</section>
<!-- end: About Section -->




<!-- start: Team Section -->
<section class="tj-team-section-3 section-gap section-gap-x">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-heading text-center">
                    <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i> Meet Our Team</span>
                    <h2 class="sec-title title-anim">
                        Success <span>Stories</span> Fuel our Innovation.
                    </h2>
                </div>
            </div>
        </div>
        <div class="row leftSwipeWrap">
          
            @foreach($team as $item)
            <div class="col-lg-3 col-sm-6">
                <div class="team-item left-swipe">
                    <div class="team-img">
                        <div class="team-img-inner">
                            <img src="/{{ $item->image }}" alt="{{$item->alt}}" />
                        </div>
                        <!-- <div class="social-links">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://x.com/" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                    <div class="team-content">
                        <h4 class="title">
                            <a href="#">{{ $item->name }}</a>
                        </h4>
                        <span class="designation">{{ $item->designation }}</span>
                        <a class="mail-at" href="#"><i class="tji-at"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
    <div class="bg-shape-1">
        <img src="/frontend_assets/images/shape/pattern-2.svg" alt="" />
    </div>
    <div class="bg-shape-2">
        <img src="/frontend_assets/images/shape/pattern-3.svg" alt="" />
    </div>
</section>
<!-- end: Team Section -->

<section class="division-section py-5">
    <div class="container-fluid px-5">

        <!-- 🟦 Registrations -->
        <h2 class="mb-4 text-start">Registrations</h2>
        <div class="row g-4">
            <!-- Card 1 -->
             @foreach($certificates as $certificate)
            <div class="col-md-4 col-sm-6">
                <div class="card text-center shadow-sm h-100">
                    <div class="card-body">
                        <div class="certifications-box">
                            <img src="/{{ $certificate->image }}"
                                alt="{{ $certificate->alt }}" class="img-fluid mb-3">
                            <h5 class="card-title">{{ $certificate->title }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

    
        </div>

        <!-- 🟩 Certifications -->
        <div class="mt-5">
            <h2 class="mb-4 text-start">Certifications</h2>
            <div class="row justify-content-start">
                @foreach($registrations as $registration)
                <div class="col-md-4 col-sm-6">
                    <div class="card text-center shadow-sm h-100">
                        <div class="card-body">
                            <div class="certifications-box">
                                <img src="/{{ $registration->image }}" alt="{{ $registration->alt }}"
                                    class="img-fluid mb-3">
                            <p class="card-text mb-1">{!! $registration->title !!}</p> 
                                
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


@endsection