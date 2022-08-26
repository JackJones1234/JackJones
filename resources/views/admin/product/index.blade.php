
    @extends('layout.admin_master')

    @section('content')
    @if (Session::get('message'))
        {{ Session::get('message') }}
    @endif
    <button class="button-light" onclick="location.href='/admin/product/add'">Add</button>
    <div class="table-wrapper">
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
                        <div class="form-wrapper">
                            <form action="/admin/product/delete" method="POST">
                                @csrf
                                <input class="button-dark" type="submit" value="Delete">
                                <input type="hidden" name='product_id' value={{ $product->id }}>
                            </form>
                            <button class="button-light" onclick="location.href='/admin/product/edit/{{ $product->id }}'">Edit</button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    @endsection
