<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function registerPost(Request $request){
        $validasi = Validator::make([
            'username' => 'required|min:15|max:255',
            'password' => 'required|min:8'
        ]);

        if($validasi->fails()){
            return redirect()->back()->withErrors($validasi->errors());
        }

        User::create([
            'username' => $request->nama,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('login')->with('success', 'Register sudah berhasil');
    }
}
