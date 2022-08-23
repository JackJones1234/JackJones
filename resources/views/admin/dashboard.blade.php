@extends('layout.default')

@section('content')

    <div class="action">
        <button>Add</button>
    </div>

    <table>
        <tr>
            <th>Action</th>
            <th>Id</th>
            <th>Name</th>
            <th>Img</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        
        @foreach($products as $product)
            <tr>
                <td>
                    <form method="GET" action="">
                        <label for="action">
                            <input name="action" type="checkbox">
                        </label>
                    </form>
                </td>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                @if($product->img == '')
                    <td>Missing image path</td>
                @else
                    <td><img src="{{$product->img}}" alt="product_image"></td>
                @endif
                <td>{{$product->price}}</td>
                <td><a href="">Remove</a> | <a href="">Edit</a></td>
            </tr>
        @endforeach
    </table>

    @push('styles')

    @endpush

@endsection
