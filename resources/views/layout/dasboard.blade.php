<html>
  @include('include.head')
</html>
<body>
  @include('include.header')
    <div class="container-fluid">
      @include('include.sidebar')
      <div class="col-md-9">
        @yield('content')
      </div>
    </div>
    @include('include.footer')
</body>
