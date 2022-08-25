<div class="product-container">
    @foreach($products as $product)
        <div class="product-card" onclick="openProduct(this)" data-id="{{ $product->id }}" data-tilt data-tilt-max="20" data-tilt-speed="5000">
            {{-- <img src="{{ asset('images/product/'. $product->img) }}" alt="product"> --}}
            <img src="{{ asset('images/product/product.png') }}" alt="product">
              <div class="product-info">
                <div>{{ $product->name }}</div>
                <div>${{ $product->price }}</div>
                <img src="{{ asset('images/product/'. $product->img) }}" alt="">
            </div>
        </div>
    @endforeach
</div>



