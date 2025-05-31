<div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100 border-0 shadow-sm">
        <img src="{{ asset($product['image']) }}" class="card-img-top" alt="{{ $product['name'] }}" style="height: 250px; object-fit: cover;">
        <div class="card-body">
            <h5 class="card-title">{{ $product['name'] }}</h5>
            <p class="card-text text-muted">{{ $product['description'] }}</p>
            <p class="fw-bold text-primary">{{ $product['price'] }}</p>
        </div>
    </div>
</div>
