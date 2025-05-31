<div class="col-md-6 mb-4">
    <div class="card h-100 border-0 shadow-sm">
        <div class="card-body p-4">
            <div class="d-flex align-items-center mb-3">
                <div class="me-3">
                    <img src="{{ asset($testimonial['image'] ?? 'images/default-avatar.jpg') }}"
                         class="rounded-circle"
                         width="50"
                         height="50"
                         alt="{{ $testimonial['name'] }}">
                </div>
                <div>
                    <h5 class="mb-0">{{ $testimonial['name'] }}</h5>
                    <div class="text-warning">
                        @for($i = 0; $i < 5; $i++)
                            @if($i < floor($testimonial['rating']))
                                <i class="bi bi-star-fill"></i>
                            @else
                                <i class="bi bi-star"></i>
                            @endif
                        @endfor
                        <span class="text-muted ms-2">{{ number_format($testimonial['rating'], 1) }}</span>
                    </div>
                </div>
            </div>
            <p class="card-text">{{ $testimonial['comment'] }}</p>
        </div>
    </div>
</div>
