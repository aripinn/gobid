<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('pages.login');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|max:255'
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();

            $user = AUth::user();
            switch($user->role){
                case 'admin':
                    return redirect()->intended('/dashboard');
                    break;
                case 'staff':
                    return redirect()->intended('/dashboard');
                    break;
                case 'member':
                    return redirect('/');
                    break;
                default:
                    return redirect('/login');
            }
        }

        return back()->with('loginFailed', 'Login failed!');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
