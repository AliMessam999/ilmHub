@extends('include.header')
@section('content')
<!-- Content Start -->
<div id="contentWrapper">
    <div class="page-title title-1">
        <div class="container">
            <div class="row">
                <div class="cell-12">

                    <h1 class="fx" data-animate="fadeInLeft"><span>{!! __('Services') !!}</span></h1>
                    <div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
                        <span class="bold">You Are In:</span><a href="#">Pages</a><span class="line-separate">/</span><a href="#">{!! __('services') !!}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="sectionWrapper mt-5">
        <div class="container">
            @foreach ($data_feature as $feature)
                <div class="cell-4 service-box-2 fx" data-animate="fadeInDown">
                    <div class="box-2-cont">
                        {{-- <i class="icon main-bg fa fa-apple"></i> --}}
                        {!! __($feature->icon) !!}
                        <h4 class="main-color"><span data-hover="Clean & Powrfull">{{ __($feature->title) }}</span>
                        </h4>

                        <div class="clearfix"></div>
                        <div class="career">{!! __($feature->description) !!}</div>
                        <a class="r-more main-color" href="/service/details/{{$feature->title}}">Read More</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    


    <div class="sectionWrapper">
        <div class="container">
            <h3 class="block-head">Recent Solutions</h3>
            <div class="portfolioGallery portfolio">
                 @forelse($solutions as $item)
            
                <div>
                
                    <div class="portfolio-item">
                        <div class="img-holder">
                            <div class="img-over">
                                <a href="{{ url('/project/details/'.$item->category->title) }}" class="fx link"><b class="fa fa-link"></b></a>
                                <a href="{{ url($item->image) }}" class="fx zoom" data-gal="prettyPhoto[pp_gal]" title="Project Title"><b class="fa fa-search-plus"></b></a>
                            </div>
                            <a href="{{ url('/project/details/'.$item->category->title) }}"><img alt="" src="{{ url($item->image) }} " style="height: 170px;"></a>
                        </div>
                        <div class="name-holder">
                                <a href="{{ url('/project/details/'.$item->category->title) }}" class="project-name">{!! $item->category->title !!}</a>
                                <span class="project-options">{!! $item->category->parent_item->title !!}</span>
                            </div>
                    </div>
            
                </div>
                  @empty
                  <div></div>
                  @endforelse
            
            </div>
            <div class="clearfix"></div>
        </div>
    </div>



</div>
<!-- Content End -->
@stop

{{-- <div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div> --}}
