<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>CDigital –ICT,Hydromet,Security,Energy</title>
    <meta name="description" content="CDigital –ICT|Hydromet|Security|Energy|Software">
    <meta name="author" content="CDigital">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Put favicon.ico and apple-touch-icon(s).png in the site_asset/images folder -->
    <link rel="shortcut icon" href="{{ url('site_asset/images/favicon.png') }}">

    <!-- CSS StyleSheets -->
    <link rel="stylesheet"
        href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&amp;amp;subset=latin,latin-ext">
    <link rel="stylesheet" href="{{ url('site_asset/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('site_asset/css/animate.css') }}">
    <link rel="stylesheet" href="{{ url('site_asset/css/prettyPhoto.css') }}">
    <link rel="stylesheet" href="{{ url('site_asset/css/slick.css') }}">
    <link rel="stylesheet" href="{{ url('site_asset/rs-plugin/css/settings.css') }}">
    <link rel="stylesheet" href="{{ url('site_asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('site_asset/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ url('site_asset/css/gallery.css') }}">
    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


    <!-- Skin style (** you can change the link below with the one you need from skins folder in the css folder **) -->
    <link rel="stylesheet" href="{{ url('site_asset/css/skins/default.css') }}">

</head>

<body>

    <!-- site preloader start -->
    {{-- <div class="page-loader">
        <div class="loader-in"></div>
    </div> --}}
    <!-- site preloader end -->

    <div class="pageWrapper">
        <!-- Header Start -->
        <div id="headWrapper" class="clearfix">

            <!-- top bar start -->
            <x-top-header />
            
            <!-- Logo, global navigation menu and search start -->
            <header class="top-head" data-sticky="true">
                <div class="container">
                    <div class="row">
                        <div class="logo cell-4">
                            <a href="/" style="background: transparent url('/site_asset/images/210301124010web.png') no-repeat 50% 50%"></a>
                        </div>
                        <div class="cell-9 top-menu">

                            <!-- top navigation menu start -->
                            <nav class="top-nav mega-menu">
                                <ul>
                                    <x-menu-item />
                                </ul>
                                
                            </nav>
                            <!-- top navigation menu end -->

                        </div>
                    </div>
                </div>
            </header>
            <!-- Logo, Global navigation menu and search end -->

        </div>
        <!-- Header End -->

       @yield('content')
        <!-- Footer start -->
        <x-footer />
        <!-- Footer end -->

        <!-- Back to top Link -->
        <div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>

    </div>


    <!-- Load JS siles -->
    <script type="text/javascript" src="{{ url('site_asset/js/jquery.min.js') }}"></script>

    <!-- Waypoints script -->
    <script type="text/javascript" src="{{ url('site_asset/js/waypoints.min.js') }}"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script type="text/javascript" src="{{ url('site_asset/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('site_asset/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- Animate numbers increment -->
    <script type="text/javascript" src="{{ url('site_asset/js/jquery.animateNumber.min.js') }}"></script>

    <!-- slick slider carousel -->
    <script type="text/javascript" src="{{ url('site_asset/js/slick.min.js') }}"></script>

    <!-- Animate numbers increment -->
    <script type="text/javascript" src="{{ url('site_asset/js/jquery.easypiechart.min.js') }}"></script>

    <!-- PrettyPhoto script -->
    <script type="text/javascript" src="{{ url('site_asset/js/jquery.prettyPhoto.js') }}"></script>

    <!-- Share post plugin script -->
    <script type="text/javascript" src="{{ url('site_asset/js/jquery.sharrre.min.js') }}"></script>

    <!-- Product site_asset/images zoom plugin -->
    <script type="text/javascript" src="{{ url('site_asset/js/jquery.elevateZoom-3.0.8.min.js') }}"></script>

    <!-- Input placeholder plugin -->
    <script type="text/javascript" src="{{ url('site_asset/js/jquery.placeholder.js') }}"></script>

    <!-- Tweeter API plugin -->
    <script type="text/javascript" src="{{ url('site_asset/js/twitterfeed.js') }}"></script>

    <!-- Flickr API plugin -->
    <script type="text/javascript" src="{{ url('site_asset/js/jflickrfeed.min.js') }}"></script>

    <!-- MailChimp plugin -->
    <script type="text/javascript" src="{{ url('site_asset/js/mailChimp.js') }}"></script>

    <!-- NiceScroll plugin -->
    <script type="text/javascript" src="{{ url('site_asset/js/jquery.nicescroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('site_asset/js/isotope.pkgd.min.js') }}"></script>
<!-- Gallery JS plugin -->
<script type="text/javascript" src="{{ url('site_asset/js/jquery.galleriffic.js') }}"></script>
<script type="text/javascript" src="{{ url('site_asset/js/jquery.opacityrollover.js') }}"></script>
<!-- End of Gallery JS plugin -->
    <!-- general script file -->
    <script type="text/javascript" src="{{ url('site_asset/js/script.js') }}"></script>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{ url('/js/ajaxfunctions.js') }}"></script>
    @yield('scripts')
</body>

</html>
