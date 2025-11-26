@extends('layouts.app')

@section('content')

<!-- start: Breadcrumb Section -->
<section class="tj-page-header rounded-0">
    <!-- <div class="slider-bg-image">
             <video
              data-speed="0.8"
              height="100%"
              autoplay
              loop
              playsinline
              muted
            >
              <source src=".//frontend_assets/video/hydromet.mp4" type="video/mp4" />
            </video>
           </div> -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                    <h1 class="tj-page-title pt-5">{{ $sub_division->title }}</h1>
                    <div class="tj-page-link">
                        <span><i class="tji-home"></i></span>
                        <span>
                            <a href="/">Home</a>
                        </span>
                        <span><i class="tji-arrow-right"></i></span>
                        <span>
                            <a href="{{ $sub_division->parent_item->slug }}">{{ $sub_division->parent_item->title }}</a>
                        </span>
                        <span><i class="tji-arrow-right"></i></span>
                        <span>
                            <span>{{ $sub_division->title }}</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="page-header-overlay" data-bg-image="/frontend_assets/images/shape/pheader-overlay.webp"></div> -->
</section>
<!-- end: Breadcrumb Section -->

<!-- start: Blog Section -->
<section
    class="tj-blog-section section-gap slidebar-stickiy-container">
    <div class="container">
        <div class="row row-gap-5">
            <div class="col-lg-8">
                <div class="post-details-wrapper">
                    <div
                        class="blog-images wow fadeInLeft"
                        data-wow-delay=".2s"></div>
                    <h2 class="title title-anim">
                        {{ $solution->title }}
                    </h2>
                    <div class="blog-text wow fadeInUp" data-wow-delay=".3s">
                        {!! $solution->description !!}

                        @php

                            use App\Models\CustomerService;                            
                                $servicesWithImages = CustomerService::where('solution_id', $solution->id)
                                    ->where('label', 'withImage')
                                    ->get();
                                // dd($servicesWithImages);
                                $servicesWithoutImages = CustomerService::where('solution_id', $solution->id)
                                ->where('label', 'withoutImage')
                                ->get();
                                
                                $firstServiceWithoutImage = $servicesWithoutImages->first();
                        @endphp
                        
                        @if($servicesWithImages->count() > 0)
                        <div class="images-wrap">
                            <div class="row">
                                @foreach($servicesWithImages as $service)
                                @php
                                    // dd($service);
                                @endphp
                                <div class="col-sm-6">
                                    <div class="division-detail">
                                        <div class="image-box" data-bg-image="/{{ $service->image }}">
                                            <div class="content">
                                                <h5>{{ $service->title }}</h5>
                                                {{-- @php
                                                    dd($service->description);
                                                @endphp --}}
                                                <p>{{ $service->description }}</p>

                                                <a class="tj-primary-btn" href="/contact">
                                                    <span class="btn-text"><span>Let's Talk</span></span>
                                                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                        
                        @if($firstServiceWithoutImage)
                        <h3 class="wow fadeInUp" data-wow-delay=".3s">
                            {{ $firstServiceWithoutImage->title }}
                        </h3>
                        <p class="wow fadeInUp" data-wow-delay=".3s">
                            {{ $firstServiceWithoutImage->description }}
                        </p>
                        @else
                        <h3 class="wow fadeInUp" data-wow-delay=".3s">
                            <!-- Our Range of Customer Services -->
                        </h3>
                        <p class="wow fadeInUp" data-wow-delay=".3s">
                            <!-- At Bexon, we don't just focus on solving customer
                            problems—we focus on creating experiences that delight
                            and build lasting relationships. Whether it's through
                            improving customer service operations, leveraging
                            technology, or designing more engaging digital
                            experiences, our team is here to help you exceed your
                            customers' expectations every time. We help you
                            understand your customers deeply, optimize their
                            experience. -->
                        </p>
                        @endif
                        
                        <div class="details-content-box">
                            @php
                                $remainingServices = $servicesWithoutImages->skip(1);
                            @endphp
                            @foreach($remainingServices as $index => $service)
                                <div class="service-details-item wow fadeInUp" data-wow-delay="{{ 0.2 + ($index * 0.2) }}s">
                                    <span class="number">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) - 1 }}.</span>
                                    <h6 class="title">
                                        {!! $service->title !!}
                                    </h6>
                                    <div class="desc">
                                        <p>{!! $service->description !!}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <h3 class="wow fadeInUp" data-wow-delay=".3s">
                            Frequently asked questions
                        </h3>
                        <div class="accordion tj-faq style-2" id="faqOne">
                            <!-- FAQs -->
                             @php
                                use App\Models\CdFaq;

                                $faqs = CdFaq::where('sub_category_id', $sub_division->id)->get();
                            @endphp
                             @foreach($faqs as $index => $faq)
                                <div class="accordion-item wow fadeInUp {{ $index == 0 ? 'active' : '' }}" data-wow-delay=".3s">
                                    <button class="faq-title {{ $index == 0 ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#faq-{{ $index+1 }}" aria-expanded="{{ $index == 0 ? 'true' : 'false' }}">
                                        {{ $faq->title }}
                                    </button>
                                    <div id="faq-{{ $index+1 }}" class="collapse {{ $index == 0 ? 'show' : '' }}" data-bs-parent="#faqOne">
                                        <div class="accordion-body faq-text">
                                            {!! $faq->description !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- End FAQs -->
                        </div>
                    </div>
                    <div
                        class="tj-post__navigation mb-0 wow fadeInUp"
                        data-wow-delay=".3s">
                        <!-- previous post -->
                        <div class="tj-nav__post previous">
                            <div class="tj-nav-post__nav prev_post">
                                <a href="service-details.html"><span><i class="tji-arrow-left"></i></span>Previous</a>
                            </div>
                        </div>
                        <div class="tj-nav-post__grid">
                            <a href="service.html"><i class="tji-window"></i></a>
                        </div>
                        <!-- next post -->
                        <div class="tj-nav__post next">
                            <div class="tj-nav-post__nav next_post">
                                <a href="service-details.html">Next<span><i class="tji-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="tj-main-sidebar slidebar-stickiy">
                    <div
                        class="tj-sidebar-widget service-categories wow fadeInUp"
                        data-wow-delay=".1s">
                        <h4 class="widget-title">More services</h4>
                        <ul>
                            @foreach($categories as $category)
                            <li>
                                <a class="{{ $category->slug == $slug ? 'active':'' }}" href="{{ $category->slug }}">{{ $category->title }}<span class="icon"><i class="tji-arrow-right"></i></span></a>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                    @php
                        use App\Models\CdTeamMember;
                        
                        // Get team members where division contains the parent slug (comma-separated)
                        $teamMembers = CdTeamMember::where('division', 'LIKE', '%' . $sub_division->parent_item->slug . '%')->get();
                    @endphp
                    @foreach($teamMembers as $teamMember)
                        <div class="tj-sidebar-widget widget-feature-item wow fadeInUp" data-wow-delay=".3s">
                            <div class="feature-box">
                                <div class="feature-content">
                                    <h2 class="title">{{ $teamMember->name }}</h2>
                                    <span>{{ $teamMember->designation }}</span>
                                </div>
                                <div class="feature-images bg-white">
                                    <img src="/{{ $teamMember->image }}" alt="{{ $teamMember->name }}" />
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- {{ $sub_division->parent_item->slug }}  -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Blog Section -->


@endsection