@extends('layout.master')

@section('content')
    <a href="{{ url('') }}">Go to Storefront</a>
    @if(gettype($products) == "array")
        @foreach($products as $product)
            <div>
                <div>Name: {{ $product['product']->name }}</div>
                <div>Quantity: {{ $product['quantity'] }}</div>
                <div>Price for 1: {{ $product['product']->price }}</div>
                <a href="">Remove from cart</a>
                <form action="" method="POST">
                    @csrf
                    <input type="number" min="1" max="100" value={{ $product['quantity']}}>
                    <input type="submit" value="add other quantity">
                </form>
            </div>
        @endforeach
    @endif
@endsection
