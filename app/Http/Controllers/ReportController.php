<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Bid;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function auction(Auction $auction){
        if ($auction->status != 'close'){
            return redirect()->route('auctions.index')->with('failed', 'Cannot generate report on this auction!');
        }

        $bids = Bid::where('auction_id',$auction->id)->get();

        $pdf = PDF::loadview('admin.pages.report.auction', [
            'auction' => $auction,
            'bids' => $bids->sortByDesc('bid_amount'),
        ]);
        return $pdf->download('reportAuction'.$auction->id.'.pdf');
    }
}
