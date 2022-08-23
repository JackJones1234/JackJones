{{-- @include('common/header')
@include('common/footer') --}}

@extends('layout.master')

@section('content')
<<<<<<< Updated upstream
<div class="main-container">
    @include('common.header')
    @include('common.title')
    @include('common.product')
    @include('common.footer')
</div>
=======
    <h2>Vel vajag header dala</h2>
    @include('pages.home.components.product')
    @include('pages.home.components.footer')
    <h2>Product test prikols</h2>
>>>>>>> Stashed changes
@endsection