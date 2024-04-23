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

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string',
            'features' => 'nullable|string',
            'quantity' => 'required|integer|min:1',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'productimages/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Product::create($input);

       
        return redirect()->route('admin.product.index')
                        ->with('success','Product created successfully.');
    }

    public function edit($id)
    {   $category = Category::all();
        $product = Product::findOrFail($id);
        // dd($product);
        return view('admin.product.edit', compact('category','product'));
    }

    
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
