<div class="nav-wrapper">
  <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
    <li class="nav-item">
      <a class="nav-link mb-sm-3 mb-md-0 active" id="menu-tab" data-toggle="tab" href="#menu" role="tab" aria-controls="menu" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Menu</a>
    </li>
    <li class="nav-item">
      <a class="nav-link mb-sm-3 mb-md-0" id="promo-tab" data-toggle="tab" href="#promo" role="tab" aria-controls="promo" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Promotion</a>
    </li>
  </ul>
</div>
<div class="card shadow">
  <div class="card-body">
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="menu" role="tabpanel" aria-labelledby="menu-tab">
        <div class="card-body">
          <div class="table-responsive">
    
            @include('admin_pages.menus.menu_search')
            @include('admin_pages.menus.menu_table')
            @include('admin_pages.menus.menu_modal')

          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="promo" role="tabpanel" aria-labelledby="promo-tab">
        @include('admin_pages.promotions.promotion_search')
        @include('admin_pages.promotions.promotion_table')
        @include('admin_pages.promotions.promotion_modal')
      </div>
    </div>
  </div>
</div>