<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('pages.login', []);
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|max:255'
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginFailed', 'Login failed!');
    }
}
