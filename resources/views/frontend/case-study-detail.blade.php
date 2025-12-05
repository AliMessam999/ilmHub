@extends('layouts.app')

@section('content')


<!-- start: Breadcrumb Section -->
<section
    class="tj-page-header rounded-0"
    data-bg-image="/frontend_assets/images/project/water.jpg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                    <h1 class="tj-page-title mt-3">{{ $caseStudy->title }}</h1>
                    <div class="tj-page-link">
                        <span><i class="tji-home"></i></span>
                        <span>
                            <a href="index.html">Home</a>
                        </span>
                        <span><i class="tji-arrow-right"></i></span>
                        <span>
                            {{-- @php
                                dd($caseStudy->sub_category_id->title);
                            @endphp --}}
                            <a href="division.html">{{ $caseStudy->sub_category->title ?? 'Case-Studies' }}</a>
                        </span>
                        <span><i class="tji-arrow-right"></i></span>
                        <span>
                            <span>{{ $caseStudy->title }}</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="page-header-overlay" data-bg-image="assets/images/shape/pheader-overlay.webp"></div> -->
</section>
<!-- end: Breadcrumb Section -->

<!-- start: Blog Section -->
<section
    class="tj-blog-section section-gap slidebar-stickiy-container">
    <div class="container">
        <div class="row row-gap-5">
            <div class="col-lg-8">
                <div class="post-details-wrapper">
                    <div class="blog-images wow fadeInUp" data-wow-delay=".1s">
                        {{-- <img src="/{{ $caseStudy->images[0]->image }}" alt="{{ $caseStudy->images[0]->alt }}" /> --}}
                    </div>
                    @php
                        $description = is_string($caseStudy->description) ? json_decode($caseStudy->description) : $caseStudy->description;
                        $h2Content = isset($description->h2) ? $description->h2 : null;
                        $h3Content = isset($description->h3) ? $description->h3 : '';
                        $h3SecondContent = isset($description->h3_second) ? $description->h3_second : null;
                        $normalContent = isset($description->description) ? $description->description : $caseStudy->description;
                    @endphp
                    @if($h2Content)
                    <h2 class="title title-anim">
                        {!! $h2Content !!}
                    </h2>
                    @endif
                    <h3 class="wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        {!! $h3Content !!}
                    </h3>
                    <div class="blog-text">
                        {!! $normalContent !!}
                    </div>
                    @if($h3SecondContent)
                    <h3 class="wow fadeInUp second-heading" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        {!! $h3SecondContent !!}
                    </h3>
                    @endif

                    <div class="images-wrap">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="image-box wow fadeInUp" data-wow-delay=".3s">
                                    <a class="gallery vbox-item" data-gall="gallery" href="{{ asset('assets/images/project/2.png') }}">
                                        <img src="{{ asset('assets/images/project/2.png') }}" alt="Image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="image-box wow fadeInUp" data-wow-delay=".3s">
                                    <a class="gallery vbox-item" data-gall="gallery" href="{{ asset('assets/images/project/3.png') }}">
                                        <img src="{{ asset('assets/images/project/3.png') }}" alt="Image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="image-box wow fadeInUp" data-wow-delay=".5s">
                                    <a class="gallery vbox-item" data-gall="gallery" href="{{ asset('assets/images/project/4.png') }}">
                                        <img src="{{ asset('assets/images/project/4.png') }}" alt="Image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="blog-text">
                        {!! $caseStudy->description !!}
                         <div class="images-wrap">
                            <div class="row">
                                @foreach($caseStudy->images as $image)
                                <div class="col-sm-6">
                                 <div
                                        class="image-box wow fadeInUp"
                                        data-wow-delay=".3s">
                                        <a
                                            class="gallery"
                                            data-gall="gallery"
                                            href="/{{$image->image}}"><img
                                                src="/{{$image->image}}"
                                                alt="{{$image->alt}}" /></a>
                                    </div> 
                                </div>
                                @endforeach
                               
                            </div>
                        </div> 
                    </div> --}}
                    <div
                        class="tj-post__navigation mb-0 wow fadeInUp"
                        data-wow-delay=".3s">
                        <!-- previous post -->
                        <div class="tj-nav__post previous">
                            <div class="tj-nav-post__nav prev_post">
                                <a href="{{ $previous ? '/case-study/'.$previous->title:'#' }}"><span><i class="tji-arrow-left"></i></span>Previous</a>
                            </div>
                        </div>
                        <div class="tj-nav-post__grid">
                            <a href="/case-studies"><i class="tji-window"></i></a>
                        </div>
                        <!-- next post -->
                        <div class="tj-nav__post next">
                            <div class="tj-nav-post__nav next_post">
                                <a href="{{ $next ? '/case-study/'.$next->title:'#' }}">Next<span><i class="tji-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="tj-main-sidebar slidebar-stickiy">
                    <div
                        class="tj-sidebar-widget widget-categories wow fadeInUp"
                        data-wow-delay=".1s">
                        <h4 class="widget-title">Client Overview</h4>
                        <div class="infos-item">
                            <div class="project-icons">
                                <i class="tji-user"></i>
                            </div>
                            <div class="project-text">
                                <span>Name</span>
                                <h6 class="title">
                                    {{ $caseStudy->client_name }}
                                </h6>
                            </div>
                        </div>
                        @if($caseStudy->user_details)
                        <div class="infos-item">
                            {{-- <div class="project-icons">
                                <i class="tji-info"></i>
                            </div> --}}
                            <div class="project-text">
                                {{-- <span>Details</span> --}}
                                <p class="">
                                    {{ $caseStudy->user_details }}
                                </p>
                            </div>
                        </div>
                        @endif
                        {{-- Funded By --}}
                        {{-- <div class="infos-item">
                            <div class="project-icons">
                                <i class="tji-budget"></i>
                            </div>
                            <div class="project-text">
                                <span>Funded by:</span>
                                <h6 class="title">
                                   {{ $caseStudy->funded_by }}
                                </h6>
                            </div>
                        </div> --}}

                        {{-- Location --}}
                        {{-- <div class="infos-item">
                            <div class="project-icons">
                                <i class="tji-location-2"></i>
                            </div>
                            <div class="project-text">
                                <span>Location</span>
                                <h6 class="title">{{ $caseStudy->location }}</h6>
                            </div>
                        </div> --}}

                        {{-- Industry --}}
                        {{-- <div class="infos-item">
                            <div class="project-icons">
                                <i class="tji-chart"></i>
                            </div>
                            <div class="project-text">
                                <span>Industry</span>
                                <h6 class="title">
                                    {{ $caseStudy->industry->title ?? 'N/A' }}
                                </h6>
                            </div>
                        </div> --}}

                        {{-- Website --}}
                        {{-- <div class="infos-item">
                            <div class="project-icons">
                                <i class="tji-window"></i>
                            </div>
                            <div class="project-text">
                                <span>Website</span>
                                <h6 class="title">{{ $caseStudy->website }}</h6>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Blog Section -->



@endsection