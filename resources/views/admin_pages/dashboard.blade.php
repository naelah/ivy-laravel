@extends('layouts.admin_default')

@section('search_form')
@include('admin_pages.dashboard.card_header')
@stop
 
@section('content')
 
@include('admin_pages.dashboard.revenue_summary')
 
@stop