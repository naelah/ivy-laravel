@extends('layouts.admin_default')
 
@section('content')
  @include('admin_pages.staffs.staff_search')
  @include('admin_pages.staffs.staff_table')
  @include('admin_pages.staffs.staff_modal')
@stop