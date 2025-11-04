@extends('include.header')
@section('content')
    <div class="pageWrapper">
        <!-- Content Start -->
        <div id="contentWrapper">
            <div class="page-title title-1">
                <div class="container">
                    <div class="row">
                        <div class="cell-12">
                            <h1 class="fx animated" data-animate="fadeInLeft">About <span>Us</span></h1>
                            <div class="breadcrumbs main-bg fx animated" data-animate="fadeInUp">
                                <span class="bold">You Are In:</span><a href="#">Home</a><span
                                    class="line-separate">/</span><a href="#">Pages </a><span
                                    class="line-separate">/</span><span>About us</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sectionWrapper">
                <div class="container">
                    <div class="fx animated" data-animate="fadeInUp">
                        <h3 class="block-head">Introduction</h3>
                        <p>
                            {!! __($profile->description) !!}
                        </p>
                    </div>

                    <div class="clearfix"></div>

                    <div class="padd-top-50">
                        <div class="cell-6 fx animated" data-animate="fadeInLeft">
                            <div class="row">
                                <div id="tabs" class="tabs">
                                    <h3 class="block-head">What we offer?</h3>
                                    <ul>
                                        @forelse($services as $key=>$service)
                                            <li class="skew-25 {{ $key == 0 ? 'active' : '' }}"><a href="#"
                                                    class="skew25"><i
                                                        class="fa fa-file-excel-o"></i>{{ __($service->title) }}</a></li>
                                        @empty
                                        @endforelse

                                    </ul>
                                    <div class="tabs-pane">
                                        @forelse($services as $key=>$service)
                                            <div class="tab-panel {{ $key == 0 ? 'active' : '' }}">
                                                <p>{!! __($service->description) !!}</p>
                                            </div>
                                        @empty
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cell-1"></div>
                        <div class="cell-5 fx animated" data-animate="fadeInRight">
                            <div class="row">
                                <h3 class="block-head">Who we Are?</h3>
                                <ul id="accordion2" class="accordion">
                                    <li>
                                        <h3 class="skew-25"><a href="#"><span class="skew25"><i
                                                        class="fa fa-file-excel-o"></i>Our Mission</span></a></h3>
                                        <div class="accordion-panel active">
                                            To build long term relationships with our customers and clients and provide
                                            exceptional customer services by pursuing business through innovation and
                                            advanced
                                            technology.
                                        </div>
                                    </li>
                                    <li>
                                        <h3 class="skew-25"><a href="#"><span class="skew25"><i
                                                        class="fa fa-check-square-o"></i>Our Objective</span></a></h3>
                                        <div class="accordion-panel active">
                                            Turning our customers into partners through unsurpassed solutions
                                        </div>
                                    </li>

                                    <li>
                                        <h3 class="skew-25"><a href="#"><span class="skew25"><i
                                                        class="fa fa-envelope"></i>Our Vission</span></a></h3>
                                        <div class="accordion-panel">
                                            To provide quality services that exceeds the expectations of our esteemed
                                            customers.
                                        </div>
                                    </li>
                                    <li>
                                        <h3 class="skew-25"><a href="#"><span class="skew25"><i
                                                        class="fa fa-flag"></i>Our
                                                    Goals</span></a></h3>
                                        <div class="accordion-panel">
                                            Regional expansion in the field of technology management and develop a strong
                                            base
                                            of key customers.

                                            - Increase the assets and investments of the company to support the development
                                            of
                                            services.

                                            - To build good reputation in the field of technology management and become a
                                            key
                                            player in the industry.
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sectionWrapper gry-pattern">
                <div class="container team-boxes">
                    <h3 class="block-head">Meet Our Team</h3>

                    @forelse($team as $key=>$item)
                        <div class="cell-3 fx animated" data-animate="bounceIn">

                            <div class="team-box">
                                <div class="team-img2">
                                    <img alt="{{ __($item->alt) }}" src="{{ url($item->image) }}">
                                    <h3>{{ __($item->name) }}</h3>
                                    <div class="designation">{{ __($item->designation) }}</div>
                                </div>
                                
                            </div>
                        </div>
                    @empty
                        <div></div>
                    @endforelse
                </div>
            </div>
        </div>
    @stop
    <!-- Content End -->
