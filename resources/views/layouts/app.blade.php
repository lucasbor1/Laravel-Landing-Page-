<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <title>Lalasia - Discover Furniture</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<button id="backToTop" class="back-to-top" aria-label="Voltar ao topo">
    <i class="bi bi-arrow-up"></i>
</button>

<body>
    @include('components.navbar')
    
    <main>
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>
