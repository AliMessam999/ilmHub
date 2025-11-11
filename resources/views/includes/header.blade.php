<!-- start: Header Area -->
<header class="header-area header-2 header-absolute section-gap-x">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="header-wrapper">
          <!-- site logo -->
          <div class="site_logo">
            <a class="logo" href="{{ url('/') }}">
              <img src="{{ asset('frontend_assets/images/logos/logo-2.png') }}" alt="Logo" />
            </a>
          </div>

          <!-- navigation -->
          <div class="menu-area d-none d-lg-inline-flex align-items-center">
            <nav id="mobile-menu" class="mainmenu">
              <ul>
                {{-- Dynamic Menus --}}
                @foreach ($menus->sortBy('order') as $menu)
                  @php
                    $withSub = $menu->categories->filter(fn($cat) => $cat->sub_categories->isNotEmpty());
                    $withoutSub = $menu->categories->filter(fn($cat) => $cat->sub_categories->isEmpty());
                  @endphp

                  <li class="{{ $menu->categories->isNotEmpty() ? 'has-dropdown' : '' }}">
                    <a href="{{ url($menu->slug) }}">
                      {{ $menu->title }}
                    </a>

                    {{-- CASE 1: Categories that have subcategories --}}
                    @if ($withSub->isNotEmpty())
                      @if ($withSub->count() > 1)
                        {{-- Mega Menu --}}
                        <ul class="sub-menu header__mega-menu mega-menu mega-menu-pages">
                          <li>
                            <div class="mega-menu-wrapper">
                              @foreach ($withSub as $category)
                                <div class="mega-menu-pages-single">
                                  <div class="mega-menu-pages-single-inner">
                                    <a class="mega-menu-title mb-3" href="{{ url($category->slug) }}">{{ $category->title }}</a>

                                    <div class="mega-menu-list mt-3">
                                      @foreach ($category->sub_categories as $sub)
                                        <a href="{{ url($sub->slug) }}">{{ $sub->title }}</a>
                                      @endforeach
                                    </div>
                                  </div>
                                </div>
                              @endforeach
                            </div>
                          </li>
                        </ul>
                      @else
                        {{-- Single category with subcategories --}}
                        <ul class="sub-menu">
                          @foreach ($withSub as $category)
                            <li>
                              <a href="{{ url($category->slug) }}">{{ $category->title }}</a>
                              <ul class="sub-menu">
                                @foreach ($category->sub_categories as $sub)
                                  <li>
                                    <a href="{{ url($sub->slug) }}">
                                      {{ $sub->title }}
                                    </a>
                                  </li>
                                @endforeach
                              </ul>
                            </li>
                          @endforeach
                        </ul>
                      @endif
                    @endif

                    {{-- CASE 2: Categories without subcategories --}}
                    @if ($withoutSub->isNotEmpty())
                      <ul class="sub-menu">
                        @foreach ($withoutSub as $category)
                          <li>
                            <a href="{{ url($category->slug) }}">
                              {{ $category->title }}
                            </a>
                          </li>
                        @endforeach
                      </ul>
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
              <button class="search"><i class="tji-search"></i></button>
              <button type="button" class="search_close_btn">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5"
                    stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </button>
            </div>
            <div class="header-button">
              <a class="tj-primary-btn" href="{{ url('/contact') }}">
                <span class="btn-text"><span>Let’s Talk</span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
              </a>
            </div>
            <div class="menu_bar menu_offcanvas d-none d-lg-inline-flex">
              <span></span><span></span><span></span>
            </div>
          </div>

          <!-- mobile menu bar -->
          <div class="menu_bar mobile_menu_bar d-lg-none">
            <span></span><span></span><span></span>
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
                    <input class="search-form-input" type="text" placeholder="Type Words and Hit Enter" required />
                    <button type="submit"><i class="tji-search"></i></button>
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

