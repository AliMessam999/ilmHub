<footer id="footWrapper">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <!-- Recent  Post  footer cell start -->
                <div class="cell-3">
                    <h3 class="block-head">News & Blog </h3>
                    <div class="recent-posts-footer">
                        <ul>
                            @if (!empty($footer->news))
                                @foreach ($footer->news as $data)
                                    <li>
                                        <div class="post-img">
                                            <img src="{!! url($data->image) !!}" alt="{!! __($data->alt) !!}">
                                        </div>
                                        <div class="widget-post-info">
                                            <h4>
                                                <a href="{{ url('/news/details/' . $data->title) }}">
                                                    {!! __($data->title) !!}
                                                </a>
                                            </h4>
                                            <div class="meta">
                                                <span><i class="fa fa-clock-o"></i>
                                                    {{ \Carbon\Carbon::parse($data->date)->format('d M, Y') }}</span>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>


                <div class="cell-3">
                    <h3 class="block-head">.</h3>
                    <div class="recent-posts-footer">
                        <ul>
                            @if (!empty($footer->news_hydromet))
                                @foreach ($footer->news_hydromet as $data)
                                    <li>
                                        <div class="post-img">
                                            <img src="{!! url($data->image) !!}" alt="{!! __($data->alt) !!}">
                                        </div>
                                        <div class="widget-post-info">
                                            <h4>
                                                <a href="{{ url('/news/details/' . $data->title) }}">
                                                    {!! __($data->title) !!}
                                                </a>
                                            </h4>
                                            <div class="meta">
                                                <span><i class="fa fa-clock-o"></i>
                                                    {{ \Carbon\Carbon::parse($data->date)->format('d M, Y') }}</span>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                <!-- Recent  Post footer cell start -->
                <div class="cell-3 flickr-stream-w">
                    <h3 class="block-head">Gallery</h3>
                    <ul>
                        @if(!empty($footer->gallery))
                        @foreach($footer->gallery as $gallery)
                        <li><a href="{!!__($gallery->image) !!}"><img src="{!! url($gallery->image) !!}" alt="{!!__($gallery->alt) !!}"><span
                                    class="img-overlay"></span></a></li>
                       @endforeach
                       @endif
                    </ul>
                </div>
                <!-- main menu footer cell start -->
                <div class="cell-3">
                    <h3 class="block-head">Contact us</h3>
                    <ul>
                        <li class="footer-contact"><i class="fa fa-home"></i><span>{!! $footer->profile ?__($footer->profile->location) :'' !!}</span></li>
                        <li class="footer-contact"><i class="fa fa-globe"></i><span><a
                                    href="mailto:{!! $footer->profile ?__($footer->profile->email) :'' !!}">{!! $footer->profile ?__($footer->profile->email) :'' !!}</a></span></li>
                        <li class="footer-contact"><i class="fa fa-phone"></i><span>{!! $footer->profile ?__($footer->profile->contact) :'' !!}</span></li>
                        <li class="footer-contact"><i class="fa fa-map-marker"></i><span><a
                                    href="{{ url('/contact') }} ">View our map</a></span></li>
                    </ul>
                </div>
                <!-- contact us footer cell end -->
            </div>
        </div>
    </div>
    <!-- footer bottom bar start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <!-- footer copyrights left cell -->
                <div class="copyrights cell-5">&copy; Copyrights <b>CDigital</b> 2019. All rights reserved. <span><a
                            href="{{ url('/policies') }}">Privacy policy</a> | <a href="{{ url('/terms_conditions') }}">Terms of
                            use</a></span></div>
                <!-- footer social links right cell start -->
                <div class="cell-7">
                    <ul class="social-list right">
                        <li class="skew-25"><a target="_blank" href="{!! $footer->profile ?__($footer->profile->facebook_link) :'' !!}" data-title="facebook"
                                data-tooltip="true"><span class="fa fa-facebook skew25"></span></a></li>
                        <li class="skew-25"><a target="_blank" href="{!! $footer->profile ?__($footer->profile->instagram_link) :'' !!}" data-title="linkedin"
                                data-tooltip="true"><span class="fa fa-instagram skew25"></span></a></li>
                        <li class="skew-25"><a target="_blank" href="{!! $footer->profile ?__($footer->profile->twitter_link) :'' !!}" data-title="twitter"
                                data-tooltip="true">
                                <svg style="margin-top: 6px" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 48 48">
                                    <polygon fill="#A2A2A2" points="41,6 9.929,42 6.215,42 37.287,6"></polygon><polygon fill="#fff" fill-rule="evenodd" points="31.143,41 7.82,7 16.777,7 40.1,41" clip-rule="evenodd"></polygon><path fill="#616161" d="M15.724,9l20.578,30h-4.106L11.618,9H15.724 M17.304,6H5.922l24.694,36h11.382L17.304,6L17.304,6z"></path>
                                    </svg>
                            </a></li>
                    </ul>
                </div>
                <!-- footer social links right cell end -->
            </div>
        </div>
    </div>-
    <!-- footer bottom bar end -->
</footer>
