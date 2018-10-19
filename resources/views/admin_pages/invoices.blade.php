@extends('layouts.admin_default')

@section('search_form')
  @include('admin_pages.invoices.invoice_search')
@stop
 
@section('content')
  @include('admin_pages.invoices.invoice_table')
@stop