<div class="col-lg-4 col-md-6 mb-4">
    <div class="product-card">
        
        <div class="product-image-container">
            <img src="{{ asset($product['image']) }}" class="product-image" alt="{{ $product['name'] }}">
        </div>
        <div class="product-content">
            <span class="product-category">{{ $product['category'] }}</span>
            <h3 class="product-title">{{ $product['name'] }}</h3>
            <p class="product-description">{{ $product['description'] }}</p>
            <p class="product-price">${{ number_format($product['price'], 2) }}</p>
        </div>
    </div>
</div>
