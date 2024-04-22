<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {   
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {   
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }
    //***This is basic data store method************************************************************************************************* */
    // public function store(Request $request)
    // {
    //     $category = Category::findOrFail($request->category_id);
    //     $category->product()->create([
    //         'name' => $request->name,
    //         'price' => $request->price,
    //         'image' => $request->image,
    //         'description' => $request->description,
    //         'features' => $request->features,
    //         'quantity' => $request->quantity,
    //         // 'category_id' => $request->category_id
    //     ]);

    //     return redirect()->route('admin.product.index')->with('success', 'Product created successfully');
       
    // }
    //***************************************************************************************** */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string',
            'features' => 'nullable|string',
            'quantity' => 'required|integer|min:1',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $category = Category::findOrFail($request->category_id);

        $category->product()->create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $request->file('image')->store('product_images'), 
            'description' => $request->description,
            'features' => $request->features,
            'quantity' => $request->quantity,
        ]);

        return redirect()->route('admin.product.index')->with('success', 'Product created successfully');
    }

    public function edit($id)
    {   $category = Category::all();
        $product = Product::findOrFail($id);
        // dd($product);
        return view('admin.product.edit', compact('category','product'));
    }

    /////*******This is basic data update method**********************************************************************************
    // public function update(Request $request, $id)
    // {
    //     $product = Product::findOrFail($id);
    //     $product->update($request->all());
    //     return redirect()->route('admin.product.index')->with('success', 'Product updated successfully');
    // }
    ///////*****************************************************************************************
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string',
            'features' => 'nullable|string',
            'quantity' => 'required|integer|min:1',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $product = Product::findOrFail($id);

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $request->hasFile('image') ? $request->file('image')->store('product_images') : $product->image,
            'description' => $request->description,
            'features' => $request->features,
            'quantity' => $request->quantity,
        ]);

        return redirect()->route('admin.product.index')->with('success', 'Product updated successfully');
    }

    public function delete(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.product.index')->with('success', 'Product deleted successfully');
    }
}
