<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Collection;
use App\Models\Currency;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductsController extends Controller
{

   private $productSizes = array(
            '38 (XXS)',
            '40 (XS)',
            '42 (S)',
            '44 (M)',
            '46 (M)',
            '48 (L)',
            '50 (L)',
            '52 (XL)',
            '54 (XXL)',
            '56 (XXL)',
            '58 (XXXL)',
            '60 (4XL)',
            '62 (4XL)',
            '64 (4XL)',
        );
    public function index(){
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('admin.products.index', ['products' => $products]);
    }

    public function show($id){
        $product = Product::find($id);

        return view('admin.products.show', ['product' => $product]);
    }

    public function edit($id){
        $product = Product::find($id);
        $categories = Category::where('parent_id', null)->get();
        $colors = Color::all();
        $collections = Collection::all();
        $currencies = Currency::all();

        return view(
            'admin.products.edit'
            , [
                'product' => $product
                , 'categories' => $categories
                , 'colors' => $colors
                , 'collections' => $collections
                , 'currencies' => $currencies
            ]);
    }
    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:products,id',
            'name' => 'required',
            'category_id' => 'required',
            'colors' => 'required|array',
            'collections' => 'required|array',
            'sizes' => 'required',
            'composition' => 'required',
            'min_quantity' => 'required',
            'price' => 'required',
            'currency_id' => 'required',
            'description' => 'required',
            'image' => 'sometimes|file',
        ]);

        $product = Product::find($request->id);

        if ($product) {
            // Используем транзакцию, чтобы гарантировать целостность операции
            DB::transaction(function () use ($request, $product) {
                // Если новое изображение загружено
                if ($request->hasFile('image')) {
                    // Удалить старое изображение
                    $oldImagePath = public_path('uploads/' . $product->image_url);
                    if (File::exists($oldImagePath)) {
                        File::delete($oldImagePath);
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
                    'sizes' => $request->sizes,
                    'composition' => $request->composition,
                    'min_quantity' => $request->min_quantity,
                    'price' => $request->price,
                    'currency_id' => $request->currency_id,
                    'description' => $request->description,
                    'new' => $request->input('new', false),
                    'pop' => $request->input('pop', false),
                    'active' => $request->input('active', false),
                ]);
            });

            $product->colors()->sync($request->colors);
            $product->collections()->sync($request->collections);

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

        $categories = Category::where('parent_id', null)->get();
        $colors = Color::all();
        $collections = Collection::all();
        $currencies = Currency::all();

        return view(
            'admin.products.create'
            , [
                'categories' => $categories
                , 'colors' => $colors
                , 'collections' => $collections
                , 'currencies' => $currencies
                , 'productSizes' => $this->productSizes
            ]
        );
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'colors' => 'required',
            'from_size' => 'required',
            'before_size' => 'required',
            'collections' => 'required',
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

        $sizes = $request['from_size'].' - '. $request['before_size'];

        $product = Product::create([
            'name' => $request['name'],
            'category_id'=> $request['category_id'],
            'sizes' => $sizes,
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

        $product->colors()->attach($request['colors']);
        $product->collections()->attach($request['collections']);

        return redirect()->route('admin-products')->with('success', 'Product added successfully');
    }
}
