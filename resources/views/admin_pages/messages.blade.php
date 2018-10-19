@extends('layouts.admin_default')

@section('search_form')
  @include('admin_pages.messages.message_form')
@stop
 
@section('content')
  @include('admin_pages.messages.new_message')
  @include('admin_pages.messages.message_logs')
@stop