<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"> --}}
    @vite(['resources/css/nav.css', 'resources/css/global.css', 'resources/css/dashboard.css', 'resources/css/product.css', 'resources/css/form.css'])
    <title>Drip Hub</title>
</head>
<body>
    <main class="content">
        <nav class="admin-nav">
            <small>Drip Hub</small>
            <h1>Welcome!</h1>
            <section class="options">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
                <a href="{{ route('products.index') }}" class="nav-link">Show Products</a>
                <a href="{{ route('products.create') }}" class="nav-link">Add Product</a>
            </section>
        </nav>
        <section class="dashboard">
            {{ $slot }}
        </section>
    </main>
</body>
</html>