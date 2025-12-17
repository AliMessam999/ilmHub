@extends('layouts.app')

@section('content')

<style>
    .tj-project-section-3{
        height: 800px;
    }
    .division-item:hover .service-reveal-bg{
        z-index: 5 !important;
        /* transform: none !important; */
    }
    .division-item:hover + .division-item:not(:hover){
        z-index: -1;
    }
    
    .project-item {
        height: 450px !important;
        display: flex;
        flex-direction: column;
    }
    
    .project-content {
        flex: 1;
        display: flex;
        flex-direction: column;
        /* justify-content: space-between; */
        padding: 20px;
    }

    @media (max-width: 480px) {
        .sec-heading-wrap .sub-title {
            display: block;
            text-align: center;
        }
        
        .tj-page-title {
            font-size: 32px !important;
        }
        .tj-service-section{
            padding-bottom: 0 !important;
        }

        
    }

</style>

<!-- start: Breadcrumb Section -->
<section
    class="tj-page-header m-0 mb-5 rounded-0 section-gap-x"
    data-bg-image="{{ $category->image ? asset($category->image) : asset('frontend_assets/images/bg/hydromet-banner.png') }}">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                    <h1 class="tj-page-title mt-5 pt-2">{{ $category->title }}</h1>
                    <div class="tj-page-link">
                        <span><i class="tji-home"></i></span>
                        <span>
                            <a href="/">Home</a>
                        </span>
                        <span><i class="tji-arrow-right"></i></span>
                        <span>
                            <span>{{ $category->title }}</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="page-header-overlay" data-bg-image=""></div> -->
</section>
<!-- end: Breadcrumb Section -->

<!-- start: Service Section -->
<section class="tj-service-section service-3 section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-heading style-3 text-center">
                    <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>Our Solutions</span>
                    <h2 class="sec-title title-anim">
                        Tailor Business Solutions for Corporates
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="service-wrapper">
                   
                    @foreach($category->sub_categories as $sub_category)
                    <div
                        class="division-item service-item style-3 wow fadeInUp"
                        data-wow-delay=".3s">
                        <div class="service-content-wrap">
                            <div class="service-title">
                                <div class="service-icon">
                                    <i class="tji-service-1"></i>
                                </div>
                                <h4 class="title">
                                    <a href="{{ $sub_category->slug }}">{{ $sub_category->title }}</a>
                                </h4>
                            </div>
                            <div class="service-content">
                                <span class="desc">{!!($sub_category->solutions[0]->alt) !!}</span>
                                {{-- <span class="desc">{!! substr($sub_category->solutions[0]->description ?? 'N/A', 0, 110) !!}</span> --}}
                            </div>
                        </div>
                        <div
                            class="service-reveal-bg"
                            data-bg-image="/{{ $sub_category->solutions[0]->image ?? '' }}">
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Service Section -->

<!-- start: Project Section -->
@if($caseStudies->count() > 0)
<section class="tj-project-section-3 mb-5 section-gap section-gap-x" style="">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-heading-wrap">
                    <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>Proud Projects</span>
                    <div class="heading-wrap-content">
                        <div class="sec-heading style-3">
                            <h2 class="sec-title title-anim">
                                Breaking Boundaries, Building Dreams
                            </h2>
                        </div>
                        <div
                            class="slider-navigation d-none d-md-inline-flex wow fadeInUp"
                            data-wow-delay=".5s">
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
                <div
                    class="project-wrapper wow fadeInUp"
                    data-wow-delay=".4s">
                    <div class="swiper project-slider-2">
                        <div class="swiper-wrapper">
                            @foreach($caseStudies as $caseStudy)
                            <div class="swiper-slide">
                                <div class="project-item">
                                    <div class="project-img project-img-33">
                                        <img
                                            src="/{{ $caseStudy->images[0]->image ?? '' }}"
                                            alt="{{ $caseStudy->images[0]->alt ?? '' }}"
                                            style="height: 250px; object-fit: cover;" />
                                    </div>
                                    <div class="project-content" style="position: relative;">
                                        <span class="categories"><a href="portfolio-details.html">Case Study</a></span>
                                        {{-- <span class="categories"><a href="portfolio-details.html">{{ $caseStudy->category->title ?? '' }}</a></span> --}}
                                        <div class="project-text mt-3">
                                            <h4 class="title" style="text-align: left">
                                                <a 
                                                    class="my-0"
                                                    href="/case-study/{{ $caseStudy->slug ?? $caseStudy->title }}" 
                                                    style="font-size: 20px;">{{ $caseStudy->title }}</a>
                                            </h4>
                                        </div>
                                        <a
                                            class="project-btn"
                                            style="position: absolute; bottom: 20px; right: 20px;"
                                            href="/case-study/{{ $caseStudy->slug ?? $caseStudy->title }}">
                                            <i class="tji-arrow-right-big"></i>
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
    </div>
</section>
@endif
<!-- end: Project Section -->

<script>
    

       document.addEventListener("DOMContentLoaded", function () {
    if (window.innerWidth <= 480 && document.querySelector(".project-slider-2")) {
        var teamSwiper = new Swiper(".project-slider-2", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    }
});


</script>

@endsection