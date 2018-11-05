@extends('layouts.admin_default')

@section('content')
  @include('admin_pages.users.user_search')
  @include('admin_pages.users.user_table')
  @include('admin_pages.users.user_modal')
@stop
