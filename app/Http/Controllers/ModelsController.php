<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModelsController extends Controller
{
    public function index(){
        return view('admin.models.index');
    }

    public function edit($id){
        return view('admin.models.edit');
    }

    public function update(Request $request, $id){

    }

    public function delete($id){

    }

    public function create(){
        return view('admin.models.create');
    }

    public function store(Request $request){

    }
}
