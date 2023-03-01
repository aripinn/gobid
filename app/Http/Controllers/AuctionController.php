<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auction;

class AuctionController extends Controller
{
    public function index(){
        $title = 'All Auctions';
        $auctions = Auction::latest()->paginate(24);

        return view('pages.auctions', [
            'title' => $title,
            'auctions' => $auctions,
        ]);
    }

    public function show(Auction $auction){
        return view('pages.auction', [
            'title' => $auction->item->name,
            'auction' => $auction,
        ]);
    }
}
