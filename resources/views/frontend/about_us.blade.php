@extends('layouts.app')

@section('content')
<style>
    /* Style list items in mission-vision boxes */
    .mission-vision-box p {
        /* font-weight: light; */
    }
    .mission-vision-box ul li {
        font-weight: light;
        color: orange;
        list-style-type: disc;
        margin-left: 20px;
        margin-bottom: 8px;
        font-size: 16px;
        line-height: 1.5;
    }

    /* Optional: Style progress list titles */
    .tj-progress-title {
        color: #333; /* Adjust color as needed */
        font-weight: 600;
        margin-bottom: 5px;
    }

    /* Style for progress list items */
    .tj-progress-list li {
        margin-bottom: 15px;
    }
</style>
    <!-- start: Breadcrumb Section -->
    {{-- <section class="tj-page-header rounded-0" data-bg-image="/frontend_assets/images/bg/pheader-bg.webp"> --}}
    <section class="tj-page-header rounded-0" data-bg-image="">
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
                        <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>Choose the
                            Best</span>
                        <div class="heading-wrap-content">
                            <div class="sec-heading">
                                <h2 class="sec-title title-anim">
                                    Powering Industries with Innovative <span>Solutions</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-gap-4 rightSwipeWrap">
                @foreach ($expertise as $exp)
                    <div class="col-lg-4">
                        <div class="choose-box right-swipe">
                            <div class="choose-content">
                                <div class="choose-icon">
                                    <img src="/{{ $exp->image }}" alt="{{ $exp->alt }}">
                                </div>
                                <h4 class="title">{{ $exp->title }}</h4>
                                <p class="desc">
                                    {!! $exp->description !!}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end: Choose Section -->

    <!-- start: About Section -->
    <section class="tj-about-section-2 section-gap section-gap-x">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 order-lg-1 order-2">
                    <div class="about-img-area style-2 wow fadeInLeft" data-wow-delay=".3s">
                        <div class="about-img overflow-hidden">
                            <img data-speed=".8" src="/{{ $about_us[0]->image }}" alt="{{ $about_us[0]->alt }}" />
                        </div>
                        <div class="box-area style-2">
                            <div class="progress-box wow fadeInUp" data-wow-delay=".3s">
                                <!-- <h4 class="title">Business Progress</h4> -->
                                <ul class="tj-progress-list">
                                    @foreach ($skills as $skill)
                                        <li>
                                        <h6 class="tj-progress-title">{{ $skill->title }}</h6>
                                        <div class="tj-progress">
                                            <span class="tj-progress-percent">{{ $skill->percentage }}</span>
                                            <div class="tj-progress-bar" data-percent="{{ $skill->percentage }}"></div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 order-lg-2 order-1">
                    <div class="about-content-area">
                        <div class="sec-heading">
                            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>Get to Know
                                Us</span>
                            <h2 class="sec-title title-anim">
                                {{ $title_except_last_word }}<span> {{ $last_word }}</span>
                            </h2>
                        </div>
                    </div>
                    <div class="about-bottom-area">
                        <div class="mission-vision-box wow fadeInLeft" data-wow-delay=".5s">
                            <h4 class="title">{{ $about_us[1]->title }}</h4>
                            <p class="desc">
                                {!! $about_us[1]->description !!}
                            </p>
                        </div>
                        <div class="mission-vision-box wow fadeInRight" data-wow-delay=".5s">
                            <h4 class="title">{{ $about_us[2]->title }}</h4>
                            <p class="desc">
                                {!! $about_us[2]->description !!}
                            </p>
                        </div>
                    </div>
                    <div class="about-btn-area wow fadeInUp" data-wow-delay=".6s">
                        <a class="tj-primary-btn" href="{{ url('contact') }}">
                            <span class="btn-text"><span>Get In Touch</span></span>
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
                        <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i> Meet Our
                            Team</span>
                        <h2 class="sec-title title-anim">
                            Building <span>Excellence</span> Through Collective Intelligence
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row leftSwipeWrap">

                @foreach ($team as $item)
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-item left-swipe">
                            <div class="team-img">
                                <div class="team-img-inner">
                                    <img src="/{{ $item->image }}" alt="{{ $item->alt }}" />
                                </div>
                            </div>
                            <div class="team-content">
                                <h4 class="title">
                                    <a href="#">{{ $item->name }}</a>
                                </h4>
                                <span class="designation">{{ $item->designation }}</span>
                                {{-- <a class="mail-at" href="#"><i class="tji-at"></i></a> --}}
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
            <h2 class="mb-4 text-start">Registrations / Certificates</h2>
            <div class="row g-4">
                <!-- Card 1 -->
                @foreach ($certificates as $certificate)
                    <div class="col-md-4 col-sm-6">
                        <div class="card text-center shadow-sm h-100">
                            <div class="card-body">
                                <div class="certifications-box">
                                    <img src="/{{ $certificate->image }}" alt="{{ $certificate->alt }}"
                                        class="img-fluid mb-3">
                                    <h5 class="card-title">{{ $certificate->title }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- Card 2 -->
                @foreach ($registrations as $registration)
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

            <!-- 🟩 Certifications -->
            {{-- <div class="mt-5">
                <h2 class="mb-4 text-start">Certifications</h2>
                <div class="row justify-content-start">
                    @foreach ($registrations as $registration)
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
            </div> --}}
        </div>
    </section>
@endsection
