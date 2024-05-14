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

        return view('admin.categories.edit', ['category' => $category]);
    }
    public function update(Request $request){
        $request->validate([
            'id' => 'required',
            'name' => 'required',
        ]);

        $category = Category::find($request->id);
        $category->name = $request->input('name');
        $category->save();

        return redirect()->route('admin-categories')->with('success', 'Category updated successfully');
    }

    public function delete(Request $request){
        $request->validate([
            'id' => 'required',
        ]);

        $category = Category::findOrFail($request->id);
        $category->delete();

        return redirect()->route('admin-categories')->with('success', 'Category deleted successfully');
    }

    public function create(){
        return view('admin.categories.create');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
        ]);

        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('admin-categories')->with('success', 'Category created successfully');
    }
}
