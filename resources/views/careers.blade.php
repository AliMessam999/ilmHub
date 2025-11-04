@extends('include.header')
@section('content')
<!-- Content Start -->
<div id="contentWrapper">
    <div class="page-title title-1">
        <div class="container">
            <div class="row">
                <div class="cell-12">

                    <h1 class="fx" data-animate="fadeInLeft"><span>{!! __('Careers & Opportunity') !!}</span></h1>
                    <div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
                        <span class="bold">You Are In:</span><a href="#">Pages</a><span class="line-separate">/</span><a href="#">{!! __('Careers') !!}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="sectionWrapper mt-5">
        <div class="container p-3">
            @forelse ($careers as $feature)
                <div class="cell-4 service-box-2 fx" data-animate="fadeInDown">
                    <div class="box-2-cont">
                        {{-- <i class="icon main-bg fa fa-apple"></i> --}}
                        {!! __($feature->icon) !!}
                        <h4 class="main-color"><span data-hover="Clean & Powrfull">{{ __($feature->title) }}</span>
                        </h4>

                        <div class="clearfix"></div>
                        <div class="career">{!! __($feature->short_description) !!}</div>
                        <a class="r-more main-color" href="/careers/{{$feature->title}}">Read More</a>
                    </div>
                </div>
                @empty
                
                        {{-- <i class="icon main-bg fa fa-apple"></i> --}}
                       <h3> {!! __('No Current Jobs Available') !!}</h3>
                       
                
                </div>
            @endforelse
        </div>
    </div>
    


    



</div>
<!-- Content End -->
@stop

{{-- <div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div> --}}
