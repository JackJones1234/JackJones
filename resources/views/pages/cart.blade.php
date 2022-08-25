@extends('layout.master')

@section('content')
    <a href="{{ url('') }}">Go to Storefront</a>
    @if(gettype($products) == "array")
        @foreach($products as $product)
            <div>
                <div>{{ $product['product']->name }}</div>
                <div>{{ $product['quantity'] }}</div>
                <div>{{ $product['product']->price }}</div>
            </div>
        @endforeach
    @else
       <div>
           <div>{{ $products->name }}</div>
           <div>{{ $products['quantity'] }}</div>
           <div>{{ $products->price }}</div>
       </div>
    @endif
@endsection
