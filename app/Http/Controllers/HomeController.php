<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $auctions = Auction::latest()->limit(4)->get();
        
        return view('pages.home', [
            'auctions' => $auctions,
        ]);
    }
}
