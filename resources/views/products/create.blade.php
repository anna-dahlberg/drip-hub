<x-layout>
    <h1>New Product</h1>

    <form method="POST" action="{{ route('products.store') }}">
        @csrf

        <div>
            <label for="article_number">Article Number</label>
            <input type="number" name="article_number" id="article_number" value="{{ old('article_number') }}" required>
            @error('article_number')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="type_id">Ring Type</label>
            <select name="type_id" id="type_id" required>
                <option value="">Select Ring Type</option>
                @foreach($types as $type)
                    <option value="{{ $type->id }}" {{ old('type_id') == $type->id ? 'selected' : '' }}>{{ $type->type }}</option>
                @endforeach
            </select>
            @error('type_id')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="material_id">Material</label>
            <select name="material_id" id="material_id" required>
                <option value="">Select Material</option>
                @foreach($materials as $material)
                    <option value="{{ $material->id }}" {{ old('material_id') == $material->id ? 'selected' : '' }}>{{ $material->material }}</option>
                @endforeach
            </select>
            @error('material_id')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="model_id">Model</label>
            <select name="model_id" id="model_id" required>
                <option value="">Select Model</option>
                @foreach($models as $model)
                    <option value="{{ $model->id }}" {{ old('model_id') == $model->id ? 'selected' : '' }}>{{ $model->name }}</option>
                @endforeach
            </select>
            @error('model_id')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="size">Size</label>
            <input type="number" name="size" id="size" value="{{ old('size') }}" required>
            @error('size')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="price">Price</label>
            <input type="number" name="price" id="price" value="{{ old('price') }}" required>
            @error('price')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="stock">Stock (Optional)</label>
            <input type="number" name="stock" id="stock" value="{{ old('stock') }}">
            @error('stock')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Save!</button>
    </form>
</x-layout>
