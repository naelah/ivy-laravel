@extends('layouts.admin_default')

@section('search_form')
  @include('admin_pages.reservations.reservation_search')
@stop
 
@section('content')
  @include('admin_pages.reservations.reservation_table')
@stop