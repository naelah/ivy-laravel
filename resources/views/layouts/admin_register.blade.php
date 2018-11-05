<!doctype html>
<html>

  @include('includes.head')

<body class="bg-default">

  <!-- Main content -->
  <div class="main-content">

    <!-- Navigation -->
    @include('includes.login_nav')

    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          @yield('header')
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>

    
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          @yield('content')
        </div>
      </div>  
    </div>  
  </div>

  <!-- Footer -->
  @include('includes.footer')

  <!-- Argon Scripts -->
  @include('includes.admin_scripts')
  @yield('extra_scripts')

</body>

</html>



