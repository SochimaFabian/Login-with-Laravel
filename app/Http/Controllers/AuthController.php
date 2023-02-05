<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function signup()
    {
        return view('signup');
    }

    public function createuser(Request $request)
    {
        $data = $request->validate([
            'username' => 'unique:users|min:6',
            'email' => 'unique:users',
            'password' => 'min:8'
        ]);

        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        return 'Account Created Successfully';
    }
    public function auth(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return 'Login successful';
        }
        return redirect()->back()->withInput($request->only('username'))->withErrors(['username' => 'These credentials do not match our records.']);
    }
}
