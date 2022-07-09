<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255',
            'phone' => 'required|numeric|min:8',
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        $request->session()->flash('success', 'Register Successfull! Please Login');

        return redirect('/login');
    }
}
