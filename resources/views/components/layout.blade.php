<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/nav.css', 'resources/css/global.css', 'resources/css/dashboard.css', 'resources/css/product.css', 'resources/css/form.css'])
    <title>Drip Hub</title>
</head>
<body>
    <main class="content">
        <nav class="admin-nav">
            <header>
                <small>Drip Hub</small>
                <h1>Welcome</h1>
                <h3>{{ auth()->user()->name }}!</h3>
            </header>
            <ul class="options">
                <li class="nav-link"><a href="{{ route('home') }}">Home</a></li>
                <li class="nav-link"><a href="{{ route('products.index') }}">Show Products</a></li>
                <li class="nav-link"><a href="{{ route('products.create') }}">Add Product</a></li>
            </ul>
            <a href="{{ route('logout') }}" class="sign-out"><small>Sign Out</small></a>
        </nav>
        <section class="dashboard">
            {{ $slot }}
        </section>
    </main>
</body>
</html>