@extends('layouts.admin_default')

@section('search_form')
  @include('admin_pages.staffs.staff_search')
@stop
 
@section('content')
  @include('admin_pages.staffs.staff_table')
@stop