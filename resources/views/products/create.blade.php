<x-layout>
    <h1>New Product</h1>

    <form method="POST" action="{{ route('products.store') }}">
        @csrf

        <div>
            <label for="article_number">Article Number</label>
            <input type="number" name="article_number" id="article_number" required>
        </div>

        <div>
            <label for="type_id">Ring Type</label>
            <select name="type_id" id="type_id" required>
                <option value="">Select Ring Type</option>
                @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->type }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="material_id">Material</label>
            <select name="material_id" id="material_id" required>
                <option value="">Select Material</option>
                @foreach($materials as $material)
                    <option value="{{ $material->id }}">{{ $material->material }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="model_id">Model</label>
            <select name="model_id" id="model_id" required>
                <option value="">Select Model</option>
                @foreach($models as $model)
                    <option value="{{ $model->id }}">{{ $model->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="size">Size</label>
            <input type="number" name="size" id="size" required>
        </div>

        <div>
            <label for="price">Price</label>
            <input type="number" name="price" id="price" required>
        </div>

        {{-- <div>
            <label for="stock">Stock (Optional)</label>
            <input type="number" name="stock" id="stock">
        </div> --}}

        <button type="submit">Save!</button>
    </form>
</x-layout>