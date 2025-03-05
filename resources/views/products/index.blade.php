<x-layout>
    <h1>Products:</h1>

    @foreach ($products as $product)

        <a href="{{ route('products.show', $product->id) }}"><h4>{{ $product->modelRing->name }}</h4></a>
        {{-- Image here --}}
        <p>{{ $product->article_number }}</p>
        
    @endforeach

</x-layout>