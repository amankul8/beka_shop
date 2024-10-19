<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Collection;
use App\Models\Currency;
use App\Models\ProductSize;
use App\Models\Image;
use App\Models\ModelEntry;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $collections = Collection::all();
        $currencies = Currency::all();
        $sizes = ProductSize::all();

        return view(
            'admin.products.edit'
            , [
                'product' => $product
                , 'categories' => $categories
                , 'models' => $models
                , 'colors' => $colors
                , 'collections' => $collections
                , 'currencies' => $currencies
                , 'sizes' => $sizes
            ]);
    }
    public function update(Request $request)
    {
        // Валидация входных данных
        $request->validate([
            'id' => 'required|exists:products,id',
            'name' => 'required',
            'category_id' => 'required',
            'model_id' => 'required',
            'color_id' => 'required',
            'collection_id' => 'required',
            'size_id' => 'required',
            'composition' => 'required',
            'min_quantity' => 'required',
            'price' => 'required',
            'currency_id' => 'required',
            'description' => 'required',
            'image' => 'sometimes|file',
        ]);

        // Найти продукт
        $product = Product::find($request->id);

        if ($product) {
            // Используем транзакцию, чтобы гарантировать целостность операции
            DB::transaction(function () use ($request, $product) {
                // Если новое изображение загружено
                if ($request->hasFile('image')) {
                    // Удалить старое изображение
                    $filePath = public_path('uploads') . '/' . $product->image_url;
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }

                    // Сохранить новое изображение
                    $file = $request->file('image');
                    $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('uploads'), $fileName);

                    // Обновить поле image_url
                    $product->image_url = $fileName;
                }

                // Обновить остальные поля продукта
                $product->update([
                    'name' => $request->name,
                    'category_id' => $request->category_id,
                    'model_id' => $request->model_id,
                    'color_id' => $request->color_id,
                    'size_id' => $request->size_id,
                    'collection_id' => $request->collection_id,
                    'composition' => $request->composition,
                    'min_quantity' => $request->min_quantity,
                    'price' => $request->price,
                    'currency_id' => $request->currency_id,
                    'description' => $request->description,
                    'new' => $request->has('new') ? true : false,  // Если параметр new есть, то true, иначе false
                    'pop' => $request->has('pop') ? true : false,  // То же самое для pop
                    'active' => $request->has('active') ? true : false  // И для active
                ]);
            });

            // Перенаправление после успешного обновления
            return redirect()->route('admin-product-show', ['id' => $request->id])->with('success', 'Product updated successfully');
        }

        // Если продукт не найден, вернуть ошибку
        return redirect()->back()->with('error', 'Product not found');
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
        $collections = Collection::all();
        $currencies = Currency::all();
        $sizes = ProductSize::all();

        return view(
            'admin.products.create'
            , [
                'categories' => $categories
                , 'models' => $models
                , 'colors' => $colors
                , 'collections' => $collections
                , 'currencies' => $currencies
                , 'sizes' => $sizes
            ]
        );
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'model_id' => 'required',
            'color_id' => 'required',
            'size_id' => 'required',
            'collection_id' => 'required',
            'composition' => 'required',
            'min_quantity' => 'required',
            'price' => 'required',
            'currency_id' => 'required',
            'description' => 'required',
            'image' => 'required|file',
        ]);

        $file = $request->file('image');
        $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension();

        $file->move(public_path('uploads'), $fileName);

        Product::create([
            'name' => $request['name'],
            'category_id'=> $request['category_id'],
            'model_id' => $request['model_id'],
            'color_id' => $request['color_id'],
            'size_id' => $request['size_id'],
            'collection_id' => $request['collection_id'],
            'composition' => $request['composition'],
            'min_quantity' => $request['min_quantity'],
            'price' => $request['price'],
            'currency_id' => $request['currency_id'],
            'description' => $request['description'],
            'image_url' => $fileName,
            'new' => $request['new'] ? true : false,
            'pop' => $request['pop'] ? true : false,
            'active' => $request['active'] ? true : false,
        ]);

        return redirect()->route('admin-products')->with('success', 'Product added successfully');
    }
}
