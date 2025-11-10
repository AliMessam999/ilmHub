<!-- resources/views/components/menuu.blade.php -->

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
                <li class="current-menu-ancestor">
                  <a href="{{ url('/') }}">Home</a>
                </li>

                @foreach ($menus->sortBy('order') as $menu)
                  @php
                    $categories = $menu->categories ?? collect();
                    // Separate categories with sub-categories and without
                    $categoriesWithSubs = $categories->filter(fn($cat) => $cat->sub_categories->count() > 0);
                    $categoriesWithoutSubs = $categories->filter(fn($cat) => $cat->sub_categories->count() === 0);
                  @endphp

                  <li class="{{ $categories->count() ? 'has-dropdown' : '' }}">
                    <a href="{{ $menu->url ?? '#' }}">{{ $menu->name }}</a>

                    @if ($categories->count())
                      @if (strtolower($menu->slug) === 'divisions' || $categoriesWithSubs->count() > 0)
                        {{-- MEGA MENU: Show in multiple columns for categories with sub-categories --}}
                        <ul class="sub-menu header__mega-menu mega-menu mega-menu-pages">
                          <li>
                            <div class="mega-menu-wrapper divisions-columns">
                              {{-- Multiple columns for categories WITH sub-categories --}}
                              @foreach ($categoriesWithSubs as $category)
                                <div class="mega-menu-pages-single division-column">
                                  <div class="mega-menu-pages-single-inner">
                                    <a class="mega-menu-title mb-3" href="{{ url('division/' . ($category->slug ?? '')) }}">
                                      {{ $category->name }}
                                    </a>

                                    {{-- Sub-categories listed vertically under each category heading --}}
                                    @if ($category->sub_categories->count())
                                      <div class="mega-menu-list mt-3">
                                        @foreach ($category->sub_categories->sortBy('order') as $sub)
                                          <a class="mega-sub-item" href="{{ url('service/' . ($sub->slug ?? '')) }}">{{ $sub->name }}</a>
                                        @endforeach
                                      </div>
                                    @endif
                                  </div>
                                </div>
                              @endforeach

                              {{-- Single column for categories WITHOUT sub-categories --}}
                              @if ($categoriesWithoutSubs->count() > 0)
                                <div class="mega-menu-pages-single division-column single-column-section">
                                  <div class="mega-menu-pages-single-inner">
                                    <div class="mega-menu-list">
                                      @foreach ($categoriesWithoutSubs as $category)
                                        <a class="mega-menu-title mega-sub-item" href="{{ url('division/' . ($category->slug ?? '')) }}">
                                          {{ $category->name }}
                                        </a>
                                      @endforeach
                                    </div>
                                  </div>
                                </div>
                              @endif
                            </div>
                          </li>
                        </ul>

                      @else
                        {{-- NORMAL DROPDOWNS (OTHER MENUS) - Show categories vertically --}}
                        <ul class="sub-menu normal-dropdown">
                          @foreach ($categories as $category)
                            <li>
                              <a href="{{ url(($menu->slug ?? '') . '/' . ($category->slug ?? '')) }}">
                                {{ $category->name }}
                              </a>
                            </li>
                          @endforeach
                        </ul>
                      @endif
                    @endif
                  </li>
                @endforeach

                {{-- mobile-only contact link --}}
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
              <button type="button" class="search_close_btn">...</button>
            </div>

            <div class="header-button">
              <a class="tj-primary-btn" href="{{ url('/contact') }}">
                <span class="btn-text"><span>Let's Talk</span></span>
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