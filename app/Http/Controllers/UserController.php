<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login_index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $param = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($param))
        {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'wrong_credentials' => 'Incorrect username/password'
        ]);
    }
}
