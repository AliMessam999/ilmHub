<section class="banner" id="banner">
  <div class="container-fluid p-0">
    @if (!empty($data->slider) && isset($data->slider[0]))
    <!-- LCP Image - loads immediately with high priority -->
    <img 
      src="/{{ $data->slider[0]->video ?? 'assets/images/default-hero.jpg' }}" 
      alt="{{ $data->slider[0]->title }}"
      fetchpriority="high"
      class="lcp-hero-image"
      width="1920"
      height="1080"
    >
    @endif
    
    <!-- Immediate LCP content -->
    <div class="lcp-content">
      @if (!empty($data->slider) && isset($data->slider[0]))
      <div class="container">
        <div class="slider-wrapper">
          <div class="slider-content">
            <h1 class="slider-title">{{ $data->slider[0]->title }}</h1>
            <p>{!! $data->slider[0]->description !!}</p>
          </div>
        </div>
      </div>
      @endif
    </div>
    
    <!-- Swiper loads after LCP -->
    <div class="swiper mySwiper" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;">
      <div class="swiper-wrapper">
        @if (!empty($data->slider))
        @foreach ($data->slider as $slider)
        <div class="swiper-slide" data-video="{{ $slider->video }}" data-title="{{ $slider->title }}">
          <video autoplay muted loop playsinline class="slide-video" loading="lazy" poster="/{{ $slider->video ?? 'assets/images/default-hero.jpg' }}">
            <source src="/{{ $slider->video }}" type="video/mp4">
          </video>
        </div>
        @endforeach
        @endif
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

<style>
.lcp-hero-image {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: 1;
}
.lcp-content {
  position: relative;
  z-index: 2;
  height: 100vh;
  display: flex;
  align-items: center;
  background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5));
}
.slider-title {
  color: white;
  font-size: 3rem;
  margin: 0;
}
</style>

<script>
// Initialize Swiper after LCP
document.addEventListener('DOMContentLoaded', function() {
  setTimeout(() => {
    if (typeof Swiper !== 'undefined') {
      new Swiper('.mySwiper', {
        loop: true,
        autoplay: { delay: 5000 },
        pagination: { el: '.swiper-pagination' }
      });
    }
  }, 100);
});
</script>