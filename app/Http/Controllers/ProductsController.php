<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        return view('admin.products.index');
    }

    public function show($id){
        return view('admin.products.show');
    }

    public function edit($id){
        return view('admin.products.edit');
    }
    public function update(Request $request, $id){

    }

    public function delete($id){

    }

    public function create(){
        return view('admin.products.create');
    }
    public function store(Request $request){

    }


}
