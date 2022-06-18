<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function ubahPassword (Request $request)
    {
        $validatedData = $request->validate([
            'old-password' => 'required|current_password',
            'new-password' => 'required|min:8',
            'new-password-confirm' => 'required|same:new-password|required_with:password_confirm'
        ]);
        $user = User::find(Auth::id());
        $user->password = bcrypt($validatedData['new-password']);
        $user->save();
        $request->session()->regenerate();
        return back()->with('berhasil-ubah-password', 'Ubah password berhasil!');
    }

    public function keluar(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('berhasil-keluar', 'Berhasil keluar!');
    }

    public function pesanTiket (Request $request) 
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'address' => 'required',
            'zip' => 'required',
            'ticket-amount' => 'required|min:1',
            // 'password' => 'required|min:8',
            // 'password-confirmation' => 'required|required_with:password_confirmation|same:password',
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);

        // User::create($validatedData);

        return redirect('/')->with('berhasil-pesan-tiket', 'Tiket berhasil dipesan!');
    }

}
