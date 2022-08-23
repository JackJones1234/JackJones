{{-- @include('common/header')
@include('common/footer') --}}

@extends('layout.master')

@section('content')
    <h2>Vel vajag header dala</h2>
    @include('pages.home.components.product')
    @include('pages.home.components.footer')
@endsection
    <h2>Product test prikols</h2>
@endsection