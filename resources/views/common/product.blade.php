<div class="product-container">
    @foreach($products as $product)
        <div class="product-card">
            {{ $product->name }}: {{ $product->price }}$
            <div>img url: {{ $product->img }}}</div>
        </div>
    @endforeach
</div>

