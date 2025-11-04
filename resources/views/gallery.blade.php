@extends('include.header')
@section('content')
    <!-- Content Start -->
    <div class="pageWrapper">
        <!-- Content Start -->
        <div id="contentWrapper">

            <div class="sectionWrapper">
                <div class="container">
                    <h3 class="block-head">Our Gallery</h3>
                    <p>CDigital Gallery Images of Projects and Celebrations </p>
                    <hr class="margin-bottom-35">


                    <!-- This is the gallery container -->

                    <div class="our_gallery">
                        <div id="gallery" class="content cell-9">
                            <div id="controls" class="controls"></div>
                            <div class="slideshow-container">
                                <div id="loading" class="loader"></div>
                                <div id="slideshow" class="slideshow"></div>
                            </div>
                            <div id="caption" class="caption-container"></div>
                        </div>
                        <div id="thumbs" class="navigation cell-3">

                            <ul class="thumbs noscript">
                                @forelse($gallery as $item)
                                    <li>
                                        <a class="thumb" name="leaf" href="{!! url($item->image) !!}"
                                            title="{!! __($item->title) !!}">
                                            <img src="{!! url($item->image) !!}" style="width: 50px; height: 50px;"
                                                alt="{!! __($item->alt) !!}" />
                                        </a>
                                        <div class="caption">
                                            <div class="download">
                                                <a class="zoom" href="{!! url($item->image) !!}">Download Original</a>
                                            </div>
                                            <div class="image-title">{!! __($item->title) !!}</div>
                                            <div class="image-desc">{!! __($item->description) !!}</div>
                                        </div>
                                    </li>
                                @empty
                                    <li></li>
                                @endforelse
                            </ul>

                        </div>
                        <div style="clear: both;"></div>
                    </div>


                    <!-- End of gallery container -->


                </div>
            </div>
        </div>
        <!-- Content End -->

    </div>

    <!-- Content End -->
@stop

{{-- <div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div> --}}
