<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Image;
use App\Models\ModelEntry;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('admin.products.index', ['products' => $products]);
    }

    public function show($id){
        $product = Product::find($id);

        return view('admin.products.show', ['product' => $product]);
    }

    public function edit($id){
        $product = Product::find($id);
        $categories = Category::all();
        $models = ModelEntry::all();
        $colors = Color::all();

        return view(
            'admin.products.edit'
            , [
                'product' => $product
                , 'categories' => $categories
                , 'models' => $models
                , 'colors' => $colors
            ]);
    }
    public function update(Request $request){

        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'model_id' => 'required',
            'color_id' => 'required',
            'image' => 'required|file',
        ]);

        $product = Product::find($request->get('id'));

        if ($product) {

            $filePath = public_path('uploads'). '/' . $product->image_url;

            if (File::exists($filePath)) {
                File::delete($filePath);
            }

            $file = $request->file('image');
            $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('uploads'), $fileName);

            $product->update([
                'name' => $request->get('name'),
                'description' => $request->get('description'),
                'category_id' => $request->get('category_id'),
                'model_id' => $request->get('model_id'),
                'color_id' => $request->get('color_id'),
                'image_url' => $fileName,
                'new' => $request['new'] ? true : false,
                'pop' => $request['pop'] ? true : false,
                'active' => $request['active'] ? true : false,
            ]);

            return redirect()->route('admin-product-show', ['id' => $request->get('id')])->with('success', 'Product updated successfully');
        }
        return redirect()->back()->with('error', 'Image not found');
    }

    public function delete($id){
        $product = Product::find($id);

        if($product){
            if (count($product->images) > 0) {
                foreach ($product->images as $image) {
                    $filePath = public_path('uploads'). '/' . $image->url;

                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }
            }

            $filePath = public_path('uploads'). '/' . $product->image_url;

            if (File::exists($filePath)) {
                File::delete($filePath);
            }

            $product->delete();
            return redirect()->route('admin-products')->with('success', 'Product deleted successfully');
        }
        return redirect()->back()->with('error', 'Image not found');
    }

    public function create(){

        $categories = Category::all();
        $models = ModelEntry::all();
        $colors = Color::all();

        return view(
            'admin.products.create'
            , [
                'categories' => $categories
                , 'models' => $models
                , 'colors' => $colors
            ]
        );
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'model_id' => 'required',
            'color_id' => 'required',
            'image' => 'required|file',
        ]);

        $file = $request->file('image');
        $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension();

        $file->move(public_path('uploads'), $fileName);

        Product::create([
            'category_id'=> $request['category_id'],
            'model_id' => $request['model_id'],
            'color_id' => $request['color_id'],
            'name' => $request['name'],
            'description' => $request['description'],
            'image_url' => $fileName,
            'new' => $request['new'] ? true : false,
            'pop' => $request['pop'] ? true : false,
            'active' => $request['active'] ? true : false,
        ]);

        return redirect()->route('admin-products')->with('success', 'Product added successfully');
    }
}
