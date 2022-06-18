<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DaftarController extends Controller
{

    public function store (Request $request) 
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8',
            'password-confirmation' => 'required|required_with:password_confirmation|same:password',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/masuk')->with('berhasil-daftar', 'Berhasil daftar, silahkan masuk!');
    }

}
