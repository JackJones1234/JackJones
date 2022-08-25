@extends('layout.master')

@section('content')
    <div class="main-container">
        <a class="cart-storefront-btn" href="{{ url('') }}">Go to Storefront</a>
        @if(gettype($products) == "array")
            @foreach($products as $product)
                <div class="cart-product-container">
                    <div>{{ $product['product']->name }}</div>
                    <div>{{ $product['quantity'] }}</div>
                    <div>{{ $product['product']->price }}</div>
                </div>
            @endforeach
        @endif
    </div>
@endsection

