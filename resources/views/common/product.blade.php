<div class="product-container flex-center">
    @foreach($products as $product)
        <div class="product-card" onclick="openProduct(this)" data-id="{{ $product->id }}" data-tilt data-tilt-speed="5000">
            <div class="product-info">
                <div>{{ $product->name }}</div>
                <div>${{ $product->price }}</div>
            </div>
        </div>
    @endforeach
</div>



