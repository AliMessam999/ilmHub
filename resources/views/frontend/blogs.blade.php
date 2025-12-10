@extends('layouts.app')

@section('content')

<!-- start: Breadcrumb Section -->
<section
    class="tj-page-header rounded-0"
    data-bg-image="">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                    <h1 class="tj-page-title mt-5">Insights & Updates</h1>
                    <div class="tj-page-link">
                        <span><i class="tji-home"></i></span>
                        <span>
                            <a href="index.html">Home</a>
                        </span>
                        <span><i class="tji-arrow-right"></i></span>
                        <span>
                            <span>Insights & Updates</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- end: Breadcrumb Section -->

<!-- start: Blog Section -->
<section
    class="tj-blog-section section-gap slidebar-stickiy-container">
    <div class="container">
        <div class="row row-gap-5">
            <div class="col-lg-8">
                <div class="blog-post-wrapper">
                    
                    @foreach($news as $item)
                    @php
                    $date = \Carbon\Carbon::parse($item->date); // assuming your variable is $blog->date
                    @endphp
                    <article
                        class="blog-item wow fadeInUp"
                        data-wow-delay=".1s">
                        <div class="blog-thumb">
                            <a href="{{ url('/news/details/' . $item->title) }}"><img src="{{ $item->image }}" alt="" /></a>
                            <div class="blog-date">
                                <span class="date">{{ $date->format('d') }}</span>
                                <span class="month">{{ $date->format('M') }}</span>
                            </div>

                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="categories"><a href="#">{{ $item->category->title }}</a></span>
                                <span>By
                                    <a href="#">Ellinien Loma</a></span>
                            </div>
                            <h3 class="title">
                                <a href="{{ url('/news/details/' . $item->title) }}">{{ $item->title }}</a>
                            </h3>
                            <p class="desc">
                                {!! $item->description !!}
                            </p>
                            <a class="text-btn" href="{{ url('/news/details/' . $item->title) }}">
                                <span class="btn-text"><span>Read More</span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                            </a>
                        </div>
                    </article>
                    @endforeach

                    <!-- <div class="tj-pagination d-flex">
                        <ul>
                            <li>
                                <span aria-current="page" class="page-numbers current">1</span>
                            </li>
                            <li>
                                <a class="page-numbers" href="#">2</a>
                            </li>
                            <li>
                                <a class="page-numbers" href="#">3</a>
                            </li>
                            <li>
                                <a class="next page-numbers" href="#"><i class="tji-arrow-right-long"></i></a>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-4">
                <div class="tj-main-sidebar slidebar-stickiy">
                    <div
                        class="tj-sidebar-widget widget-search wow fadeInUp"
                        data-wow-delay=".1s">
                        <h4 class="widget-title text-center text-md-start">Search here</h4>
                        <div class="search-box">
                            <form action="#">
                                <input
                                    type="search"
                                    name="search"
                                    id="searchTwo"
                                    placeholder="Search here" />
                                <button type="submit" value="search">
                                    <i class="tji-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    <div
                        class="tj-sidebar-widget widget-categories wow fadeInUp"
                        data-wow-delay=".5s">
                        <h4 class="widget-title text-center text-md-start">Categories</h4>
                        <ul>
                            @foreach($category as $cat)
                            <li>
                                <a href="#">{{ $cat->title }}<span class="number">({{ $cat->news_count }})</span></a>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                    <div
                        class="tj-sidebar-widget widget-tag-cloud wow fadeInUp"
                        data-wow-delay=".7s">
                        <h4 class="widget-title text-center text-md-start">Tags</h4>
                        <nav>
                            <div class="tagcloud">
                                <a href="blog-details.html">Growth</a>
                                <a href="blog-details.html">Success</a>
                                <a href="blog-details.html">Innovate</a>
                                <a href="blog-details.html">Lead</a>
                                <a href="blog-details.html">Impact</a>
                                <a href="blog-details.html">Focus</a>
                                <a href="blog-details.html">Tech</a>
                                <a href="blog-details.html">Optimize</a>
                                <a href="blog-details.html">Results</a>
                                <a href="blog-details.html">Drive</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Blog Section -->
        @push('styles')
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <style>
            /* Target screens 480px or smaller */
@media (max-width: 480px) {
    .tj-page-header .container {
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
    @endpush



@endsection