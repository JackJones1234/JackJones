@extends('layout.admin_master')

@section('content')
<form action="/admin/product/edit" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name='product_name' placeholder="product name" value="{{ $product->name }}">
    <input type="text" name='product_price' placeholder="product price" value="{{ $product->price }}">
    <input type="file" name="product_image" value="{{ $product->img }}">
    <img src="{{ asset('images/product/' . $product->img) }}" alt="">
    <input type="hidden" value="{{ $product->img }}" name="product_image_name">
    <input type="hidden" value="{{ $product->id }}" name="product_id">
    <input type="submit" name="submit" value="Edit">
</form>
@endsection