<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColorsController extends Controller
{
    public function index(){
        return view('admin.colors.index');
    }

    public function edit($id){
        return view('admin.colors.edit');
    }

    public function create(){
        return view('admin.colors.create');
    }

    public function update(Request $request, $id){

    }

    public function delete($id){

    }

    public function store(Request $request){

    }
}
