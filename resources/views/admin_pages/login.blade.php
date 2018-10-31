@extends('layouts.admin_register')
 
@section('header')
  @include('admin_pages.sessions.login_header')
@stop

@section('content')
  @include('admin_pages.sessions.login_form')
@stop