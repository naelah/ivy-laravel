@extends('layouts.admin_default')

@section('search_form')
  @include('admin_pages.salons.search_form')
@stop
 
@section('content')
@include('admin_pages.salons.salon_nav')
@stop