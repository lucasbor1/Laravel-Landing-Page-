@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Discover Furniture With High Quality Wood</h1>
                    <p class="lead mb-4">Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non.</p>
                    
                    <div class="search-box mb-5">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search property">
                            <button class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/hero-image.jpg') }}" alt="Furniture" class="img-fluid rounded">
                </div>
            </div>
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
                
                <!-- Repeat for other benefits -->
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
