<!-- start: Cta Section -->
<section class="tj-cta-section mt-5 mb-5 bg-white h7-cta section-gap-x">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="cta-area h7-cta-inner">
                                <div class="cta-content">
                                    {{-- @php
                                    use App\Models\CdFooter;

                                    $footer = CdFooter::latest()->first(); // get latest record
                                    dd($footer);

                                    @endphp --}}
                                    <h2 class="title footer-top-scrool-bg">
                                        {{-- {{ $footer->title ?? 'Default Footer Title' }} --}}
                                        {{-- {{ $footer->title ?? '' }} --}}
                                        @if($footer === 'No Record Found')
Your Next Digital Step Starts Here	                                        @else
                                       {{ $footer->title }}
                                        
                                        @endif
                                        {{-- {{dd($footer)}} --}}

                                    </h2>

                                    <div class="cta-btn wow fadeInUp" data-wow-delay=".6s">
                                        <a class="tj-primary-btn tj-primary-btn-lg" href="/contact">
                                            <span class="btn-text"><span>Contact us</span></span>
                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="bg-shape-3">
                    <img src="frontend_assets/images/shape/shape-blur.svg" alt="">
                  </div> -->
</section>