<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){

        if (Auth::check()) {
            return redirect()->route('admin-index');
        }else{
            return view('auth.login');
        }
    }

    public function auth(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return redirect()->route('admin-index')->with('success', 'Вы успешно вошли в систему!');
        }else{
            session(['error' => 'Неверный email или пароль']);
            return redirect()->route('login')->with('error', 'Неверный email или пароль');
        }

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success', 'Вы успешно вышли из системы!');
    }
}
