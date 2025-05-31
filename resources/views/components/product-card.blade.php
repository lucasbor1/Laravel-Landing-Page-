<div class="col-md-4 mb-4">
    <div class="card h-100 border-0 shadow-sm">
        <img src="{{ asset($product['image']) }}" class="card-img-top" alt="{{ $product['name'] }}">
        <div class="card-body">
            <h5 class="card-title">{{ $product['name'] }}</h5>
            <p class="card-text text-muted">{{ $product['description'] }}</p>
            <p class="fw-bold text-primary">{{ $product['price'] }}</p>
        </div>
    </div>
</div>
