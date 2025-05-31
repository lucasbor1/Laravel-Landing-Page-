@extends('layouts.app')

@section('content')
<!-- Center Section -->
<section class="center-section d-flex flex-column align-items-center position-relative">
    <div class="container d-flex align-items-center justify-content-center position-relative" style="max-width: 900px;">
        
        <img src="{{ asset('images/seta.png') }}" alt="Arrow" class="arrow-indicator position-absolute">

        <div class="text-and-search text-center mx-auto" style="max-width: 600px; position: relative; z-index: 2;">
           
            <h1 class="center-title fw-bold mb-3">
                Discover Furniture With<br>High Quality Wood ✨
            </h1>
      
            <p class="center-text mb-4">
                Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi,
                adipiscing mauris non. Purus parturient viverra nunc, tortor sit laoreet.
                Quam tincidunt aliquam adipiscing tempor.
            </p>
           
            <div class="search-box mb-0">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0">
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="text" class="form-control border-start-0" placeholder="Search property" aria-label="Search property">
                    <button class="btn btn-search" type="button">Search</button>
                </div>
            </div>
        </div>
    </div>

    <div class="main-image-container w-100 position-relative" style="margin-top: -30px; z-index: 1;">
        <img src="{{ asset('images/center.png') }}" alt="High Quality Furniture" class="center-image img-fluid rounded">
    </div>
</section>

<!-- Benefits Section -->
<section class="benefits py-5">
    <div class="container">
        <!-- Benefits label and header -->
        <div class="section-header mb-5">
            <span class="benefits-label">Benefits</span>
            <h2 class="section-title mt-2">Benefits when using<br>our services</h2>
            <p class="section-subtitle">Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non purus parturient.</p>
        </div>
        
        <!-- Benefits cards -->
        <div class="row g-4">
            <div class="col-md-4">
                <div class="benefit-item text-center">
                    <img src="{{ asset('images/Choices.png') }}" alt="Many Choices" class="benefit-icon mb-4">
                    <h3 class="benefit-title">Many Choices</h3>
                    <p class="benefit-text">Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non.</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="benefit-item text-center">
                    <img src="{{ asset('images/Time.png') }}" alt="Fast and On Time" class="benefit-icon mb-4">
                    <h3 class="benefit-title">Fast and On Time</h3>
                    <p class="benefit-text">Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non.</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="benefit-item text-center">
                    <img src="{{ asset('images/Price.png') }}" alt="Affordable Price" class="benefit-icon mb-4">
                    <h3 class="benefit-title">Affordable Price</h3>
                    <p class="benefit-text">Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products Section -->
<section class="products py-5">
    <div class="container">
        <div class="section-header mb-5">
            <h2>Our popular product</h2>
            <p>Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non purus parturient.</p>
        </div>
        
        <div class="row">
            @foreach($products as $product)
                @include('components.product-card', ['product' => $product])
            @endforeach
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">What our customer say</h2>
        
        <div class="row">
            @foreach($testimonials as $testimonial)
                @include('components.testimonial', ['testimonial' => $testimonial])
            @endforeach
        </div>
    </div>
</section>
@endsection
