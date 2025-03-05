<x-layout>
    <h1>Product information</h1>
    <img src="https://vanbruun.com/__media-service/img/product/1218/jacob-30x17-yg_hover.jpg" alt="Image of ring model xxxxxx">
    <h2>{{ $product->ModelRing->name }}</h2>

    <p class="product-title">Article number</p>
    <p>{{ $product->article_number }}</p>

    <p class="product-title">Ring type</p>
    <p>{{ $product->ringType->type }}</p>

    <p class="product-title">Price</p>
    <p>{{ $product->price }}:-</p>

    <p class="product-title">Size</p>
    <select name="size" id="product-size">
        <?php for ($i = 14; $i <= 23; $i++): ?>
            <option value="<?= $i; ?>"><?= $i; ?></option>
        <?php endfor; ?>
    </select>

    <p class="product-title">In stock</p>
    <p>{{ $product->stock }}</p>

    <a href="{{ route('products.edit', $product->id) }}">Edit product</a>

    <form method="post" action="{{ route('products.destroy', $product) }}">
        @csrf
        @method('DELETE')

        <button>Delete product</button>
    </form>

</x-layout>
