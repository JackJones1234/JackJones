@extends('layout.master')

@section('content')

        <div class="single-product-container">
            <img src="{{ asset('images/product/tablelamps/'. $product->img) }}" alt="product">

            <div class="product-info">
                <div class="product-name">{{ $product->name }}</div>
                <div class="product-price">${{ $product->price }}</div>

                <form action="/cart/add" method="POST">
                    @csrf
                    <div class="quantity">
                        <input id="quantity-remove" type="button" onclick='removeQuantity(this.value);' value="-">
                        <input id="quantity" type="text" name="product_quantity" value="1" readonly>
                        <input id="quantity-add" type="button" onclick='addQuantity(this.value);' value="+">
                    </div>
    
                    <input id="button-submit" type="submit" value="Add to cart">
                    <input id="button-buyitnow" type="submit" value="Buy it now">
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                </form>
            </div>
        </div> 

    <script src="{{ asset('js/product/productQuantity.js')}}"></script>

@endsection


