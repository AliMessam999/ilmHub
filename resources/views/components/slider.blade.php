@php
    use App\Models\CdSlider;

    $sliders = CdSlider::get();
    // dd($sliders);
@endphp
<section class="tj-slider-section m-0 rounded-0">
    <div class="swiper hero-slider">
        <div class="swiper-wrapper">
            @if (!empty($sliders))
                @foreach ($sliders as $slider)

                    <div class="swiper-slide tj-slider-item">
                        <div class="slider-bg-image">
                            <video class="slide-video" style="position: relative" autoplay="" muted="" loop="" playsinline="true"
                                preload="metadata" id="home-hero-video" >
                                {{-- class="home-hero-video" --}}
                                <source src="/{{ $slider->video }}" type="video/mp4" />
                                Your browser does not support HTML5 video.
                            </video>
                        </div>
                        <div class="container">
                            <div class="slider-wrapper">
                                <div class="slider-content">
                                    <h1 class="slider-title">
                                        {{ $slider->title }}
                                        {{-- {{ $firstPart }} <span>{{ $lastPart }}</span> --}}
                                    </h1>
                                    <div class="slider-desc" >
                                        {!! $slider->description !!}
                                    </div>
                                    <div class="slider-btn">
                                        <a class="tj-primary-btn" href="/about_us">
                                            <span class="btn-text"><span>Learn More</span></span>
                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="hero-navigation d-inline-flex wow fadeIn" data-wow-delay="1.5s">
            <div class="slider-prev">
                <span class="anim-icon">
                    <i class="tji-arrow-left"></i>
                    <i class="tji-arrow-left"></i>
                </span>
            </div>
            <div class="slider-next">
                <span class="anim-icon">
                    <i class="tji-arrow-right"></i>
                    <i class="tji-arrow-right"></i>
                </span>
            </div>
        </div>
    </div>
    <!-- <div class="swiper hero-thumb wow fadeIn" data-wow-delay="2s">
            <div class="swiper-wrapper">
              <div class="swiper-slide thumb-item">
                <img src="frontend_assets/images/hero/slider-thumb-1.webp" alt="Thumbnail">
              </div>
              <div class="swiper-slide thumb-item">
                <img src="frontend_assets/images/hero/slider-thumb-2.webp" alt="Thumbnail">
              </div>
              <div class="swiper-slide thumb-item">
                <img src="frontend_assets/images/hero/slider-thumb-3.webp" alt="Thumbnail">
              </div>
            </div>
          </div> -->
    <!-- <div class="circle-text-wrap wow fadeInUp" data-wow-delay="1s">
            <span class="circle-text" data-bg-image="frontend_assets/images/hero/circle-text.webp"></span>
            <a class="circle-icon" href="service.html"><i class="tji-arrow-down-big"></i></a>
          </div> -->
</section>
