@extends('include.header')
@section('content')
<!-- Content Start -->
<div id="contentWrapper">
    <div class="page-title title-1">
        <div class="container">
            <div class="row">
                <div class="cell-12">

                    <h1 class="fx" data-animate="fadeInLeft"><span>{!! __($career->title) !!}</span></h1>
                    <div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
                        <span class="bold">You Are In:</span><a href="#">Careers</a><span class="line-separate">/</span><span>{!! __($career->title) !!}</span>
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
                        <a href="{{ url($career->image) }}" class="zoom">
                            <div class="mask"></div>
                            <img src="{{ url($career->image) }}" alt="Our Blog post image goes here">
                        </a>
                    </div>
                    <div class="p-3 description">
                    {!! __($career->description) !!}

                    <div class="col-md-6">
                        <b>Published On : <b> {{ \Carbon\Carbon::parse($career->created_at)->format('d M, Y') }}                        </b></b></div>
                        <b><b>

                            <div class="col-md-6">
                                <b>Apply At
                                    : </b> {!! $career->email !!}                        </div>
                            
                            
                            <div class="col-md-6">
                                <b>Last Date To Apply
                                    : </b> {{ \Carbon\Carbon::parse($career->last_date_to_apply)->format('d M, Y') }}                        </div>
                            </b></b>
                        </div>
    
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
                                                <a href="{{ url('project/details/'.$rc->title) }}">
                                                    {!! __($rc->title) !!}
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
                                    
                
                    </ul>
                </aside>
            </div>
        </div>
    </div>
    
</div>
<!-- Content End -->
@stop

{{-- <div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div> --}}
