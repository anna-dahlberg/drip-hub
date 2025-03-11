<x-layout>
    <h1 class="product-info-title">Product information</h1>
    <section id="product-display">
        <img src="{{ asset('images/' . $product->image_path) }}" alt="Image of ring model {{ $product->ModelRing->name }}" class="product-img">
        <dl class="product-description">
            <h2>{{ $product->ModelRing->name }}</h2>

            <dt class="product-title">Article number</dt>
            <dd class="product-info" id="article-number" data-article="{{ $product->article_number }}">{{ $product->article_number }}</dd>

            <dt class="product-title">Ring type</dt>
            <dd class="product-info">{{ $product->ringType->type }}</dd>

            <dt class="product-title">Material</dt>
            <dd class="product-info">{{ $product->Material->material }}</dd>

            <dt class="product-title">Price</dt>
            <dd class="product-info">{{ $product->price }}:-</dd>

            <dt class="product-title">Size</dt>
            <select name="size" id="product-size">
                <option value="null">Pick a size</option>
                <?php for ($i = 14; $i <= 23; $i++): ?>
                    <option value="<?= $i; ?>"><?= $i; ?></option>
                <?php endfor; ?>
            </select>
            <dt class="product-title">In stock</dt>
            <dd class="product-info" id="stock-display">Pick a size</dd>

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