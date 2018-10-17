<div class="nav-wrapper">
  <ul class="nav nav-pills nav-fill flex-column flex-md-row">
    <li class="nav-item">
      <a class="nav-link mb-sm-3 mb-md-0 active" data-toggle="tab" href="#tabFirst">
        <i class="ni ni-settings-gear-65 mr-2"></i>Settings
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link mb-sm-3 mb-md-0" data-toggle="tab" href="#tabSecond">
        <i class="ni ni-cart mr-2"></i>Service
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link mb-sm-3 mb-md-0" data-toggle="tab" href="#tabThird">
        <i class="ni ni-calendar-grid-58 mr-2"></i>Reservations
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link mb-sm-3 mb-md-0" data-toggle="tab" href="#tabFourth">
        <i class="ni ni-single-02 mr-2"></i>Staff
      </a>
    </li>
  </ul>
</div>
<div class="card shadow">
  <div class="card-body">
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="tabFirst">  
        @include('admin_pages.salons.salon')
      </div>
      <div class="tab-pane fade" id="tabSecond">
        @include('admin_pages.salons.menu')
        <br><br>
        @include('admin_pages.salons.promotion')
      </div>
      <div class="tab-pane fade" id="tabThird">
      @include('admin_pages.salons.reservation')
      </div>
      <div class="tab-pane fade" id="tabFourth">
      @include('admin_pages.salons.staff')
      </div>
    </div>
  </div>
</div>