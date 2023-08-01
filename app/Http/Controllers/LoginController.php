<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login (Request $request) {
        $validate = $request->validate([
            'password' => 'required',
            'email' => 'required'
        ]);

        if(Auth::attempt($validate)){
            //buat ngasi tau uda login
            $request->session()->regenerate();
            return redirect('/homeUser');
        }
        return redirect()->back()->with('loginError','Login failed!');

    }

    public function logout() {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/register');
    }
}
