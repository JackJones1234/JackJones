@extends('layout.master')

@section('content')
<form action="/admin/product/store" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name='product_name' placeholder="product name">
    <input type="text" name='product_price' placeholder="product price">
    <input type="file" name="product_image">
    <input type="submit" value="Add">
</form>
@endsection