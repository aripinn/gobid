<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auction;
use App\Models\Bid;

class AuctionController extends Controller
{
    public function index(){
        return view('pages.auctions', [
            'title' => 'All Auctions',
            'auctions' => Auction::latest()->paginate(24),
        ]);
    }

    public function show(Auction $auction){
        $bids = Bid::where('auction_id',$auction->id)->get();
        
        return view('pages.auction', [
            'title' => $auction->item->name,
            'auction' => $auction,
            'bids' => $bids->sortByDesc('bid_amount'),
        ]);
    }
}
