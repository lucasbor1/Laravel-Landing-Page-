@extends('layouts.app')

@section('content')
<section class="center-section d-flex flex-column align-items-center position-relative">
    <div class="container d-flex align-items-center justify-content-center position-relative" style="max-width: 900px;">
        <!-- Arrow on the left side -->
        <img src="{{ asset('images/seta.png') }}" alt="Arrow" class="arrow-indicator position-absolute">

        <div class="text-and-search text-center mx-auto" style="max-width: 600px; position: relative; z-index: 2;">
            <!-- Large heading -->
            <h1 class="center-title fw-bold mb-3">
                Discover Furniture With<br>High Quality Wood ✨
            </h1>
            <!-- Subheading -->
            <p class="center-text mb-4">
                Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi,<br>
                adipiscing mauris non. Purus parturient viverra nunc, tortor sit laoreet.<br>
                Quam tincidunt aliquam adipiscing tempor.
            </p>

            <!-- Search box -->
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

    <!-- Main image below, search box layered above top -->
    <div class="main-image-container w-100 position-relative" style="margin-top: -30px; z-index: 1;">
        <img src="{{ asset('images/center.png') }}" alt="High Quality Furniture" class="center-image img-fluid rounded">
    </div>
</section>

<!-- Benefits Section -->
<section class="benefits py-5 bg-light">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Benefits when using our services</h2>
            <p>Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non purus parturient.</p>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon-box mb-3">
                            <i class="bi bi-collection fs-1 text-primary"></i>
                        </div>
                        <h3>Many Choices</h3>
                        <p>Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon-box mb-3">
                            <i class="bi bi-lightning-charge fs-1 text-primary"></i>
                        </div>
                        <h3>Fast and On Time</h3>
                        <p>Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon-box mb-3">
                            <i class="bi bi-currency-dollar fs-1 text-primary"></i>
                        </div>
                        <h3>Affordable Price</h3>
                        <p>Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non.</p>
                    </div>
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
