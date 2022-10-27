<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function auth(Request $req){
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
            $req->session()->regenerate();
            Return Redirect()->intended('/home');
        }
        return back();
    }
    public function logout(Request $req){
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return Redirect('/');
    }
}