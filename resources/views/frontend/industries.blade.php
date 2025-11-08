@extends('layouts.app')

@section('content')
    @include('components.slider')
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
                                @foreach ($industries as $industry)
                                    <div class="swiper-slide">
                                        <div class="project-item">
                                            <div class="project-img">
                                                <a href="{{ route('industry.data', $industry->alt) }}">
                                                    <img src="/{{ $industry->image }}" alt="{{ $industry->title }}">
                                                </a>
                                            </div>
                                            <div class="project-content">
                                                <span class="categories">
                                                    <a href="{{ route('industry.data', $industry->alt) }}">
                                                        {{ $industry->title }}
                                                    </a>
                                                </span>
                                                <div class="project-text">
                                                    <h4 class="title">
                                                        <a href="{{ route('industry.data', $industry->alt) }}">
                                                            {{ $industry->title }}
                                                        </a>
                                                    </h4>
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
@endsection
