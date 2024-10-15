<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionsController extends Controller
{
    public function index(){
        $collections = Collection::all();

        return view('admin.collections.index', ['collections' => $collections]);
    }

    public function edit($id){
        $collection = Collection::find($id);

        return view('admin.collections.edit', ['collection' => $collection]);
    }

    public function create(){
        return view('admin.collections.create');
    }

    public function update(Request $request){
        request()->validate([
            'id'=> 'required',
            'collection_name' => 'required',
        ]);

        $collection = Collection::find($request->id);
        $collection->collection_name = $request->input('collection_name');
        $collection->save();

        return redirect()->route('admin-collections')->with('success', 'Collection updated successfully');
    }

    public function delete(Request $request){
        $request->validate([
            'id'=> 'required'
        ]);

        $collection = Collection::find($request->id);
        $collection->delete();

        return redirect()->route('admin-collections')->with('success', 'Collection deleted successfully');
    }

    public function store(Request $request){
        $request->validate([
            'collection_name' => 'required',
        ]);

        Collection::create([
            'collection_name' => $request->collection_name,
        ]);

        return redirect()->route('admin-collections')->with('success', 'Collection created successfully');
    }
}
