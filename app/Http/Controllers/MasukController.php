<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasukController extends Controller
{
    
    public function authenticate (Request $request) 
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);


        // if(Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('masuk-gagal', 'Email atau kata sandi salah!');

        // return $validatedData;
    }

}
