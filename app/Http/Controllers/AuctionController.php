<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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

    public function store(Request $request, Auction $auction){
        $bids = Bid::where('auction_id',$auction->id)->get();
        if($bids->count()){
            $minBid = $auction->bid->max('bid_amount') + 1;
        }else{
            $minBid = $auction->item->start_price + 1;
        }

        $validated = $request->validate([
            'bid_amount' => 'required|numeric',
            'bid_amount' => ['required', 'numeric', 'min:'.$minBid],
        ]);

        Bid::create([
            'user_id' => Auth::user()->id,
            'auction_id' => $auction->id,
            'bid_amount' => $validated['bid_amount'],
            'result' => 'ongoing',
        ]);

        return redirect()->route('auction-show', $auction)
                        ->with('success' , 'Bid submitted successfully.');
    }
}
