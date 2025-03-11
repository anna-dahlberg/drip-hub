<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\RingType;
use App\Models\Material;
use App\Models\ModelRing;
use App\Http\Requests\SaveProductRequest;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        if ($request->filled('material')) {
            $query->where('material_id', $request->material);
        }

        if ($request->filled('ring_type')) {
            $query->where('type_id', $request->ring_type);
        }

        $products = $query->simplePaginate(12)->withQueryString();

        $materials = Material::all();
        $ringTypes = RingType::all();

        return view('products.index', compact('products', 'materials', 'ringTypes'));
    }


    public function create()
    {
        $types = RingType::all();
        $materials = Material::all();
        $models = ModelRing::all();

        return view('products.create', compact('types', 'materials', 'models'));
    }

    public function store(SaveProductRequest $request)
    {
        $product = Product::create($request->validated());

        return redirect()->route('products.show', $product);
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $types = RingType::all();
        $materials = Material::all();
        $models = ModelRing::all();

        return view('products.edit', compact('product', 'types', 'materials', 'models'));
    }

    public function update(SaveProductRequest $request, Product $product)
    {
        $product->update($request->validated());

        return redirect()->route('products.show', $product);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }

    public function getStock($article_number, $size)
    {
        $product = Product::where('article_number', $article_number)
            ->where('size', $size)
            ->first();

        return response()->json([
            'stock' => $product ? $product->stock : 0
        ]);
    }
}
