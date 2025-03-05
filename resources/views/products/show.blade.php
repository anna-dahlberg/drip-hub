<x-layout>

    <h1>{{ $product->name }}</h1>

    <p>{{ $product->article_number }}</p>

    <p>{{ $product->size }}</p>

    <p>{{ $product->ringType }}</p>

    <p>{{ $product->price }}</p>

    <a href="{{ route('products.edit', $product->id) }}">Edit product</a>
    
</x-layout>
