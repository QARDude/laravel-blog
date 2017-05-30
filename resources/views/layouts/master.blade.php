@include('layouts.header')
  <body>
  @include('layouts.nav')
    <div class="container">
      @yield('content')
    </div>
  @include('layouts.footer')
  </body>
</html>
