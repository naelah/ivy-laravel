@extends('layouts.admin_default')

@section('search_form')
  @include('admin_pages.users.user_search')
@stop
 
@section('content')
  @include('admin_pages.users.user_table')
@stop

@section('extra_scripts')
  @include('admin_pages.users.user_scripts')
@stop