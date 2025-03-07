<x-layout>
    <section class="filter-section">
        <form action="{{ route('products.index') }}" method="GET" class="filter-form">
            <div class="filter-group">
                <label for="material">Material:</label>
                <select name="material" id="material">
                    <option value="">All Materials</option>
                    @foreach($materials as $material)
                    <option value="{{ $material->id }}" {{ request('material') == $material->id ? 'selected' : '' }}>
                        {{ $material->material }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="filter-group">
                <label for="ring_type">Ring Type:</label>
                <select name="ring_type" id="ring_type">
                    <option value="">All Types</option>
                    @foreach($ringTypes as $type)
                    <option value="{{ $type->id }}" {{ request('ring_type') == $type->id ? 'selected' : '' }}>
                        {{ $type->type }}
                    </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="filter-button">Apply Filters</button>
            <button type="button" class="reset-button" onclick="window.location='{{ route('products.index') }}'">Reset Filters</button>
        </form>
    </section>
    <section class="products">
        @foreach ($products as $product)
        <a href="{{ route('products.show',  $product->article_number) }}" class="product-card">
            <h4>{{ $product->modelRing->name }}</h4>
            <img class="product-img">
            <p>{{ $product->article_number }}</p>
        </a>
        @endforeach
    </section>
</x-layout>