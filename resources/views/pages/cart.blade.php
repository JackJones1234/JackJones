@extends('layout.master')

@section('content')
    <a href="{{ url('') }}">Go to Storefront</a>
    @if(gettype($products) == "array")
        @foreach($products as $product)
            <div>
                <div>{{ $product->name }}</div>
                <div>{{ $product->price }}</div>
            </div>
        @endforeach
    @else
       <div>
           <div>{{ $products->name }}</div>
           <div>{{ $products->price }}</div>
       </div>
    @endif
@endsection
