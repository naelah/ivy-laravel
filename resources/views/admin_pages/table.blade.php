@extends('layouts.admin_default')

@section('content')



<div class="card bg-secondary shadow">
  <div class="card-header bg-white border-0">
      <!--    Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange                  
            Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
    -->
    <div class="row">
      <div class="col-8">
        <h3 class="mb-0">Menu List</h3>
      </div>
      <div class="col-4 text-right">
        <a href="#!" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#menuNew">New Menu</a>
      </div>
    </div>
  </div>
  <div class="card-body bg-white">
    <div class="table-responsive bg-white full-screen-table fresh-table">

        <table id="fresh-table" class="table align-items-center">
            <thead class="thead-light">
                <th data-field="id">No</th>
            	<th data-field="title" data-sortable="true">Menu Title</th>
            	<th data-field="price"" data-sortable="true">Price (MMK)</th>
            	<th data-field="period" data-sortable="true">Period</th>
            	<th data-field="status">Status</th>
            	<th data-field=""></th>
            </thead>
            <tbody>
            <tr>
            <td>
              1 
            </td>
            <td>
              <span class="mb-0 text-sm">Hair Treatment</span>        
            </td>
            <td>
                2,500 
            </td>
            <td>
                1 hour
            </td>
            <td><span class=" badge badge-success">active</span></td>
              <td class="text-right">
                <div class="dropdown">
                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" href="#">Edit</a>
                    <a class="dropdown-item" href="#">Delete</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <tr>
                <td>
                  2 
                </td>
                <td>
              <span class="mb-0 text-sm">Hair Treatment</span>        
              </td>
                <td>
                  2,500 
                </td>
                <td>
                  2 hours
                </td>
                <td><span class=" badge badge-danger">inactive</span></td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <tr>
                  <td>
                    2 
                  </td>
                  <td>
              <span class="mb-0 text-sm">Hair Treatment</span>        
              </td>
                  <td>
                    2,500 
                  </td>
                  <td>
                    1 hour
                  </td>
                  <td><span class=" badge badge-success">active</span></td>
                  <td class="text-right">
                    <div class="dropdown">
                      <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <tr>
                    <td>
                      2 
                    </td>
                    <td>
              <span class="mb-0 text-sm">Hair Treatment</span>        
              </td>
                    <td>
                      MMK2,500 
                    </td>
                    <td>
                      2 hours
                    </td>
                    <td><span class=" badge badge-success">active</span></td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">Delete</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <tr>
                      <td>
                        4 
                      </td>
                      <td>
              <span class="mb-0 text-sm">Hair Treatment</span>        
              </td>
                      <td>
                        2,500 
                      </td>
                      <td>
                        2 hours
                      </td>
                      <td><span class=" badge badge-success">active</span></td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
            </tbody>
        </table>
        </div>
    </div>
  </div>
 
  @include('admin_pages.salons.menu_modal')
@stop

@section('extra_scripts')
  @include('includes.table_script')
@stop