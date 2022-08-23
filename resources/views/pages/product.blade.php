@extends('layout.master')

@section('content')
    <div class="single-product-container">
        <div class="product-card">
            <img src="{{ asset('images/product/Mobile/product.png') }}" alt="">
            <div class="product-info">
                <div>{{ $data->name }}</div>
                <div>${{ $data->price }}</div>
            </div>
        </div>
        <a href="http://127.0.0.1:8000/">go back</a>
    </div>
@endsection
