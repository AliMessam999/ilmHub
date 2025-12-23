<!-- Critical JS - Load immediately -->
<script src="{{ asset('frontend_assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/bootstrap.bundle.min.js') }}"></script>

<!-- Defer non-critical JS to reduce forced reflows -->
<script defer src="{{ asset('frontend_assets/js/gsap.min.js') }}"></script>
<script defer src="{{ asset('frontend_assets/js/ScrollSmoother.min.js') }}"></script>
<script defer src="{{ asset('frontend_assets/js/gsap-scroll-to-plugin.min.js') }}"></script>
<script defer src="{{ asset('frontend_assets/js/gsap-scroll-trigger.min.js') }}"></script>
<script defer src="{{ asset('frontend_assets/js/gsap-split-text.min.js') }}"></script>
<script defer src="{{ asset('frontend_assets/js/jquery.nice-select.min.js') }}"></script>
<script defer src="{{ asset('frontend_assets/js/swiper.min.js') }}"></script>
<script defer src="{{ asset('frontend_assets/js/odometer.min.js') }}"></script>
<script defer src="{{ asset('frontend_assets/js/venobox.min.js') }}"></script>
<script defer src="{{ asset('frontend_assets/js/appear.min.js') }}"></script>
<script defer src="{{ asset('frontend_assets/js/wow.min.js') }}"></script>
<script defer src="{{ asset('frontend_assets/js/meanmenu.min.js') }}"></script>
<script defer src="{{ asset('frontend_assets/js/main.js') }}"></script>

<!-- Optimize reflow performance -->
<script>
    // Batch DOM reads and writes to minimize reflows
    window.addEventListener('DOMContentLoaded', function() {
        // Debounce scroll events to reduce reflow frequency
        let scrollTimeout;
        window.addEventListener('scroll', function() {
            if (scrollTimeout) clearTimeout(scrollTimeout);
            scrollTimeout = setTimeout(function() {
                // Scroll handlers will run here with reduced frequency
            }, 16); // ~60fps
        }, { passive: true });
    });
</script>
