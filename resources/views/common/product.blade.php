<div class="product-container flex-center">
    @foreach($products as $product)
        <div class="product-card" onclick="openProduct(this)" data-id="{{ $product->id }}" data-tilt data-tilt-max="20" data-tilt-speed="5000">
            {{-- <img src="{{ asset('images/product/'. $product->img) }}" alt="product"> --}}
            <img src="{{ asset('images/product/product.png') }}" alt="product">
            
            <div class="product-info">
                <div class="product-name">{{ $product->name }}</div>
                <div class="product-price">${{ $product->price }}</div>
            </div>
        </div>
    @endforeach
</div>



