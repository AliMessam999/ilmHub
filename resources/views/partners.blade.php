@extends('include.header')
@section('content')
<div id="contentWrapper">
    <div class="page-title title-1">
        <div class="container">
            <div class="row">
                <div class="cell-12">
                    <h1 class="fx" data-animate="fadeInLeft">Our <span>Partners</span></h1>
                    <div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
                        <span class="bold">You Are In:</span><a href="#">Home</a><span class="line-separate">/</span><a href="#">About </a><span class="line-separate">/</span><span>Partners</span>
                    </div>
                </div>
            </div>
        </div>\
    </div>
     <!-- our clients block start -->
     <div class="sectionWrapper p-3">
        <div class="container">
            <div class="portfolio-filterable">
                <div class="row">
                @if(!empty($partners))
                    @foreach ($partners as $si)
                        
                        <div class="portfolio-items">
                            <div class="cell-3 develop" data-category="develop">
                        
                                <div class="portfolio-item">
                                        
                                        <div class="img-over">
                                            <a href="#"><b class="fa fa-link"></b></a>
                                            <a href="{!! url($si->image) !!}"  style="width: 220px; height: 80px;"data-gal="prettyPhoto[pp_gal]"></a>
                                        </div>
                                        <img alt="{!! __($si->alt) !!}" src="{!! url($si->image) !!}" >
                                    
                                    
                                </div>
                        
                            </div>
                    
                        </div>
                    @endforeach
                @endif
                    </div>
            </div>
        </div>
    </div>
    <!-- our clients block end -->
</div>
@stop