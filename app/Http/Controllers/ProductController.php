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
    public function index()
    {
        $products = Product::with(['ringType', 'material', 'modelRing'])->get();
        return view('products.index', compact('products'));
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
        Product::create($request->validated());

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
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

    public function destroy(string $id)
    {
        //
    }
}
