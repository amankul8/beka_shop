<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){

        return view('app.index');
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
