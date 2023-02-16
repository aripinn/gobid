<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        // Manual Authorization
        // if(auth()->guest()){
        //     return view('pages.login');
        // }
        // if(auth()->user()->role === 'member'){
        //     abort(403);
        // }

        // Using gates authorization
        // $this->authorize('admin');

        return view('pages.admin.index');
    }
}
