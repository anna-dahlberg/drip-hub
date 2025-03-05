<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"> --}}
    @vite(['resources/css/nav.css', 'resources/css/global.css'])
    <title>Drip Hub</title>
</head>
<body>
    <main class="content">
        <nav class="admin-nav">
            <small>Drip Hub</small>
            <h1>Welcome!</h1>
            <section class="options">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
                <a href="{{ route('products.create') }}" class="nav-link">Add Product</a>
            </section>
        </nav>
        <section>
            {{ $slot }}
        </section>
    </main>
</body>
</html>