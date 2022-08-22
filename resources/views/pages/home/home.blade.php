{{-- @include('common/navigation')
@include('common/footer') --}}

@extends('layout.master')

@section('content')
    @include('pages.home.components.shippingPromo')
    @include('common.navigation')
    @include('pages.home.components.title')
    @include('pages.home.components.product')
@endsection