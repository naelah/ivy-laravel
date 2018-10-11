<!doctype html>
<html>

  @include('includes.head')
 
<body>
 
  @include('includes.admin_side_nav')

  <div class="main-content">

    @include('includes.admin_top_nav')
    @yield('search_form')
    <!-- Page content -->
    <div class="container-fluid mt--7">
      hello hello
      @yield('content')

 
  @include('includes.footer')
  </div>
</div>
  @include('includes.admin_scripts')
 
</body>
</html>