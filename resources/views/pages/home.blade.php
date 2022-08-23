@extends('layout.default')

@section('content')


    <div class="product-container">
        @foreach($products as $product)
            <div class="product-card">
                {{ $product->name }}: {{ $product->price }}$
                <div>img url: {{ $product->img }}</div>
            </div>
        @endforeach
    </div>

    @push('styles')
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @endpush

@endsection
