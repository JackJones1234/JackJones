{{-- all products --}}
<div class="product-container">
    @foreach($products as $product)
        <div class="product-card" onclick="openProduct(this)" data-id="{{ $product->id }}" data-tilt data-tilt-max="20" data-tilt-speed="5000">
             <img src="{{ asset('images/product/tablelamps/'. $product->img) }}" alt="product">
              <div class="product-info">
                <div><span class="product-name">{{ $product->name }}</span></div>
                <div>${{ $product->price }}</div>
            </div>
        </div>
    @endforeach
</div>
