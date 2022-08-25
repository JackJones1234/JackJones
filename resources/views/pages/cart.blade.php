@extends('layout.master')

@section('content')
    <a href="{{ url('') }}">Go to Storefront</a>
    @if(gettype($products) == "array")
        @foreach($products as $product)
            <div>
                <div>Name: {{ $product['product']->name }}</div>
                <div>Quantity: {{ $product['quantity'] }}</div>
                <div>Price for 1: {{ $product['product']->price }}</div>
                <a href="{{ url('/cart/delete',[$product['product']->id]) }}" class="delete">Remove from cart</a>
                <form action="">
                    @csrf
                    <input type="number" name="quantity" min="1" max="100" value={{ $product['quantity']}}>
                    <input type="hidden" name="old_quantity" value="{{ $product['quantity'] }}">
                    <input type="submit" value="add other quantity" class="update">
                    <input type="hidden" value="{{ $product['product']->id}}" name="product_id">
                </form>
            </div>
        @endforeach
    @endif
    <script src="{{ asset('/js/cart/cart.js') }}"></script>
@endsection
