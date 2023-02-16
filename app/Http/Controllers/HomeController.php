<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $user = AUth::user();
        switch($user->role){
            case 'admin':
                return redirect('/dashboard');
                break;
            case 'staff':
                return redirect('/dashboard');
                break;
            default:
                return view('pages.member.index');
                break;
        }
    }
}
