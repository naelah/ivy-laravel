<!doctype html>
<html>
  @include('includes.head')

<body>

  <!-- Main content -->
  <div class="main-content">

    @yield('content')
    
    <!-- Footer -->
     @include('includes.footer')
  </div>
  <!-- Argon Scripts -->
  @include('includes.admin_scripts')

</body>

</html>



