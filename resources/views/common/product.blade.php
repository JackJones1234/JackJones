<div class="product-container flex-center">
    @foreach($products as $product)
        <div class="product-card" onclick="openProduct(this)" data-id="{{ $product->id }}">
            <img src="{{ asset('images/product/Mobile/product.png') }}" alt="" >
            <div class="product-info">
                <div>{{ $product->name }}</div>
                <div>${{ $product->price }}</div>
            </div>
        </div>
    @endforeach
</div>

