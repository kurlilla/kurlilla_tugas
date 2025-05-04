<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view ('auth/login');
    }

    public function loginProses(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:8',

        ],[
            'email.required' => 'email tidak boleh kosong',
            'password.required' => 'password tidak boleh kosong',
            'password.min' => 'password minimal 8 karakter',

        ]);

        $data = array(
            'email' => $request->email,
            'password' => $request->password,
        );
        if (Auth::attempt($data)){
            return redirect()->route('dashboard')->with('success', 'anda berhasil login');
        } else {
            return redirect()->back()->with('error', 'email atau password salah');
        }
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('login')->with('success','anda berhasil logout');
    }
}