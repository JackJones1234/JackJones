{{-- all products --}}
<div class="product-container">
    @if(!sizeof($products))
        <h2>Product not found</h2>
        <a href="/">To homepage</a>
    @else
        @foreach($products as $product)
            <div class="product-card" onclick="openProduct(this)" data-id="{{ $product->id }}" data-tilt data-tilt-max="20" data-tilt-speed="5000">
                <img src="{{ asset('images/product/tablelamps/'. $product->img) }}" alt="product">
                <div class="product-info">
                    <div>{{ $product->name }}</div>
                    <div>${{ $product->price }}</div>
                </div>
            </div>
        @endforeach
    @endif
</div>
