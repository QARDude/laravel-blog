@include('bloglayouts.header')
      <body>
  @include('bloglayouts.nav')
    <div class="container">
        <div class="row">
            @yield('content')
        @include('bloglayouts.sidebar')
        </div>
    </div>
  @include('bloglayouts.footer')
  </body>
</html>