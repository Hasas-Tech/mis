<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categories;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('products.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $catetories = Categories::all();
        return view('products.create', compact('catetories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'price' => 'required|numeric',
        //     'stock_quantity' => 'required|integer',
        //     'category_type' => 'required|exists:categories,type', // Ensure the role exists in the roles table
        //     'image_url' => 'required',
        // ]);
        // dd($request);
        $catetories = Categories::all();
        $c_type = $catetories->type;
        $c_type = $request->catetory_type;

        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock_quantity = $request->stock_quantity;
        $product->category_type = $c_type;
        $product->image_url = $request->image_url;
        $product->save();
        return redirect()->route('products.index')->with('sucess', 'Successfully add');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer',
            'category_type' => 'required|exists:categories,type', // Ensure the role exists in the roles table
            'image_url' => 'required',
        ]);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock_quantity = $request->stock_quantity;
        $product->catetory_type = $request->category_type;
        $product->image_url = $request->image_url;
        $product->save();
        return redirect()->route('products.index')->with('sucess', 'Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
