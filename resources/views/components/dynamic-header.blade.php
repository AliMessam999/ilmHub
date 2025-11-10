<!-- start: Header Area -->
<header class="header-area header-2 header-absolute section-gap-x">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="header-wrapper">
                    <!-- site logo -->
                    <div class="site_logo">
                        <a class="logo" href="{{ url('/') }}">
                            <img src="{{ asset('frontend_assets/images/logos/logo-2.png') }}" alt="Logo">
                        </a>
                    </div>

                    <!-- navigation -->
                    <div class="menu-area d-none d-lg-inline-flex align-items-center">
                        <nav id="mobile-menu" class="mainmenu">
                            <ul>
                                @foreach($menus->sortBy('order') as $menu)
                                    @php
                                        $mainCategory = $menu->categories->whereNull('parent')->first();
                                        $hasSubcategories = $mainCategory && $mainCategory->sub_categories->count();
                                    @endphp
                                    
                                    <li class="{{ $hasSubcategories ? 'has-dropdown' : '' }} {{ request()->is($menu->slug) ? 'current-menu-ancestor' : '' }}">
                                        <a href="{{ $mainCategory ? ($mainCategory->url ?: url('/' . $mainCategory->slug)) : '#' }}">
                                            {{ $menu->title }}
                                        </a>
                                        
                                        @if($hasSubcategories)
                                            <!-- Check if this is Divisions menu for mega menu -->
                                            @if($menu->id == 2) <!-- Divisions menu -->
                                                <ul class="sub-menu header__mega-menu mega-menu mega-menu-pages">
                                                    <li>
                                                        <div class="mega-menu-wrapper">
                                                            @foreach($mainCategory->sub_categories->chunk(ceil($mainCategory->sub_categories->count() / 3)) as $chunk)
                                                                @foreach($chunk as $subCategory)
                                                                    <div class="mega-menu-pages-single">
                                                                        <div class="mega-menu-pages-single-inner">
                                                                            <a class="mega-menu-title mb-3" href="{{ $subCategory->url ?: url('/' . $subCategory->slug) }}">
                                                                                {{ $subCategory->title }}
                                                                            </a>
                                                                            @if($subCategory->sub_categories->count())
                                                                                <div class="mega-menu-list mt-3">
                                                                                    @foreach($subCategory->sub_categories as $nestedSub)
                                                                                        <a href="{{ $nestedSub->url ?: url('/' . $nestedSub->slug) }}">
                                                                                            {{ $nestedSub->title }}
                                                                                        </a>
                                                                                    @endforeach
                                                                                </div>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            @endforeach
                                                        </div>
                                                    </li>
                                                </ul>
                                            @else
                                                <!-- Regular Dropdown for other menus -->
                                                <ul class="sub-menu">
                                                    @foreach($mainCategory->sub_categories as $subCategory)
                                                        <li>
                                                            <a href="{{ $subCategory->url ?: url('/' . $subCategory->slug) }}">
                                                                {{ $subCategory->title }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @endif
                                    </li>
                                @endforeach
                                
                                <li class="d-md-none d-lg-none">
                                    <a href="{{ url('/contact') }}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!-- header right info -->
                    <div class="header-right-item d-none d-lg-inline-flex">
                        <div class="header-search">
                            <button class="search">
                                <i class="tji-search"></i>
                            </button>
                            <button type="button" class="search_close_btn">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        <div class="header-button">
                            <a class="tj-primary-btn" href="{{ url('/contact') }}">
                                <span class="btn-text"><span>Let's Talk</span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                            </a>
                        </div>
                        <div class="menu_bar menu_offcanvas d-none d-lg-inline-flex">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <!-- menu bar -->
                    <div class="menu_bar mobile_menu_bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Search Popup -->
    <div class="search_popup">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="tj_search_wrapper">
                        <div class="search_form">
                            <form action="#">
                                <div class="search_input">
                                    <div class="search-box">
                                        <input class="search-form-input" type="text" placeholder="Type Words and Hit Enter" required>
                                        <button type="submit">
                                            <i class="tji-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end: Header Area -->

<!-- start: Sticky Header Area -->
<header class="header-area header-2 header-duplicate header-sticky section-gap-x">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="header-wrapper">
                    <!-- site logo -->
                    <div class="site_logo">
                        <a class="logo" href="{{ url('/') }}">
                            <img src="{{ asset('frontend_assets/images/logos/logo-black.png') }}" alt="Logo">
                        </a>
                    </div>

                    <!-- navigation -->
                    <div class="menu-area d-none d-lg-inline-flex align-items-center">
                        <nav class="mainmenu">
                            <ul>
                                @foreach($menus->sortBy('order') as $menu)
                                    @php
                                        $mainCategory = $menu->categories->whereNull('parent')->first();
                                        $hasSubcategories = $mainCategory && $mainCategory->sub_categories->count();
                                    @endphp
                                    
                                    <li class="{{ $hasSubcategories ? 'has-dropdown' : '' }} {{ request()->is($menu->slug) ? 'current-menu-ancestor' : '' }}">
                                        <a href="{{ $mainCategory ? ($mainCategory->url ?: url('/' . $mainCategory->slug)) : '#' }}">
                                            {{ $menu->title }}
                                        </a>
                                        
                                        @if($hasSubcategories)
                                            <!-- Check if this is Divisions menu for mega menu -->
                                            @if($menu->id == 2) <!-- Divisions menu -->
                                                <ul class="sub-menu header__mega-menu mega-menu mega-menu-pages">
                                                    <li>
                                                        <div class="mega-menu-wrapper">
                                                            @foreach($mainCategory->sub_categories->chunk(ceil($mainCategory->sub_categories->count() / 3)) as $chunk)
                                                                @foreach($chunk as $subCategory)
                                                                    <div class="mega-menu-pages-single">
                                                                        <div class="mega-menu-pages-single-inner">
                                                                            <a class="mega-menu-title mb-3" href="{{ $subCategory->url ?: url('/' . $subCategory->slug) }}">
                                                                                {{ $subCategory->title }}
                                                                            </a>
                                                                            @if($subCategory->sub_categories->count())
                                                                                <div class="mega-menu-list mt-3">
                                                                                    @foreach($subCategory->sub_categories as $nestedSub)
                                                                                        <a href="{{ $nestedSub->url ?: url('/' . $nestedSub->slug) }}">
                                                                                            {{ $nestedSub->title }}
                                                                                        </a>
                                                                                    @endforeach
                                                                                </div>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            @endforeach
                                                        </div>
                                                    </li>
                                                </ul>
                                            @else
                                                <!-- Regular Dropdown for other menus -->
                                                <ul class="sub-menu">
                                                    @foreach($mainCategory->sub_categories as $subCategory)
                                                        <li>
                                                            <a href="{{ $subCategory->url ?: url('/' . $subCategory->slug) }}">
                                                                {{ $subCategory->title }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>

                    <!-- header right info -->
                    <div class="header-right-item d-none d-lg-inline-flex">
                        <div class="header-search">
                            <button class="search">
                                <i class="tji-search"></i>
                            </button>
                            <button type="button" class="search_close_btn">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        <div class="header-button">
                            <a class="tj-primary-btn" href="{{ url('/contact') }}">
                                <span class="btn-text"><span>Let's Talk</span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                            </a>
                        </div>
                        <div class="menu_bar menu_offcanvas d-none d-lg-inline-flex">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <!-- menu bar -->
                    <div class="menu_bar mobile_menu_bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Search Popup -->
    <div class="search_popup">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="tj_search_wrapper">
                        <div class="search_form">
                            <form action="#">
                                <div class="search_input">
                                    <div class="search-box">
                                        <input class="search-form-input" type="text" placeholder="Type Words and Hit Enter" required>
                                        <button type="submit">
                                            <i class="tji-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end: Sticky Header Area -->