<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorsController extends Controller
{
    public function index(){
        $colors = Color::all();

        return view('admin.colors.index', ['colors' => $colors]);
    }

    public function edit($id){
        $color = Color::find($id);

        return view('admin.colors.edit', ['color' => $color]);
    }

    public function create(){
        return view('admin.colors.create');
    }

    public function update(Request $request){
        request()->validate([
            'id'=> 'required',
            'name' => 'required',
            'color' => 'required'
        ]);

        $color = Color::find($request->id);
        $color->name = $request->input('name');
        $color->color = $request->input('color');
        $color->save();

        return redirect()->route('admin-colors')->with('success', 'Color updated successfully');
    }

    public function delete(Request $request){
        $request->validate([
            'id'=> 'required'
        ]);

        $color = Color::find($request->id);
        $color->delete();

        return redirect()->route('admin-colors')->with('success', 'Color deleted successfully');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'color' => 'required'
        ]);

        Color::create([
            'name' => $request->name,
            'color' => $request->color,
        ]);

        return redirect()->route('admin-colors')->with('success', 'Color created successfully');
    }
}
