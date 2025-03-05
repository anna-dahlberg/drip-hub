<x-layout>
    <section class="products"> 
    @foreach ($products as $product)
        <a href="{{ route('products.show', $product->id) }}" class="product-card">
            <h4>{{ $product->modelRing->name }}</h4>
                <img class="product-img">
            <p>{{ $product->article_number }}</p>
        </a>
    @endforeach
    </section>
</x-layout>