<x-layout>
    <h1>Product information</h1>
    <img src="{{ asset('images/' . $product->image_path) }}" alt="Image of ring model {{ $product->ModelRing->name }}">
    <h2>{{ $product->ModelRing->name }}</h2>

    <p class="product-title">Article number</p>
    <p id="article-number" data-article="{{ $product->article_number }}">{{ $product->article_number }}</p>

    <p class="product-title">Ring type</p>
    <p>{{ $product->ringType->type }}</p>

    <p class="product-title">Material</p>
    <p>{{ $product->Material->material_id }}</p>

    <p class="product-title">Price</p>
    <p>{{ $product->price }}:-</p>

    <p class="product-title">Size</p>
    <select name="size" id="product-size">
        <option value="null">Pick a size</option>
        <?php for ($i = 14; $i <= 23; $i++): ?>
            <option value="<?= $i; ?>"><?= $i; ?></option>
        <?php endfor; ?>
    </select>
    <p class="product-title">In stock</p>
    <p id="stock-display">Pick a size</p>

    <a href="{{ route('products.edit', $product->article_number) }}">Edit product</a>

    <form method="post" action="{{ route('products.destroy', $product) }}">
        @csrf
        @method('DELETE')

        <button>Delete product</button>
    </form>
    @vite('resources/js/product-stock.js')
</x-layout>