@extends('include.header')

@section('content')

    <!-- Content Start -->
    <div id="contentWrapper">
        <!-- Revolution slider start -->
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <li data-transition="fade" data-slotamount="7">
                        <img alt="" src="/site_asset/images/slider/dummy.png"
                            data-lazyload="{{ url('site_asset/images/slider/Bg-12.jpg') }}" data-duration="1000">
                        <div class="caption large-text tp-resizeme witTxt" style="text-transform: uppercase;font-size:30px"
                            data-x="0" data-y="424" data-speed="600" data-start="1500" data-easing="Power4.easeOut"
                            data-splitin="chars" data-splitout="chars" data-elementdelay="0.05" data-endelementdelay="0.05"
                            data-endspeed="300" data-endeasing="Power1.easeOut">Time To Try</div>
                        <div class="caption large-title tp-resizeme witTxt" data-x="0" data-y="440" data-speed="600"
                            data-start="1600" data-easing="Power4.easeOut" data-splitin="chars" data-splitout="chars"
                            data-elementdelay="0.05" data-endelementdelay="0.05" data-endspeed="300"
                            data-endeasing="Power1.easeOut">SomeThing Different</div>
                        <div class="caption lft tp-resizeme" data-x="-50" data-y="-50" data-speed="600"
                            data-start="1600">
                            <div style="height:93px;width:2px;background:#fff;left:40px;position:absolute;"></div>
                            <div
                                style="background:#1e1e1e;padding:30px;border-radius:50%;line-height:20px;color:#fff;text-transform:uppercase;font-size:20px;margin-top:90px">
                                ICT</div>
                        </div>
                        <div class="caption lft tp-resizeme" data-x="30" data-y="-20" data-speed="600"
                            data-start="1600">
                            <div style="height:93px;width:2px;background:#fff;left:40px;position:absolute;"></div>
                            <div
                                style="background:#fff;padding:30px;border-radius:50%;line-height:40px;color:#777;text-transform:uppercase;font-size:20px;margin-top:70px">
                                HydroMet</div>
                        </div>
                        <div class="caption lft tp-resizeme" data-x="100" data-y="0" data-speed="600"
                            data-start="1800">
                            <div style="height:151px;width:2px;background:#b8b8b8;left:40px;position:absolute;"></div>
                            <div
                                style="background:#b8b8b8;padding:20px;border-radius:50%;line-height:40px;color:#fff;text-transform:uppercase;font-size:20px;margin-top:141px">
                                Biotech</div>
                        </div>

                        <div class="caption lft tp-resizeme" data-x="170" data-y="0" data-speed="600"
                            data-start="2000">
                            <div style="height:210px;width:2px;background:#000;left:50px;position:absolute;"></div>
                            <div
                                style="background:#000;padding:35px 20px;border-radius:50%;line-height:40px;color:#fff;text-transform:uppercase;font-size:20px;margin-top:200px">
                                Security</div>
                        </div>
                        <div class="caption lft tp-resizeme" data-x="260" data-y="0" data-speed="600"
                            data-start="2000">
                            <div style="height:210px;width:2px;background:#000;left:50px;position:absolute;"></div>
                            <div
                                style="background:#399fb5;padding:35px 20px;border-radius:50%;line-height:40px;color:#fff;text-transform:uppercase;font-size:20px;margin-top:300px">
                                Energy</div>
                        </div>

                        <div class="caption shadowed lfr ltt" data-y="30" data-x="680" data-speed="600"
                            data-start="2300" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none"
                            data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="500"
                            data-endeasing="Power4.easeIn"> <img alt=""
                                src="{{url('/upload/slider/s-2-4.png') }}"></div>
                        <div class="caption shadowed lft ltt" data-y="20" data-x="320" data-speed="600"
                            data-start="1700" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none"
                            data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="500"
                            data-endeasing="Power4.easeIn"><img alt=""
                                src="{{url('/upload/slider/s-2-1.png') }}"></div>
                        <div class="caption shadowed lfl ltt" data-y="180" data-x="290" data-speed="600"
                            data-start="1900" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none"
                            data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="500"
                            data-endeasing="Power4.easeIn"><img alt=""
                                src="{{url('/upload/slider/s-2-2.png') }}"></div>
                        <div class="caption shadowed lfb ltt" data-y="165" data-x="610" data-speed="600"
                            data-start="2100" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none"
                            data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="500"
                            data-endeasing="Power4.easeIn"><img alt=""
                                src="{{url('/upload/slider/s-2-3.png') }}"></div>
                    </li>
                    <li data-transition="fade" data-slotamount="7">
                        <img alt="" src="{{ url('/site_asset/images/slider/dummy.png') }}"
                            data-lazyload="{{ url('site_asset/images/slider/Bg-12.jpg') }}" data-bgposition="left center"
                            data-kenburns="on" data-duration="14000" data-ease="Linear.easeNone" data-bgfit="100"
                            data-bgfitend="130" data-bgpositionend="right center">
                        <div style="color:#ffffff;"
                            class="caption large-title tp-resizeme main-color skewfromrightshort rs-parallaxlevel-0"
                            data-x="center" data-y="15" data-speed="600" data-start="1600"
                            data-easing="Power4.easeOut" data-easing="Power3.easeInOut" data-splitin="chars"
                            data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1">Check What CDIGITAL
                            Offers</div>
                        <div class="caption sfl large-text tp-resizeme witTxt" data-x="0" data-y="180"
                            data-speed="600" data-start="2800">Technology Consulting
                        </div>
                        <div class="caption sfl large-text tp-resizeme witTxt" data-x="0" data-y="225"
                            data-speed="600" data-start="3000">Project Management</div>
                        <div class="caption sfl large-text tp-resizeme witTxt" data-x="0" data-y="270"
                            data-speed="600" data-start="3200">Operation & Maintenance</div>
                        <div class="caption sfl large-text tp-resizeme witTxt" data-x="0" data-y="315"
                            data-speed="600" data-start="3400">Hydro-Met</div>
                        <div class="caption sfl large-text tp-resizeme witTxt" data-x="0" data-y="360"
                            data-speed="600" data-start="3600">Bio Technology</div>
                        <div class="caption lfl" data-y="118" data-x="223" data-speed="600" data-start="1000"><img
                                alt="" src="{{url('/upload/slider/s-3-2.png') }}"></div>
                        <div class="caption lfr" data-y="118" data-x="465" data-speed="600" data-start="1000"><img
                                alt="" src="{{url('/upload/slider/s-3-1.png') }}"></div>
                        <div class="caption sfr large-text tp-resizeme witTxt" data-x="right" data-y="180"
                            data-speed="600" data-start="2800">Network Establishment </div>
                        <div class="caption sfr large-text tp-resizeme witTxt" data-x="right" data-y="225"
                            data-speed="600" data-start="3000">Security Equipment</div>
                        <div class="caption sfr large-text tp-resizeme witTxt" data-x="right" data-y="270"
                            data-speed="600" data-start="3200">Software Development</div>
                        <div class="caption sfr large-text tp-resizeme witTxt" data-x="right" data-y="315"
                            data-speed="600" data-start="3400">Mobile Applications</div>
                        <div class="caption sfr large-text tp-resizeme witTxt" data-x="right" data-y="360"
                            data-speed="600" data-start="3600">Tracking</div>
                    </li>
                    <?php if(!empty($data->slider)){
            foreach($data->slider as $si){
                ?>
                    <li data-slotamount="7" data-transition="random-premium" data-masterspeed="1000"
                        data-saveperformance="on">
                        <img alt="" src="{{ url('/site_asset/images/slider/dummy.png') }}"
                            data-lazyload="{{ $si->image }}">
                        <?php
                    if(!empty($si->img1))
                    {
                    ?>
                        <div class="caption lfr" data-y="80" data-x="right" data-speed="600" data-start="1000">
                            <img alt="" src="{{ $si->image }}" style="width: 377px; height: 347px;">
                        </div>
                        <?php
                    }
                    ?>
                        <div class="caption sfl slide-h3 tp-resizeme" data-y="110" data-x="10" data-speed="600"
                            data-start="2000"><?php echo $si->title; ?></div>
                        <div class="caption sfl large-desc witTxt tp-resizeme extraLargeFont rs-parallaxlevel-0"
                            data-x="10" data-y="155" data-speed="600" data-start="2400"
                            style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                            <p style="font-size: 16px !important;"><?php echo $si->description; ?></p>
                        </div>
                    </li>
                    <?php }
            }
            ?>
                </ul>
            </div>
        </div>
        <!-- Revolution slider end -->

        <!-- Welcome Box end -->

        <div class="sectionWrapper mt-5">
            <div class="container">
                @foreach ($data->feature as $feature)
                    <div class="cell-4 service-box-2 fx" data-animate="fadeInDown">
                        <div class="box-2-cont">
                            {{-- <i class="icon main-bg fa fa-apple"></i> --}}
                            {!! __($feature->icon) !!}
                            <h4 class="main-color"><span data-hover="Clean & Powrfull">{{ __($feature->title) }}</span>
                            </h4>

                            <div class="clearfix"></div>
                            <div class="career">{!! __($feature->description) !!}</div>
                            <a class="r-more main-color" href="/service/details/{{$feature->title}}">Read More</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

      

        <x-project-home :data="$data" />
        {{-- projects End --}}



        <div class="sectionWrapper mt-5">
            <div class="container">
                <div class="row">
                    <!-- about us left block -->
                    <div class="cell-7">
                        <!-- testimonials start -->
                        <div class="fx" data-animate="fadeInLeft">
                            <h3 class="block-head">About Us</h3>

                            
                            {!! $data->aboutus ? $data->aboutus->description:'' !!}
                        </div>

                        <!-- testimonials end -->

                    </div>
                    <!-- about us left block end -->

                    <!-- our skills right block -->
                    <div class="cell-5 fx" data-animate="fadeInRight">
                        <h3 class="block-head">Our Skills</h3>
                        <ul class="levels">
                            @foreach( $data->skills as $skill)
                            <li>
                                <div class="level-name">{!! __($skill->title) !!}</div>
                                <div class="level-out"><span>{!! __($skill->percentage) !!} %</span>
                                    <div class="level-in" data-percent="{!! __($skill->percentage) !!}" style="left: 0%; width: {!! __($skill->percentage) !!}%;"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- our skills right block end -->
                </div>
            </div>
        </div>

           <!-- Responsive Design start -->
           <div class="sectionWrapper">
            <div class="container">
                <div class="row">
                    <div class="cell-7">

                        <!-- Responsive Web Design start -->
                        <div class="fx" data-animate="fadeInLeft">
                            <h3 class="block-head">{!!$data->offer ?  __($data->offer->title):'' !!}</h3>
                            {!! $data->offer ? __($data->offer->description) :'' !!}
                            
                        </div>
                        <!-- Responsive Web Design end -->

                    </div>

                    <!-- right devices image start -->
                    <div class="cell-5 fx" data-animate="flipInX">
                        <div class="padd-top-25 center">
                            <img alt="{!! $data->offer ? __($data->offer->alt) : '' !!}" src="{!! $data->offer ? __($data->offer->image) : '' !!}">
                        </div>
                    </div>
                    <!-- right devices image end -->

                </div>
            </div>
        </div>
        <!-- Responsive Design end -->


       <!-- our clients block start -->
				<div class="sectionWrapper img-pattern p-3">
					<div class="container">
						<h3 class="block-head">Our Partners</h3>
						<div class="clients">
							@if(!empty($data->partners))
                            @foreach($data->partners as $si)
							<div data-tooltip="true" data-title="{!! __($si->title) !!}">
								<a class="white-bg"  href="javascript:void(0)"><img alt="{!! __($si->alt) !!}" src="{!! __($si->image) !!}" style="width: 220px; height: 80px;"></a>
							</div>
                            @endforeach
						@endif
						
						</div>
					</div>
				</div>
				<!-- our clients block end -->

                <!-- our clients block start -->
				<div class="sectionWrapper gry-bg p-3">
					<div class="container">
						<h3 class="block-head">Our Clients</h3>
						<div class="clients">
							@if(!empty($data->client))
                            @foreach($data->client as $si)
                                <div data-tooltip="true" data-title="{!! __($si->title) !!}">
                                    <a class="white-bg" href="javascript:void(0)"><img alt="{!! __($si->alt) !!}" src="{!! __($si->image) !!}" style="width: 220px; height: 80px;"></a>
                                </div>
						    @endforeach
                        @endif
						
						</div>
					</div>
				</div>
				<!-- our clients block end -->
       
    </div>
    <!-- Content End -->


@stop

@section('scripts')
    <script>
     
            $('.cat1').trigger('click');

        // });
    </script>
@stop
