
      <section class="banner" id="banner">
        <div class="container-fluid p-0">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              @if (!empty($data->slider))
              @foreach ($data->slider as $slider)
              <div
                class="swiper-slide"
                data-video="{{ $slider->video }}"
                data-title="{{ $slider->title }}"
              >
                <video autoplay muted loop playsinline class="slide-video">
                  <source src="/{{ $slider->video }}" type="video/mp4">
                  Your browser does not support HTML5 video.
                </video>
                <div class="slide-text container">
                  <h1 class="text-white animate__animated animate__fadeInDown">
                    {{ $slider->title }}
                  </h1>
                  <p class="animate__animated animate__fadeInUp">
                  {!! $slider->description !!}
                  </p>
                </div>
              </div>
              
              @endforeach
              @endif
            </div>
             @if (!empty($data->slider))
              @foreach ($data->slider as $slider)
            <div class="swiper-pagination"></div>
              @endforeach
             @endif
          </div>
        </div>
      </section>
   