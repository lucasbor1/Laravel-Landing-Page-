<div class="testimonial-carousel-item">
    <div class="testimonial-card">
        <div class="quote-icone mb-4">
            <img src="{{ asset('images/quote-up.png') }}" alt="Quote" class="quote-image">
        </div>
        <p class="testimonial-text mb-4">{{ $testimonial['comment'] }}</p>
        <div class="testimonial-author d-flex align-items-center">
            <img src="{{ asset($testimonial['image']) }}"
                 alt="{{ $testimonial['name'] }}"
                 class="testimonial-avatar">
            <div class="ms-3">
                <h5 class="testimonial-name mb-1">{{ $testimonial['name'] }}</h5>
                <div class="testimonial-rating">
                    @for($i = 0; $i < 5; $i++)
                        @if($i < floor($testimonial['rating']))
                            <i class="bi bi-star-fill"></i>
                        @else
                            <i class="bi bi-star"></i>
                        @endif
                    @endfor
                    <span class="rating-value ms-2">{{ number_format($testimonial['rating'], 1) }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
