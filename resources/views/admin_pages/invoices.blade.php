@extends('layouts.admin_default')

@section('content')
  @include('admin_pages.invoices.invoice_search')
  @include('admin_pages.invoices.invoice_table')
  @include('admin_pages.invoices.invoice_modal')
@stop