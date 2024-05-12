<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        return view('admin.categories.index');
    }

    public function edit($id){
        return view('admin.categories.edit');
    }
    public function update(Request $request, $id){

    }

    public function delete($id){

    }

    public function create(){
        return view('admin.categories.create');
    }
    public function store(Request $request){

    }
}
