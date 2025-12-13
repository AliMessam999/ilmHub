<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
    @stack('styles')
</head>

<body>
    <div class="body-overlay"></div>
    @include('includes.global-ui')
    @include('includes.header')

    <div id="smooth-wrapper">
        <div id="smooth-content">

            <main id="primary" class="site-main">
                @yield('content')

                @unless(request()->is('contact') || request()->is('about_us') || request()->is('case-study/*'))
                    <x-cta-section />
                @endunless
            </main>
         

            {{-- @include('includes.footer') --}}
            <x-footer/>
        </div>
    </div>

    @include('includes.scripts')
    @stack('scripts')


    <div id="imageModal" class="image-modal">
    <span class="close-modal" onclick="closeModal()">&times;</span>
    <img id="modalImage" alt="">
    <div id="caption"></div>
</div>
</body>

</html>
