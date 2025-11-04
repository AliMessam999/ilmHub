@extends('include.header')
@section('content')
<div class="page-title title-1">
    <div class="container">
        <div class="row">
            <div class="cell-12">
                <h1 class="fx animated fadeInLeft" data-animate="fadeInLeft">Our <span>Solutions</span></h1>
                <div class="breadcrumbs main-bg fx animated fadeInUp" data-animate="fadeInUp">
                    <span class="bold">You Are In:</span><a href="/">Home</a><span class="line-separate">/</span><a href="/solutions">Solutions </a><span class="line-separate">/</span><span></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sectionWrapper mt-5">
    <div class="container">
    
        <div class="portfolio-box">
            <div class="portfolio-filterable">
                <div class="row">
                    <div class="gry-bg skew-25">
                        <span class="skew25 left filter-by">Filter by:</span>
                        <ul id="filters">
                            @foreach ($categories as $key => $category)
                                @if ($category->sub_categories->count() > 0 && $category->sub_categories[0]->solutions->count() > 0)
                                    <li class="{{ $key == 0 ? 'active' : '' }}"><a href="javascript:0;"
                                            class="skew25 filter cat{{ $category->id }}"
                                            data-filter=".{{ $category->id }}">{!! __($category->title) !!}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="portfolio-items" id="container">
                        @forelse($categories as $category)
                            <div class="cell-12 {{ $category->id }}" >{!! $category->description !!}</div>
                            @foreach ($category->sub_categories as $key => $sub_category)
                            @if($sub_category->solutions->count() > 0)
                                
                                <div class="cell-3 {{ $category->id }}" data-category="{{ $category->id }}"
                                    id="<?php echo $key; ?>" style="<?php if ($key > 7) {
                                        echo 'display: none';
                                    } ?>">
                                    <div class="portfolio-item">
                                        <div class="img-holder">
                                            <div class="img-over">
                                                <a href="#" class="fx link"><b class="fa fa-link"></b></a>
                                                <a href="{!! $sub_category->solutions->count() > 0
                                                    ? url($sub_category->solutions[0]->image)
                                                    : 'site_asset/images/portfolio/1.jpg' !!}" class="fx zoom"
                                                    data-gal="prettyPhoto[pp_gal]" title="Project Title"><b
                                                        class="fa fa-search-plus"></b></a>
                                            </div>
                                            <img alt="" style="height:170px"
                                                src="{!! $sub_category->solutions->count() > 0
                                                    ? url($sub_category->solutions[0]->image)
                                                    : 'site_asset/images/portfolio/1.jpg' !!}">
                                        </div>
                                        <div class="name-holder">
                                            <a href="{{url('/project/details/'.$sub_category->title)}}" class="project-name">{!! $sub_category->solutions->count() > 0 ? $sub_category->title : '' !!}</a>
                                            <span class="project-options">{!! __($category->title) !!}</span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        @empty
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
       
    </div>
</div>
{{-- projects End --}}
@stop
@section('scripts')
<script>
    $(window).load(function() {

        $('.cat1').trigger('click');

    });
</script>
@stop
