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
                    <h1 class="tj-page-title mt-3">Case Study</h1>
                    <div class="tj-page-link">
                        <span><i class="tji-home"></i></span>
                        <span>
                            <a href="index.html">Home</a>
                        </span>
                        <span><i class="tji-arrow-right"></i></span>
                        <span>
                            <a href="division.html">{{ $caseStudy->sub_category->name ?? 'N/A' }}</a>
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
                        <img src="/{{ $caseStudy->images[0]->image }}" alt="{{ $caseStudy->images[0]->alt }}" />
                    </div>
                    <h2 class="title title-anim">
                        {{ $caseStudy->title }}
                    </h2>
                    <div class="blog-text">
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
                    </div>
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
                        <h4 class="widget-title">Client</h4>
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
                        <div class="infos-item">
                            <div class="project-icons">
                                <i class="tji-budget"></i>
                            </div>
                            <div class="project-text">
                                <span>Funded by:</span>
                                <h6 class="title">
                                   {{ $caseStudy->funded_by }}
                                </h6>
                            </div>
                        </div>
                        <div class="infos-item">
                            <div class="project-icons">
                                <i class="tji-location-2"></i>
                            </div>
                            <div class="project-text">
                                <span>Location</span>
                                <h6 class="title">{{ $caseStudy->location }}</h6>
                            </div>
                        </div>
                        <div class="infos-item">
                            <div class="project-icons">
                                <i class="tji-chart"></i>
                            </div>
                            <div class="project-text">
                                <span>Industry</span>
                                <h6 class="title">
                                    {{ $caseStudy->industry->title ?? 'N/A' }}
                                </h6>
                            </div>
                        </div>
                        <div class="infos-item">
                            <div class="project-icons">
                                <i class="tji-window"></i>
                            </div>
                            <div class="project-text">
                                <span>Website</span>
                                <h6 class="title">{{ $caseStudy->website }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Blog Section -->



@endsection