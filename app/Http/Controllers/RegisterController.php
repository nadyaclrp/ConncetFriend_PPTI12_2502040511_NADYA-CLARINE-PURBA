<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(Request $request){
        // dd($request);
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'dob' => 'required|date',
            'password' => 'required',
            // 'interest_id' => 'required',
            'gender' => 'required',
            'usernameLinkedin' => 'required|url',
            'mobileNumb' => 'required|numeric|min:11|max:12',
            // 'mobileNumb' => 'required|numeric',
            'profession' => 'required'
        ]);

        //hashing password
        $validate['password'] = bcrypt($validate['password']);
        $validate['isAdmin'] = 0;
        // $validate['state_id'] = '1';
        $validate['wallet'] = 0;

        User::create($validate);

        return redirect('/payment');
    }

    public function buy(Request $request){
        $validate = $request->validate([
            'wallet' => 'required|numeric',
        ]);

        $user = User::find(auth()->user()->id);
        $user->wallet = $user->wallet + $request->wallet;

        if($user->wallet == 100000){
            $user->update();
            return redirect('/login');
        }
        return redirect()->back()->with('paymentError','Payment failed!');
    }
}
