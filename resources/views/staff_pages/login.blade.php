@extends('layouts.admin_register')
 
@section('header')
  @include('staff_pages.sessions.login_header')
@stop

@section('content')
  @include('staff_pages.sessions.login_form')
@stop