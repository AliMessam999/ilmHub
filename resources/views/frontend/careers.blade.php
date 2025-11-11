@extends('layouts.app')

@section('content')


<section
  class="tj-page-header rounded-0"
  data-bg-image="/frontend_assets/images/bg/pheader-bg.webp">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="tj-page-header-content text-center">
          <h1 class="tj-page-title mt-5">Careers</h1>
          <div class="tj-page-link">
            <span><i class="tji-home"></i></span>
            <span>
              <a href="index.html">Home</a>
            </span>
            <span><i class="tji-arrow-right"></i></span>
            <span>
              <span>Careers</span>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<!-- end: Breadcrumb Section -->

<!-- start: Careers Section -->
<section class="tj-careers-section section-gap">
  <div class="container">
    <div class="row rg-30">

      @foreach($careers as $career)
      <div class="col-xl-4 col-md-6">
        <div class="tj-careers wow fadeInUp" data-wow-delay="0.1s">
          <div class="tj-careers-icon mb-30">
            {!! $career->icon !!}
          </div>
          <div class="tj-careers-tag">
            <span>Full time job/on site</span> <span>Urgent</span>
          </div>
          <h4 class="tj-careers-title">
            <a href="/careers/{{ $career->title }}">{{ $career->title }}</a>
          </h4>
          {!! $career->short_description !!}
          <div class="tj-careers-bottom">
            <!-- <span class="location"><i class="tji-location"></i>London,UK</span> -->
            <a href="mailto:{{ $career->email }}" class="tj-careers-btn">
              <div class="btn-text">
                <span>Apply Now</span>
              </div>
              <span class="btn-icon">
                <i class="tji-arrow-right"></i>
                <i class="tji-arrow-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      @endforeach
      
    </div>
    <!-- post pagination -->
 
  </div>
</section>
<!-- end: Careers Section -->


@endsection