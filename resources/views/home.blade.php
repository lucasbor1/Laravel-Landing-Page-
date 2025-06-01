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
           
            <div class="search-box mb-0 position-relative">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0">
                        <i class="bi bi-search"></i>
                    </span>
                    <input
                        type="text"
                        id="searchInput"
                        class="form-control border-start-0"
                        placeholder="Search for furniture, decoration..."
                        aria-label="Search products"
                        autocomplete="off"
                    >
                    <button class="btn btn-search" type="button">Buscar</button>
                </div>
                <!-- Container para resultados da busca -->
                <div id="searchResults" class="position-absolute w-100 bg-white shadow-lg rounded-3 mt-1 d-none" style="z-index: 1000; max-height: 400px; overflow-y: auto;">
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
    <div class="container benefits-container">
        <!-- Benefits label and header -->
        <div class="section-header mb-5">
            <div class="benefits-label mb-2">Benefits</div>
            <div class="header-content d-flex justify-content-between">
                <h2 class="section-title mb-0">Benefits when using our services</h2>
                <p class="section-subtitle mb-0">Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non purus parturient.</p>
            </div>
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
    <div class="container products-container">
        <!-- Products header -->
        <div class="section-header text-center mb-5">
            <span class="product-label">Product</span>
            <h2 class="section-title mt-2">Our popular product</h2>
            <p class="section-subtitle">Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non purus parturient.</p>
        </div>

        <!-- Carousel wrapper -->
        <div class="position-relative product-carousel">
            <button class="carousel-btn left" id="carouselPrev">
                <i class="bi bi-chevron-left"></i>
            </button>
        
            <div class="product-carousel-wrapper">
                <div class="product-carousel-track" id="carouselTrack">
                    @foreach($products as $product)
                        <div class="product-carousel-item">
                            @include('components.product-card', ['product' => $product])
                        </div>
                    @endforeach
                </div>
            </div>
        
            <button class="carousel-btn right" id="carouselNext">
                <i class="bi bi-chevron-right"></i>
            </button>
        </div>
    </div>
</section>

<!-- Our Product Section -->
<section class="our-product py-5">
    <div class="container products-container">
        <div class="row">
            <div class="col-lg-6">
                <span class="product-label">Our Product</span>
                <h2 class="container-title mt-1" style="font-size: 3rem">
                    Crafted by talented and high quality material
                </h2>
                <p class="section-description mb-4">
                    Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non purus parturient. morbi fermentum, vivamus et accumsan dui tincidunt pulvinar
                </p>
                <button class="btn btn-learn-more mb-4">Learn More</button>
                
                <div class="wood-image-container">
                    <img src="{{ asset('images/madeira.png') }}" alt="madeira" class="wood-image">
                </div>
            </div>
            <div class="col-lg-6">
                                <div class="stats-row mb-4">
                    <div class="stat-item">
                        <h3 class="stat-number">20+</h3>
                        <p class="stat-label">Years Experience</p>
                    </div>
                    <div class="stat-item">
                        <h3 class="stat-number">483</h3>
                        <p class="stat-label">Happy Client</p>
                    </div>
                    <div class="stat-item">
                        <h3 class="stat-number">150+</h3>
                        <p class="stat-label">Project Finished</p>
                    </div>
                </div>
                <div class="living-room-container">
                    <img src="{{ asset('images/living-room.jpg') }}" alt="Móvel" class="living-room-image">
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Testimonials Section -->
    <section class="testimonials py-5">
        <div class="container testimonials-container">
            <!-- Testimonials header -->
            <div class="section-header text-center mb-5">
                <span class="testimonial-label">Testimonials</span>
                <h2 class="section-title mt-2">What our customer say</h2>
                <p class="section-subtitle">Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non purus parturient.</p>
            </div>

            <!-- Carousel wrapper -->
            <div class="position-relative testimonial-carousel">
                <button class="carousel-btn left" id="testimonialPrev">
                    <i class="bi bi-chevron-left"></i>
                </button>
            
                <div class="testimonial-carousel-wrapper">
                    <div class="testimonial-carousel-track" id="testimonialTrack">
                        @foreach($testimonials as $testimonial)
                            @include('components.testimonial', ['testimonial' => $testimonial])
                        @endforeach
                    </div>
                </div>
            
                <button class="carousel-btn right" id="testimonialNext">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>

 <!-- Articles Section -->
<section class="articles py-5">
    <div class="container articles-container">
        <div class="articles-header">
            <span class="articles-label">Articles</span>
            <h2 class="section-title">The best furniture comes from Lalasia</h2>
            <p class="product-description">Pellentesque etiam blandit in tincidunt at donec.</p>
        </div>

        <div class="articles-grid">
            <!-- Left Side - Featured Article Carousel -->
            <div class="featured-articles-carousel">
                <div class="featured-articles-track" id="featuredArticlesTrack">
                    @foreach($articles as $article)
                        @if($article['featured'] ?? false)
                            <div class="featured-article">
                                <div class="article-image-container">
                                    <img src="{{ asset($article['image']) }}" alt="{{ $article['title'] }}" class="article-image">
                                    <div class="article-overlay">
                                        <div class="article-category">{{ $article['category'] }}</div>
                                        <h3 class="article-title">{{ $article['title'] }}</h3>
                                        <p class="article-description">{{ $article['description'] }}</p>
                                        <a href="#" class="read-more">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <!-- Navigation Arrows -->
                <div class="articles-navigation">
                    <button class="nav-arrow prev" id="featuredPrev">
                        <i class="bi bi-arrow-left"></i>
                    </button>
                    <button class="nav-arrow next" id="featuredNext">
                        <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- Right Side - Small Articles -->
            <div class="small-articles">
                @foreach($articles as $article)
                    @unless($article['featured'] ?? false)
                        <article class="small-article">
                            <div class="article-image-container">
                                <img src="{{ asset($article['image']) }}" alt="{{ $article['title'] }}">
                            </div>
                            <div class="article-content">
                                <span class="article-category">{{ $article['category'] }}</span>
                                <h3 class="article-title">{{ $article['title'] }}</h3>
                                <p class="article-description">{{ $article['description'] }}</p>
                                <div class="article-author">
                                    <img src="{{ asset($article['author']['avatar']) }}" alt="{{ $article['author']['name'] }}">
                                    <div class="author-info">
                                        <span class="author-name">By {{ $article['author']['name'] }}</span>
                                        <span class="article-date">{{ $article['author']['date'] }}</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endunless
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
