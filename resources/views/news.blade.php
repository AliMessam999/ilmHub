@extends('include.header')
@section('content')
    <!-- Content Start -->
    <div id="contentWrapper">
        <div class="page-title title-1">
            <div class="container">
                <div class="row">
                    <div class="cell-12">
                        <h1 class="fx" data-animate="fadeInLeft">Latest <span>News</span></h1>
                        <div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
                            <span class="bold">You Are In:</span><a href="#">Home</a><span
                                class="line-separate">/</span><a href="#">Latest News</a><span
                                class="line-separate">/</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sectionWrapper">
            <div class="container">
                <div class="row">
                    <div class="cell-9 masonry">
                        <div class="blog-posts">
                            @forelse($news as $item)
                                <div class="post-item fx" data-animate="fadeInLeft">
                                    <div class="post-image">
                                        <a href="{{ url('/news/details/' . $item->title) }}">
                                            <div class="mask"></div>
                                            <div class="post-lft-info">
                                                <div class="main-bg">
                                                    {{ \Carbon\Carbon::parse($item->date)->format('d M, Y') }}
                                                </div>
                                            </div>
                                            <img src="{{ url($item->image) }}" width="393" height="178"
                                                alt="{{ url($item->alt) }}">
                                        </a>
                                    </div>
                                    <article class="post-content" style="height: 225px !important;">
                                        <div class="post-info-container">
                                            <div class="post-info">
                                                <h2><a class="main-color"
                                                        href="{{ url('/news/details/' . $item->title) }}">{{ __($item->title) }}</a>
                                                </h2>
                                                <ul class="post-meta">
                                                    <li><i class="fa fa-folder-open"></i>{{ $item->category->title }} <a
                                                            href="#"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p>{!! substr(html_entity_decode($item->description), 0, 200) !!} <a class="read-more"
                                                href="{{ url('/news/details/' . $item->title) }}">
                                                Read more</a> </p>
                                    </article>
                                </div>
                            @empty
                            @endforelse


                            <div class="pager skew-25">
                                <ul>

                                    <li><a class="skew25" href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li class="selected"><span class="skew25">1</span></li>


                                    <li><a class="skew25" href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <aside class="cell-3 right-sidebar">
                        <ul class="sidebar_widgets">
                            <li class="widget search-w fx" data-animate="fadeInRight">
                                <h3 class="widget-head">Blog Search</h3>
                                <div class="widget-content">
                                    <form action="#" method="get">
                                        <input type="text" name="t" id="t2-search" class="txt-box"
                                            placeholder="Enter search keyword..." />
                                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </li>

                            <li class="widget r-posts-w fx" data-animate="fadeInRight">
                                <h3 class="widget-head">Recent Posts</h3>
                                <div class="widget-content">
                                    <ul>
                                        @forelse($recent as $rc)
                                            <li>
                                                <div class="post-img">
                                                    <img src="images/people/1.jpg" alt="">
                                                </div>
                                                <div class="widget-post-info">
                                                    <h4>
                                                        <a href="{{ url('project/details/' . $rc->category->title) }}">
                                                            {!! __($rc->category->title) !!}
                                                        </a>
                                                    </h4>

                                                </div>
                                            </li>
                                        @empty
                                            <li>
                                                <div class="post-img">
                                                    <img src="images/people/1.jpg" alt="">
                                                </div>
                                                <div class="widget-post-info">
                                                    <h4>
                                                        <a href="#">
                                                            {!! __('No Record Found') !!}
                                                        </a>
                                                    </h4>

                                                </div>
                                            </li>
                                        @endforelse
                                    </ul>
                                </div>
                            </li>

                            <li class="widget blog-cat-w fx" data-animate="fadeInRight">
                                <h3 class="widget-head">Solutions Categories</h3>
                                <div class="widget-content">
                                    @forelse($category as $item)
                                        <ul class="list list-ok alt">
                                            <li><a
                                                    href={{ url('solutions/' . $item->id) }}>{!! $item->title !!}</a><span></span>
                                            </li>

                                        </ul>
                                    @empty
                                        <ul class="list list-ok alt">
                                            <li><span>No Category Found</a><span></span></li>

                                        </ul>
                                    @endforelse
                                </div>
                            </li>


                        </ul>
                    </aside>
                </div>
            </div>
        </div>

    </div>


@stop
