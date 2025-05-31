<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lalasia - High Quality Furniture</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('components.navbar')
    
    <main class="py-4">
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>
