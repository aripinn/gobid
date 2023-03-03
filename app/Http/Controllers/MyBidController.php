<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Bid;

class MyBidController extends Controller
{
    public function index(){
        if(!isset(Auth::user()->id)){
            return redirect('/login');
        }
        
        return view('pages.mybid', [
            'title' => 'My Bid',
            'bids' => Bid::where('user_id',Auth::user()->id)->get(),
        ]);
    }
}
