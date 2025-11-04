@extends('include.header')
@section('content')
<!-- Content Start -->
<div id="contentWrapper">
    <div class="page-title title-1">
        <div class="container">
            <div class="row">
                <div class="cell-12">

                    <h1 class="fx" data-animate="fadeInLeft"><span>{!! __($solution->title) !!}</span></h1>
                    <div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
                        <span class="bold">You Are In:</span><a href="#">Service</a><span class="line-separate">/</span><span>{!! __($solution->title) !!}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="sectionWrapper">
        <div class="container">
            <div class="row">
                <div class="cell-9">
                    <div class="post-image details-img">
                        <a href="{{ url($solution->image) }}" class="zoom">
                            <div class="mask"></div>
                            <img src="{{ url($solution->image) }}" height="100%" width="100%" alt="Our Blog post image goes here">
                        </a>
                    </div>
                    {!! __($solution->description) !!}
                   
                    
    
                </div>
                <aside class="cell-3 right-sidebar">
                    <ul class="sidebar_widgets">
                        <li class="widget search-w fx" data-animate="fadeInRight">
                            <h3 class="widget-head">Blog Search</h3>
                            <div class="widget-content">
                                <form action="#" method="get">
                                    <input type="text" name="t" id="t2-search" class="txt-box" placeholder="Enter search keyword..." />
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
                                                <a href="{{ url('project/details/'.$rc->category->title) }}">
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
                                    <li><a href={{url('solutions/'.$item->id)}}>{!! $item->title !!}</a><span></span></li>
                                    
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
<!-- Content End -->
@stop

{{-- <div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div> --}}
