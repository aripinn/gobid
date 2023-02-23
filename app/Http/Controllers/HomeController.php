<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        $currentUser = Auth::user();
        switch($currentUser->role){
            case 'admin':
                return redirect('/dashboard');
                break;
            case 'staff':
                return redirect('/dashboard');
                break;
            default:
                $users = User::get();
                return view('pages.member.index', compact('users'));
                break;
        }
    }
}
