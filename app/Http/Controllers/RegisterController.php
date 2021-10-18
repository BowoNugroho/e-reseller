<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.register', [
        "title" => "Register"
    ]);
    }
    public function store(Request $request)
    {
       $validateData = $request->validate([
           'name' => 'required|max:255',
           'username' => 'required|min:4|max:255|unique:users',
           'email' => 'required|regex:/(.+)@(.+)\.(.+)/i|unique:users',
           'password' => 'required|min:8|max:255'
           
       ]); 
    // $validateData['password'] = bcrypt($validateData['password']);
       $validateData['password'] = Hash::make($validateData['password']); 

    //    insert ke db
       User :: create($validateData);
    
    //    flash setelah sukses membuat akun
    //    $request->session()->flash('succes', 'Register successfull! Please login');
       
    //    redirect ke halaman yang di mau dengan membawa session
       return redirect ('/login')->with('success', 'Register successfull! Please login');

    }
}
