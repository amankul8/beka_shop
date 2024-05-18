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

        return view('app.products');
    }

    public function productDetail($id){
        return view('app.productDetail');
    }
}
