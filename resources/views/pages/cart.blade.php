@extends('layout.master')

@section('content')
    <div class="main-container">
        <div class="cart-container">
            <div class="cart-head">
                <h1 class="cart-h1">Your cart</h1>
                <a class="cart-storefront-btn" href="{{ url('') }}">Continue shopping</a>
            </div>      
            @if(gettype($products) == "array")
                @foreach($products as $product)
                    <div class="cart-product-container">
                        <div class="cart-product">{{ $product['product']->name }}</div>
                        <div class="cart-product">{{ $product['quantity'] }}</div>
                        <div class="cart-product">{{ $product['product']->price }}</div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection

