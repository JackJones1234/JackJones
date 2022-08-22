<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body class="antialiased">
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
            <td>Remove | Edit</td>
        </tr>
    @endforeach
</table>
</body>
</html>
