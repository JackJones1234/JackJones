@extends('layout.master')

@section('content')
    <div class="single-product-container">
        <div class="product-card">
            <img src="{{ asset('images/product/' . $product->img) }}" alt="">
            <div class="product-info">
                <div>{{ $product->name }}</div>
                <div>${{ $product->price }}</div>
            </div>
        </div>
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, dignissimos ea eos esse fugit illo laboriosam magni mollitia non odio odit optio quam, sed ullam vel veniam voluptate. Modi, tempore?</div>
        <form action="/cart" method="POST">
            @csrf
            <input type="number" name="product_quantity" min="1" max="100" value="1">
            <input type="submit" value="ADD TO CART">
            <input type="hidden" name="product_id" value="{{ $product->id }}">
        </form>
        <a href="{{ url('') }}">go back</a>
    </div>
@endsection
