@extends('layouts.app')

@section('content')
<!-- Seção Central -->
<section class="center-section">
       <!-- Texto -->
       <div class="center-text">
        <h1 class="display-4 fw-bold mb-4">Discover Furniture With<br>High Quality Wood</h1>
        <p class="lead">
            Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi,<br>
            adipiscing mauris non. Purus parturient viverra nunc, tortor sit laoreet.<br>
            Quam tincidunt aliquam adipiscing tempor.
        </p>
    </div>
        <!-- Conteúdo sobreposto -->
        <div class="container">
            <div class="center-content">
                <!-- Barra de pesquisa -->
                <div class="search-box">
                    <div class="input-group">
                        <input type="text" class="form-control rounded-0" placeholder="Search property">
                        <button class="btn btn-dark rounded-0 px-4" type="button">
                            SEARCH
                        </button>
                    </div>
                </div>
             
            </div>
        </div>
    <!-- Imagem de fundo -->
    <img src="{{ asset('images/center.png') }}" alt="High Quality Furniture" class="center-image">
    

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
