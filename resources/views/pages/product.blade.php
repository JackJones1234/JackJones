@extends('layout.master', ['scss' => 'css/page/product'])

@section('content')
    <div class=""></div>
   <div class="product-card">
       <img src="{{ asset('images/product/Mobile/product.png') }}" alt="">
       <div class="product-info">
           <div>{{ $data->name }}</div>
           <div>${{ $data->price }}</div>
       </div>
   </div>
    <a href="http://127.0.0.1:8000/">go back</a>
@endsection
