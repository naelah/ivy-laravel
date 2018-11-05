@extends('layouts.admin_default')

 
@section('content')
  @include('admin_pages.reservations.reservation_search')
  @include('admin_pages.reservations.reservation_table')
  @include('admin_pages.reservations.reservation_modal')
@stop
