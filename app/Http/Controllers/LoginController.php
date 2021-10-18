<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  App\Models\Login;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login', [
        "title" => "Login"
    ]);
    } 

    public function store(Request $request)
    {
        $credentials = $request->validate([
           'username' => 'required',
           'password' => 'required'
        ]); 
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login Failed!!!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('logout', 'Logout Success');
    }
    

}