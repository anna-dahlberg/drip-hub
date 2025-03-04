<x-layout>
    <h1>Products:</h1>

    @foreach ($products as $product)

        <h2>{{ $product->name }}</h2>
        <p>{{ $product->price }} SEK</p>
        <p>{{ $product->size }}</p>
        
    @endforeach

    <a href="{{ route('products.create') }}">Create new Product</a>

</x-layout>