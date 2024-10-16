<?php

namespace App\Http\Controllers;

use App\Models\ProductSize;
use Illuminate\Http\Request;

class ProductSizeController extends Controller
{
    public function index(){
        $productSizes = ProductSize::all();

        return view('admin.productSizes.index', ['productSizes' => $productSizes]);
    }

    public function edit($id){
        $productSize = ProductSize::find($id);

        return view('admin.productSizes.edit', ['productSize' => $productSize]);
    }

    public function create(){
        return view('admin.productSizes.create');
    }

    public function update(Request $request){
        request()->validate([
            'id'=> 'required',
            'sizes' => 'required',
        ]);

        $productSize = ProductSize::find($request->id);
        $productSize->sizes = $request->input('sizes');
        $productSize->save();

        return redirect()->route('admin-product-sizes')->with('success', 'Product size updated successfully');
    }

    public function delete(Request $request){
        $request->validate([
            'id'=> 'required'
        ]);

        $productSize = ProductSize::find($request->id);
        $productSize->delete();

        return redirect()->route('admin-product-sizes')->with('success', 'Product size deleted successfully');
    }

    public function store(Request $request){
        $request->validate([
            'sizes' => 'required',
        ]);

        ProductSize::create([
            'sizes' => $request->sizes,
        ]);

        return redirect()->route('admin-product-sizes')->with('success', 'Product size created successfully');
    }
}
