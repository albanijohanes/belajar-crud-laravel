<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function landing(){
        return view('landing');
    }

    public function loginPost(Request $request){
        $validasi = Validator::make([
            'username' => 'required',
            'password' => 'required'
        ]);

        if($validasi->fails()){
            return redirect()->back()->withErrors($validasi->errors());
        }

        $user = User::where('username', $request->username)->first();

        if(!$user){
            return redirect()->back()->withErrors(['Username tidak ditemukan']);
        }else{
            return redirect()->back()->withErrors(['Password salah']);
        }
    }

    public function logout(Request $request){
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('landing');
    }
}
