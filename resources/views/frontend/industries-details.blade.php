<!-- resources/views/client/show.blade.php -->
@extends('layouts.app')
@section('content')


<section class="tj-page-header rounded-0" data-bg-image="assets/images/bg/pheader-bg.webp">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tj-page-header-content text-center">
                                    <h1 class="tj-page-title mt-5">Healthcare</h1>
                                    <div class="tj-page-link">
                                        <span><i class="tji-home"></i></span>
                                        <span>
                                            <a href="index.html">Home</a>
                                        </span>
                                        <span><i class="tji-arrow-right"></i></span>
                                        <span>
                                            <span>{{ $industriesDetails->title }}</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
    <section class="tj-blog-section section-gap slidebar-stickiy-container pb-2">
        <div class="container">
            <div class="row row-gap-5">
                <div class="col-lg-12">
                    <div class="post-details-wrapper">
                        <!-- Dynamic Image -->
                        <div class="blog-images wow fadeInUp" data-wow-delay=".1s">
                            {{-- @foreach ($industriesDetails as $client) --}}
                                <div class="blog-images wow fadeInUp" data-wow-delay=".1s"">
                                    <img src="/{{ $industriesDetails->image }}" alt="{{ $industriesDetails->alt }}" style="width: 100%;" />
                                </div>
                                <div class="blog-text wow fadeInUp" data-wow-delay=".3s">
                                    {!! $industriesDetails->description !!}
                                </div>
                            {{-- @endforeach --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





        <section class="tj-blog-section section-gap-x">
        <div class="container">
            <div class="row row-gap-5 mt-5 py-2">
                <div class="col-12">
                    <div class="sec-heading-wrap">
                        <div class="heading-wrap-content">
                            <div class="sec-heading">
                                <h2 class="sec-title title-anim">
                                    Insights and <span> Updates.</span>
                                </h2>
                            </div>
                            <div class="btn-wrap wow fadeInUp" data-wow-delay=".6s">
                                <a class="tj-primary-btn" href="/news/details/{{ $insightsupdates->title }}">
                                    <span class="btn-text"><span>See All</span></span>
                                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                @foreach ($insightsupdates as $blog)
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-item wow fadeInUp" data-wow-delay=".1s">
                            <div class="blog-thumb">
                                <a href="">
                                    <img src="/{{ $blog->image }}" alt="{{ $blog->alt }}">
                                    {{-- {{ dd($blog->image) }} --}}

                                </a>
                                <div class="blog-date">
                                    <span class="date">{{ \Carbon\Carbon::parse($blog->date)->format('d') }}</span>
                                    <span class="month">{{ \Carbon\Carbon::parse($blog->date)->format('M') }}</span>
                                </div>

                            </div>
                            <div class="blog-content">

                                <h4 class="title">
                                    <a href="">{{ $blog->title }}</a>
                                </h4>
                                <a class="text-btn" href="">
                                    <span class="btn-text"><span>Read More</span></span>
                                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
