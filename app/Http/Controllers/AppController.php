<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        $categories = Category::all();
        $pop_products = Product::where('pop', true)->where('active', true)->get();
        $new_products = Product::where('new', true)->where('active', true)->get();

        return view(
            'app.index'
            , [
                'categories' => $categories
                , 'pop_products' => $pop_products
                , 'new_products' => $new_products
            ]
        );
    }

    public  function aboutUs(){
        return view('app.aboutUs');
    }

    public function contacts(){
        return view('app.contacts');
    }

    public function products(){
        $products = Product::where('active', true)->get();
        $categories = Category::where('parent_id', null)->get();

        return view('app.products', compact('products' , 'categories'))->with('category_id', 0);
    }

    public function productsFilter($category_id){
        $categories = Category::where('parent_id', null)->get();
        $categoryIds = Category::where('parent_id', $category_id)->pluck('id');
        $products = Product::where('active', true)
            ->whereIn('category_id', $categoryIds)
            ->get();

        return view('app.products', compact('products', 'categories', 'category_id'));
    }

    public function productDetail($id){
        $product = Product::find($id);

        return view('app.productDetail', [
            'product' => $product
        ]);
    }
}
