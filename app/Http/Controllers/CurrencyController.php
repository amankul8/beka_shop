<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function index(){
        $currencies = Currency::all();

        return view('admin.currencies.index', ['currencies' => $currencies]);
    }

    public function edit($id){
        $currency = Currency::find($id);

        return view('admin.currencies.edit', ['currency' => $currency]);
    }

    public function create(){
        return view('admin.currencies.create');
    }

    public function update(Request $request){
        request()->validate([
            'id'=> 'required',
            'currency_name' => 'required',
            'currency_code' => 'required',
        ]);

        $currency = Currency::find($request->id);
        $currency->currency_name = $request->input('currency_name');
        $currency->currency_code = $request->input('currency_code');
        $currency->save();

        return redirect()->route('admin-currencies')->with('success', 'Currency updated successfully');
    }

    public function delete(Request $request){
        $request->validate([
            'id'=> 'required'
        ]);

        $currency = Currency::find($request->id);
        $currency->delete();

        return redirect()->route('admin-currencies')->with('success', 'Currency deleted successfully');
    }

    public function store(Request $request){
        $request->validate([
            'currency_name' => 'required',
            'currency_code' => 'required',
        ]);

        Currency::create([
            'currency_name' => $request->currency_name,
            'currency_code' => $request->currency_code,
        ]);

        return redirect()->route('admin-currencies')->with('success', 'Currency created successfully');
    }
}
