@extends('layout.master')

@section('content')
<button onclick="location.href='/admin/product/add'">Add</button>
<table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Price</th>
    </tr>
    @foreach($products as $product)
        <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        </tr>
    @endforeach
  </table>
@endsection