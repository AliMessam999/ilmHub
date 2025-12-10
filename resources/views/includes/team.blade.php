<section class="h8-team section-gap section-gap-x mt-5">
    {{-- <div class="container">
        <div class="row h8-team-wrapper gap-0">
            <div class="col-lg-3 col-sm-6">
                <div class="sec-heading style-3">
                    <span class="sub-title wow fadeInUp" data-wow-delay=".3s">MEET OUR TEAM</span>
                    <h2 class="sec-title title-anim">
                        Meet the Mind Behind Our Success
                    </h2>
                </div>
            </div>
            @foreach ($teams as $key => $team)
                <div class="col-lg-3 col-sm-6 h8-team-item-wrapper">
                    <div class="team-item wow fadeInRightBig" data-wow-delay="{{ 0.2 + (float) $key * 0.1 }}s">
                        <div class="team-img">
                            <div class="team-img-inner">
                                <img src="{{ asset($team->image) }}" alt="{{ $team->alt }}">
                            </div>
                            <div class="social-links">
                                <ul>
                                    @if ($team->facebook)
                                        <li><a href="{{ $team->facebook }}" target="_blank"><i
                                                    class="fa-brands fa-facebook-f"></i></a></li>
                                    @endif
                                    @if ($team->instagram)
                                        <li><a href="{{ $team->instagram }}" target="_blank"><i
                                                    class="fa-brands fa-instagram"></i></a></li>
                                    @endif
                                    @if ($team->twitter)
                                        <li><a href="{{ $team->twitter }}" target="_blank"><i
                                                    class="fa-brands fa-x-twitter"></i></a></li>
                                    @endif
                                    @if ($team->linkedin)
                                        <li><a href="{{ $team->linkedin }}" target="_blank"><i
                                                    class="fa-brands fa-linkedin-in"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h5 class="title"><a href="#">{{ $team->name }}</a></h5>
                            <span class="designation">{{ $team->designation }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="bg-shape-1">
        <img src="{{ asset('frontend_assets/images/shape/pattern-2.svg') }}" alt="" />
    </div>
    <div class="bg-shape-2">
        <img src="{{ asset('frontend_assets/images/shape/pattern-3.svg') }}" alt="" />
    </div> --}}



   <div class="container">
    <!-- Desktop Grid -->
    <div class="row h8-team-wrapper gap-0 team-grid d-none d-md-flex"> 
        <div class="col-lg-3 col-sm-6">
            <div class="sec-heading style-3">
                <span class="sub-title wow fadeInUp" data-wow-delay=".3s">MEET OUR TEAM</span>
                <h2 class="sec-title title-anim">
                    Meet the Mind Behind Our Success
                </h2>
            </div>
        </div>
        @foreach ($teams as $key => $team)
            <div class="col-lg-3 col-sm-6 h8-team-item-wrapper">
                <div class="team-item wow fadeInRightBig" data-wow-delay="{{ 0.2 + (float) $key * 0.1 }}s">
                    <div class="team-img">
                        <div class="team-img-inner">
                            <img src="{{ asset($team->image) }}" alt="{{ $team->alt }}">
                        </div>
                        <div class="social-links">
                            <ul>
                                @if ($team->facebook)
                                    <li><a href="{{ $team->facebook }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                @endif
                                @if ($team->instagram)
                                    <li><a href="{{ $team->instagram }}" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                @endif
                                @if ($team->twitter)
                                    <li><a href="{{ $team->twitter }}" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                                @endif
                                @if ($team->linkedin)
                                    <li><a href="{{ $team->linkedin }}" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="team-content">
                        <h5 class="title"><a href="#">{{ $team->name }}</a></h5>
                        <span class="designation">{{ $team->designation }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Mobile Slider (≤480px) -->
    <div class="swiper team-slider d-md-none">
        <div class="sec-heading style-3">
                <span class="sub-title wow fadeInUp" data-wow-delay=".3s">MEET OUR TEAM</span>
                <h2 class="sec-title title-anim">
                    Meet the Mind Behind Our Success
                </h2>
            </div>
        <div class="swiper-wrapper">
            <!-- Header Slide -->
            {{-- <div class="swiper-slide text-center">
                <div class="sec-heading style-3">
                    <span class="sub-title wow fadeInUp" data-wow-delay=".3s">MEET OUR TEAM</span>
                    <h2 class="sec-title title-anim">
                        Meet the Mind Behind Our Success
                    </h2>
                </div>
            </div> --}}

            <!-- Team Slides -->
            @foreach ($teams as $team)
                <div class="swiper-slide text-center">
                    <div class="team-item">
                        <div class="team-img">
                            <div class="team-img-inner">
                                <img src="{{ asset($team->image) }}" alt="{{ $team->alt }}">
                            </div>
                        </div>
                        <div class="team-content">
                            <h5 class="title">{{ $team->name }}</h5>
                            <span class="designation">{{ $team->designation }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Navigation Buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
    if (window.innerWidth <= 480 && document.querySelector(".team-slider")) {
        var teamSwiper = new Swiper(".team-slider", {
            slidesPerView: 1,
            spaceBetween: 15,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                type: "bullets",
            },
        });
    }
});

</script>
</section>
