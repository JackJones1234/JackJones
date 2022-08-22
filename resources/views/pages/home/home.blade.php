{{-- @include('common/header')
@include('common/footer') --}}

@extends('layout.master')

@section('content')
    <h2>Vel vajag header dala</h2>
    @include('pages.home.components.product')
    <h2>Product test prikols</h2>
    <h2>Vel vajag footer dala</h2>
@endsection