<!-- Duplicate Sticky Header -->
<header class="header-area header-2 header-duplicate header-sticky section-gap-x">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="header-wrapper">
          <!-- logo -->
          <div class="site_logo">
            <a class="logo" href="{{ url('/') }}">
              <img src="{{ asset('frontend_assets/images/logos/logo-black.png') }}" alt="Logo" />
            </a>
          </div>

          <!-- navigation -->
          <div class="menu-area d-none d-lg-inline-flex align-items-center">
            <nav class="mainmenu">
              <ul>
                <li><a href="{{ url('/') }}">Home</a></li>

                {{-- Dynamic Menus --}}
                @foreach ($menus->sortBy('order') as $menu)
                  @php
                    $withSub = $menu->categories->filter(fn($cat) => $cat->sub_categories->isNotEmpty());
                    $withoutSub = $menu->categories->filter(fn($cat) => $cat->sub_categories->isEmpty());
                  @endphp

                  <li class="{{ $menu->categories->isNotEmpty() ? 'has-dropdown' : '' }}">
                    <a href="{{ url($menu->slug) }}">
                      {{ $menu->title }}
                    </a>

                    {{-- CASE 1: Categories that have subcategories --}}
                    @if ($withSub->isNotEmpty())
                      @if ($withSub->count() > 1)
                        {{-- Mega Menu --}}
                        <ul class="sub-menu header__mega-menu mega-menu mega-menu-pages">
                          <li>
                            <div class="mega-menu-wrapper">
                              @foreach ($withSub as $category)
                                <div class="mega-menu-pages-single">
                                  <div class="mega-menu-pages-single-inner">
                                    <a class="mega-menu-title mb-3" href="#">{{ $category->title }}</a>
                                    @if ($category->sub_categories->isNotEmpty())
                                      <div class="mega-menu-list mt-3">
                                        @foreach ($category->sub_categories as $sub)
                                          <a href="{{ url($sub->slug) }}">
                                            {{ $sub->title }}
                                          </a>
                                        @endforeach
                                      </div>
                                    @endif
                                  </div>
                                </div>
                              @endforeach
                            </div>
                          </li>
                        </ul>
                      @else
                        {{-- Single category with subcategories --}}
                        <ul class="sub-menu">
                          @foreach ($withSub as $category)
                            <li>
                              <a href="{{ url($category->slug) }}">
                                {{ $category->title }}
                              </a>
                              <ul class="sub-menu">
                                @foreach ($category->sub_categories as $sub)
                                  <li>
                                    <a href="{{ url($sub->slug) }}">
                                      {{ $sub->title }}
                                    </a>
                                  </li>
                                @endforeach
                              </ul>
                            </li>
                          @endforeach
                        </ul>
                      @endif
                    @endif

                    {{-- CASE 2: Categories without subcategories --}}
                    @if ($withoutSub->isNotEmpty())
                      <ul class="sub-menu">
                        @foreach ($withoutSub as $category)
                          <li>
                            <a href="{{ url($category->slug) }}">
                              {{ $category->title }}
                            </a>
                          </li>
                        @endforeach
                      </ul>
                    @endif
                  </li>
                @endforeach
              </ul>
            </nav>
          </div>

          <!-- right items -->
          <div class="header-right-item d-none d-lg-inline-flex">
            <div class="header-search">
              <button class="search"><i class="tji-search"></i></button>
              <button type="button" class="search_close_btn">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5"
                    stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </button>
            </div>
            <div class="header-button">
              <a class="tj-primary-btn" href="{{ url('/contact') }}">
                <span class="btn-text"><span>Let’s Talk</span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
              </a>
            </div>
            <div class="menu_bar menu_offcanvas d-none d-lg-inline-flex">
              <span></span><span></span><span></span>
            </div>
          </div>

          <!-- mobile menu bar -->
          <div class="menu_bar mobile_menu_bar d-lg-none">
            <span></span><span></span><span></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- end: Header Area -->
