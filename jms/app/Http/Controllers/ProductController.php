<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Categories;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Products::all();
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
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer',
            'category_type' => 'required|exists:categories,type', // Ensure the role exists in the roles table
            'image_url' => 'required',
        ]);
        $product = new Products;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock_quantity = $request->stock_quantity;
        $product->catetory_type = $request->category_type;
        $product->image_url = $request->image_url;
        $product->save();
        return redirect()->route('products.index')->with('sucess', 'Successfully add');
        // $validated = $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'price' => 'required|numeric',
        //     'stock_quantity' => 'required|integer',
        //     'category_type' => 'required|exists:categories,type', // Ensure the role exists in the roles table
        //     'image_url' => 'required',
        // ]);

        // // Products::create($validated->all());
        // // dd($validated->all());
        // Products::create([
        //     'name' => $validated['name'],
        //     'description' => $validated['description'],
        //     'price' => $validated['price'],
        //     'stock_quantity' => $validated['stock_quantity'],
        //     'catetory_type' => $validated['category_type'],
        //     'image_url' => $validated['image_url'],
        // ]);
        // // $validated->save();

        // return redirect()->route('products.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // public function catetories()
    // {
    //     $categories = Categories::all();
    //     return view('products.create', compact('categories', $categories));
    // }
}