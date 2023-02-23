<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard(){
        return view('admin.pages.dashboard');
    }
    public function user(){
        return view('admin.pages.users.user');
    }
    public function staff(){
        return view('admin.pages.users.staff');
    }
    public function admin(){
        return view('admin.pages.users.admin');
    }
}
