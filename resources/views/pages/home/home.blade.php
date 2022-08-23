{{-- @include('common/header')
@include('common/footer') --}}

@extends('layout.master')

@section('content')

<div class="main-container">
    @include('common.header')
    @include('common.title')
    @include('common.product')
    @include('common.footer')
</div>

@endsection