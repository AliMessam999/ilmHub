@extends('layouts.app')

@section('content')
<style>
      @media (max-width: 480px) {
    .tj-page-header .container-fluid {
        min-height: 300px; /* Example: set mobile height */
        padding-top: 20px;
        padding-bottom: 20px;
          display: flex;
        flex-direction: column;
        justify-content: center; /* vertical center content */
        text-align: center; 
    }
}
</style>

<!-- start: Breadcrumb Section -->
<section
    class="tj-page-header m-0 mb-5 rounded-0 section-gap-x"
    data-bg-image="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                    <h1 class="tj-page-title mt-5 pt-2">Case Studies</h1>
                    <div class="tj-page-link">
                        <span><i class="tji-home"></i></span>
                        <span>
                            <a href="/">Home</a>
                        </span>
                        <span><i class="tji-arrow-right"></i></span>
                        <span>
                            <span>Case Studies</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="page-header-overlay" data-bg-image=""></div> -->
</section>
<!-- end: Breadcrumb Section -->


<!-- start: Project Section -->
<section class="tj-project-section-3 mb-5 bg-white section-gap section-gap-x">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-heading-wrap text-center text-md-start">
                    <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>Proud Projects</span>
                    <div class="heading-wrap-content">
                        <div class="sec-heading style-3">
                            <h2 class="sec-title title-anim text-black">
                                Breaking Boundaries, Building Dreams
                            </h2>
                        </div>
                        <div
                            class="slider-navigation d-none d-md-inline-flex wow fadeInUp"
                            data-wow-delay=".5s">
                            <!-- <div class="slider-prev">
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
                        </div> -->
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
                    <div class=" project-slider-2s">
                        <div class="swiper-wrapper row">
                            @foreach($caseStudies as $caseStudy)
                            <div class="col-md-4 mt-3 mb-4">
                                <div class="project-item">
                                    <div class="project-img">
                                        <img
                                            src="/{{ $caseStudy->images[0]->image }}"
                                            alt="{{ $caseStudy->alt }}" style="min-height:250px;max-height: 250px" />
                                    </div>
                                    <div class="project-content" style="height: 150px;">
                                        <span class="categories"><a href="/case-study/{{ $caseStudy->title }}">Case Study</a></span>
                                        <div class="project-text">
                                            <h4 class="title">
                                                <a href="/case-study/{{ $caseStudy->title }}">{{ $caseStudy->title }}</a>
                                            </h4>
                                            <a
                                                class="project-btn"
                                                href="/case-study/{{ $caseStudy->title }}">
                                                <i class="tji-arrow-right-big"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            @endforeach
                        </div>
                        <!-- <div class="swiper-pagination-area"></div> -->
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        {{ $caseStudies->links() }}
                    </div>
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
    <div class="bg-shape-3">
        <img src="/frontend_assets/images/shape/shape-blur.svg" alt="" />
    </div>
</section>
<!-- end: Project Section -->


@endsection