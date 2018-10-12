<!doctype html>
<html>

  @include('includes.head')
 
<body>
 
  @include('includes.admin_side_nav')

  <div class="main-content">


    @include('includes.admin_top_nav')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="card shadow">
              <div class="card-body">
                <div class="nav-wrapper">
                  <div class="form-group mb-sm-4 mb-md-0">
                    @yield('search_form')
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">

  hello hello hello 
  @yield('content')

  @include('includes.footer')
  </div>
</div>
  @include('includes.admin_scripts')
 
</body>
</html>