<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }

    public function register_index()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $param = $request->validate([
            'name' => 'required',
            'full_name' => 'required',
            'dob' => 'nullable',
            'start_date' => 'nullable',
            'gender' => 'required',
            'role_id' => 'required',
            'password' => 'required',
        ]);

        User::create($param);

        return back();
    }

    public function show()
    {
        $user = Auth::user();
        return view('user_show', compact('user'));
    }
}
