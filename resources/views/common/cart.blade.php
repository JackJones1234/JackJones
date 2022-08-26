@extends('layout.master')

@section('content')

<div class="cart-container">
    <div class="cart-head">
        <h1 class="cart-h1">Your cart</h1>
        <a class="cart-storefront-btn" href="{{ url('/checkout') }}">To Checkout</a>
        <a class="cart-storefront-btn" href="{{ url('') }}">Continue shopping</a>
    </div>
    <div class="cart-subhead">
        <div class="cart-subhed-text">product</div>
        <div class="cart-subhed-text total">total</div>
    </div>
    <div class="cart-products-wrapper">
        @foreach($products as $product)
            <div class="cart-product-container">
               <div class="product-info">
                    <div>Name: <span class="product-name">{{ $product['product']->name }}</span></div>
                    <div class="quantity">Quantity: {{ $product['quantity'] }}</div>
                    <div class="price">Price for 1: {{ $product['product']->price }}</div>
               </div>
               
                <form action="">
                    @csrf
                    <input type="number" name="quantity" min="1" max="100" value="{{ $product['quantity'] }}">
                    <input type="hidden" name="old_quantity" value="{{ $product['quantity'] }}">
                    <input type="submit" value="Change" class="update">
                    <input type="hidden" value="{{ $product['product']->id}}" name="product_id">
                    <input type="submit" value="Remove" class="delete">
                </form>
            </div>
        @endforeach
    </div>
</div>

<script src="{{ asset('js/cart/cart.js') }}"></script>

@endsection

