<!doctype html>
<html>

  @include('includes.head')

<body>

<!-- Side Nave -->
@include('includes.admin_side_nav')

  <!-- Main content -->
  <div class="main-content">

   @include('includes.admin_top_nav')

    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          
        </div>
      </div>
    </div>

    
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-12 mb-12 mb-xl-0">
          <div class="card shadow">
            <div class="card-header bg-transparent">
            @yield('content')
            </div>
          </div>
        </div>
       </div>
     
      <!-- Footer -->
      @include('includes.footer')
    </div>
  </div>
  <!-- Argon Scripts -->
  @include('includes.admin_scripts')
  @yield('extra_scripts')

</body>

</html>



