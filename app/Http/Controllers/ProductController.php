<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('admin.products.index', [
            'products' => $products
        ]);
    }

    public function create()
    {
        $categories = \App\Models\Category::all();
        return view('admin.products.create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'imageUrl' => 'nullable|url',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        Product::create($validated);

        return redirect('/admin/products')->with('success', 'Product created successfully!');
    }

    public function addCategory(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        \App\Models\Category::create($validated);

        return redirect('/admin/products/create')->with('success', 'Category added successfully!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/admin/products')->with('success', 'Product deleted successfully!');
    }
}
