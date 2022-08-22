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
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Img</th>
        <th>Price</th>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->img}}</td>
            <td>{{$product->price}}</td>
        </tr>
    @endforeach
    <tr>

    </tr>
</table>
</body>
</html>
