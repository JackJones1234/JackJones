@extends('layout.admin_master')

@section('content')
@if (Session::get('message'))
    {{ Session::get('message') }}
@endif
<button onclick="location.href='/admin/product/add'">Add</button>
<table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Price</th>
      <th>Action</th>
    </tr>
    @foreach($products as $product)
        <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>
          <form action="/admin/product/delete" method="POST">
            @csrf
            <input type="submit" value="Delete">
            <input type="hidden" name='product_id' value={{ $product->id }}>
          </form>
          <button onclick="location.href='/admin/product/edit/{{ $product->id }}'">Edit</button>
        </td>
        </tr>
    @endforeach
  </table>
@endsection