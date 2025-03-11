<x-layout>
    <h1 class="product-info-title">Product information</h1>
    <section id="product-info">
        <img src="{{ asset('images/' . $product->image_path) }}" alt="Image of ring model {{ $product->ModelRing->name }}" class="product-img">
        <dl class="product-description">
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

            <button type="button" class="edit-button" onclick="window.location='{{ route('products.edit', $product->article_number) }}'">Edit product</button>

            <form method="post" action="{{ route('products.destroy', $product) }}">
                @csrf
                @method('DELETE')

                <button>Delete product</button>
            </form>
        </dl>
    </section>
    @vite('resources/js/product-stock.js')
</x-layout>