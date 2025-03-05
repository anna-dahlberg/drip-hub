<x-layout>
    <h1>Products:</h1>

    @foreach ($products as $product)

        <h4>{{ $product->modelRing->name }}</h4>
        {{-- Image here --}}
        <p>{{ $product->article_number }}</p>
        
    @endforeach

    <a href="{{ route('products.create') }}">Create new Product</a>

</x-layout>