<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.head')
  
</head>
<body>
  <div class="body-overlay"></div>
  @include('includes.global-ui')
  @include('includes.header')

  <div id="smooth-wrapper">
    <div id="smooth-content">
      <main id="primary" class="site-main">
        @yield('content')
      </main>

      @include('includes.footer')
    </div>
  </div>
  
  @include('includes.scripts')
</body>
</html>
