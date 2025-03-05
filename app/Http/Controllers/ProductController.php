<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\RingType;
use App\Models\Material;
use App\Models\ModelRing;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['type', 'material', 'model'])->get();
        return view('products.index', compact('products'));
    }


    public function create()
    {
        $types = RingType::all();
        $materials = Material::all();
        $models = ModelRing::all();

        return view('products.create', compact('types', 'materials', 'models'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'article_number' => 'required|integer|unique:product,article_number',
            'type_id' => 'required|exists:ring_type,id',
            'material_id' => 'required|exists:material,id',
            'model_id' => 'required|exists:models,id',
            'size' => 'required|integer',
            'price' => 'required|integer',
            'stock' => 'nullable|integer'
        ]);

        Product::create($validated);

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
