@extends('include.header')
@section('content')
<!-- Content Start -->
<div id="contentWrapper p-3">
    <div class="page-title title-1">
        <div class="container">
            <div class="row">
                <div class="cell-12">

                    <h1 class="fx animated fadeInLeft" data-animate="fadeInLeft">Terms <span>of use</span></h1>
                    <div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
                        <span class="bold">You Are In:</span><a href="#">Home</a><span class="line-separate">/</span><span>{!! __('Privacy Policy') !!}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="sectionWrapper p-3">
        <div class="container">
            <div class="row">
                <div class="cell-12">
                   
                    {!!$terms ?  __($terms->description) : '' !!}
                   
                    
    
                </div>
            </div>
        </div>
    </div>
    
</div>
<!-- Content End -->
@stop

{{-- <div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div> --}}
