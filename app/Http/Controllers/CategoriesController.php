<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){

        $categories = Category::all();

        return view('admin.categories.index', ['categories' => $categories]);
    }

    public function edit($id){
        $category = Category::find($id);
        $categories = Category::all();

        return view(
            'admin.categories.edit',
            [
                'category' => $category,
                'categories' => $categories
            ]
        );
    }
    public function update(Request $request){
        $request->validate([
            'id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:categories,id',
        ]);

        $category = Category::find($request->id);

        $category->update($request->only(['name', 'parent_id']));

        return redirect()->route('admin-categories')->with('success', 'Category updated successfully');
    }

    public function delete(Request $request){
        $request->validate([
            'id' => 'required',
        ]);

        $category = Category::findOrFail($request->id);

        $category->sub_categories()->delete();

        $category->delete();

        return redirect()->route('admin-categories')->with('success', 'Category deleted successfully');
    }

    public function create(){
        $categories = Category::all();

        return view(
            'admin.categories.create',
            ['categories' => $categories]
        );
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:categories,id',
        ]);

        Category::create($request->only(['name', 'parent_id']));

        return redirect()->route('admin-categories')->with('success', 'Category created successfully');
    }
}
