@extends('layout.master')

@section('content')
    <a href="{{ url('') }}">Go to Storefront</a>
    @if(gettype($products) == "array")
        @foreach($products as $product)
            <div>
                <div>Name: {{ $product['product']->name }}</div>
                <div>Quantity: {{ $product['quantity'] }}</div>
                <div>Price for 1: {{ $product['product']->price }}</div>
            </div>
        @endforeach
    @else
       <div>
           <div>Namee: {{ $products->name }}</div>
           <div>Quantityy: {{ $products['quantity'] }}</div>
           <div>Price for 1ss: {{ $products->price }}</div>
       </div>
    @endif
@endsection
