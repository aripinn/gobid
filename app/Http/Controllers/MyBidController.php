<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Auction;
use App\Models\Bid;

class MyBidController extends Controller
{
    public function index(){
        $bids = Bid::latest();

        // Get highest bid foreach auction
        $bids = $bids->where('user_id', Auth::user()->id)
                    ->whereIn('id', function ($query) {
                        $query->select(DB::raw('MAX(id)'))
                            ->from('bids')
                            ->whereRaw('bids.user_id = ?', [Auth::user()->id])
                            ->groupBy('auction_id');
                    })->paginate(10);
        
        return view('pages.mybid', [
            'title' => 'My Bid',
            'bids' => $bids,
        ]);
    }
}
