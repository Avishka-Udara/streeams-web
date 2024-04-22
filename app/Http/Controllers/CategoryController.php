<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {   
        $categories = Category::all();
        // dd($categories);
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $validCategory = $request->validate([
            'name' => 'required|string|max:255|unique:categories',
        ]);

        Category::create($validCategory);

        return redirect(route('admin.categories.index'))->with('success', 'Category added successfully');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    
    public function update(Request $request, $id)
    {   
        $validCategory = validator::make($request->all(),[
            'name' => 'required|string|max:255|unique:categories',
        ]);

        if ($validCategory->fails()) {
            return redirect()->back()->withErrors($validCategory)->withInput();
        }

        $category = Category::findOrFail($id);
        // dd($request->all());
        $category->update([
            'name' => $request->name,

        ]);
        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully');
    }

    public function delete(Request $request, $id)
    {
        $product = Category::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Product deleted successfully');
    }
}
