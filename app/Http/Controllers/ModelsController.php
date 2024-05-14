<?php

namespace App\Http\Controllers;

use App\Models\ModelEntry;
use Illuminate\Http\Request;

class ModelsController extends Controller
{
    public function index(){
        $models = ModelEntry::all();
        return view('admin.models.index', ['models' => $models]);
    }

    public function edit($id){
        $model = ModelEntry::find($id);

        return view('admin.models.edit', ['model' => $model]);
    }

    public function update(Request $request){
        $request->validate([
            'id' => 'required',
            'name' => 'required',
        ]);

        $model = ModelEntry::find($request->id);
        $model->name = $request->input('name');
        $model->save();

        return redirect()->route('admin-models')->with('success', 'Model updated successfully');
    }

    public function delete(Request $request){
        $request->validate([
            'id' => 'required',
        ]);

        $model = ModelEntry::findOrFail($request->id);
        $model->delete();

        return redirect()->route('admin-models')->with('success', 'Model deleted successfully');
    }

    public function create(){
        return view('admin.models.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
        ]);

        ModelEntry::create([
            'name' => $request->name,
        ]);

        return redirect()->route('admin-models')->with('success', 'Model created successfully');
    }
}
