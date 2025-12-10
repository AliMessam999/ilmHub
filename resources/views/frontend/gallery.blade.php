@extends('layouts.app')

@section('content')
<style>
      @media (max-width: 480px) {
    .tj-page-header .container-fluid {
        min-height: 300px; /* Example: set mobile height */
        padding-top: 20px;
        padding-bottom: 20px;
          display: flex;
        flex-direction: column;
        justify-content: center; /* vertical center content */
        text-align: center; 
    }
}
</style>

   <!-- start: Breadcrumb Section -->
        {{-- <section class="tj-page-header rounded-0" data-bg-image="/frontend_assets/images/bg/pheader-bg.webp"> --}}
        <section class="tj-page-header rounded-0" data-bg-image="">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                  <h1 class="tj-page-title">Gallery</h1>
                  <div class="tj-page-link">
                    <span><i class="tji-home"></i></span>
                    <span>
                      <a href="index.html">Home</a>
                    </span>
                    <span><i class="tji-arrow-right"></i></span>
                    <span>
                      <span>Gallery</span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </section>
        <!-- end: Breadcrumb Section -->

        <!-- start: Project Section -->
        <section class="tj-project-section-3 h9-project section-gap mt-5 mb-3 bg-white section-gap-x">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="sec-heading-wrap">
                  <div class="heading-wrap-content text-center text-md-start">
                    <div class="sec-heading style-8">
                      <span class="sub-title wow fadeInUp" data-wow-delay=".3s">OUR Gallery</span>
                      <h2 class="sec-title title-anim text-black">
                        Where Every Picture Tells a Story.
                      </h2>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="bg-white project-wrapper h9-project-wrapper wow fadeInUp" data-wow-delay=".4s">
                  <div class="bg-white h9-project">
                    <div class="row swiper-wrapper">
                        @foreach($gallery as $item)
                      <div class="col-md-4 mb-3">
                        <div class="project-item">
                          <div class="project-img">
                            <img src="/{{ $item->image }}" alt="{{ $item->alt }}" />
                          </div>
                          <div class="project-content">
                            <span class="categories"><a href="portfolio-details.html">Buisness</a></span>
                            <div class="project-text">
                              <h4 class="title">
                            <a href="#">{{ $item->title }}
                                </a>
                              </h4>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                      
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-shape-1">
            <img src="/frotnend_assets/images/shape/pattern-2.svg" alt="" />
          </div>
          <div class="bg-shape-2">
            <img src="/frontend_assets/images/shape/pattern-3.svg" alt="" />
          </div>
        </section>
        <!-- end: Project Section -->

@endsection