@extends('layouts.app')
@section('content')
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
                                <a class="tj-primary-btn" href="{{ route('insightsupdates.blogs') }}">
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
                                <a href="{{ route('insightsupdates.blogs', $blog->title) }}">
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
                                    <a href="{{ route('insightsupdates.blogs', $blog->title) }}">{{ $blog->title }}</a>
                                </h4>
                                <a class="text-btn" href="{{ route('insightsupdates.blogs', $blog->title) }}">
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
