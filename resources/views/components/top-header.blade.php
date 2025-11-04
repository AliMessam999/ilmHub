@if(isset($profile) && !empty($profile))
<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="cell-5">
                <ul>
                    <li><a href="mailto:{!! $profile->email !!}"><i class="fa fa-envelope"></i>{{ $profile->email }}</a></li>
                    <li><a href="tel:{!! $profile->contact !!}"><i class="fa fa-phone"></i>{!! $profile->contact !!}</a></li>
                </ul>
            </div>
            <div class="cell-7">
                <ul class="social-list right">
                    <!-- <li class="skew-25"><a href="#" data-title="dribbble" data-tooltip="true"><span class="fa fa-dribbble skew25"></span></a></li> -->
                    <li class="skew-25"><a href="{!! $profile->facebook_link !!}" target="_blank" data-title="facebook" data-tooltip="true"><span
                                class="fa fa-facebook skew25"></span></a></li>
                    <li class="skew-25"><a href="{!! $profile->instagram_link !!}" target="_blank" data-title="linkedin" data-tooltip="true"><span
                                class="fa fa-instagram skew25"></span></a></li>
                    <!-- <li class="skew-25"><a href="#" data-title="skype" data-tooltip="true"><span class="fa fa-skype skew25"></span></a></li> -->
                    <!-- <li class="skew-25"><a href="#" data-title="tumbler" data-tooltip="true"><span class="fa fa-tumblr skew25"></span></a></li> -->
                    <li class="skew-25"><a href="{!! $profile->twitter_link !!}" target="_blank" data-title="twitter" data-tooltip="true">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 48 48">
                            <polygon fill="#A2A2A2" points="41,6 9.929,42 6.215,42 37.287,6"></polygon><polygon fill="#fff" fill-rule="evenodd" points="31.143,41 7.82,7 16.777,7 40.1,41" clip-rule="evenodd"></polygon><path fill="#616161" d="M15.724,9l20.578,30h-4.106L11.618,9H15.724 M17.304,6H5.922l24.694,36h11.382L17.304,6L17.304,6z"></path>
                            </svg>
                    </a></li>
                    <!-- <li class="skew-25"><a href="#" data-title="YouTube" data-tooltip="true"><span class="fa fa-youtube skew25"></span></a></li> -->
                </ul>
            </div>
        </div>
    </div>
</div>
@endif