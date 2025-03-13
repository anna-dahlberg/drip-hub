<x-layout>
    <form action="{{ route('products.index') }}" method="GET" class="filter-form">
        <fieldset>
            <label for="material">Material:</label>
            <select name="material" id="material">
                <option value="">All Materials</option>
                @foreach($materials as $material)
                <option value="{{ $material->id }}" {{ request('material') == $material->id ? 'selected' : '' }}>
                    {{ $material->material }}
                </option>
                @endforeach
            </select>
        </fieldset>
        <fieldset>
            <label for="ring_type">Ring Type:</label>
            <select name="ring_type" id="ring_type">
                <option value="">All Types</option>
                @foreach($ringTypes as $type)
                <option value="{{ $type->id }}" {{ request('ring_type') == $type->id ? 'selected' : '' }}>
                    {{ $type->type }}
                </option>
                @endforeach
            </select>
        </fieldset>
        <button type="submit" class="filter-button">Apply Filter</button>
        <button type="button" class="reset-button" onclick="window.location='{{ route('products.index') }}'">Reset Filter</button>
    </form>
    <section class="products">
        @foreach ($products->groupBy('article_number') as $articleNumber => $articleProducts)
        @php
        $product = $articleProducts->first();
        @endphp
        <a href="{{ route('products.show', $articleNumber) }}" class="product-card">
            <h4>{{ $product->modelRing->name }}</h4>
            <img src="{{ asset('images/' . $product->image_path) }}" alt="Image of ring model {{ $product->ModelRing->name }}">
            <p>{{ $articleNumber }}</p>
        </a>
        @endforeach
    </section>
    {{ $products->links() }}
</x-layout>