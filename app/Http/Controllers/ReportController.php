<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Bid;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function index(){
        return view('admin.pages.report.index', [
            'title' => 'Generate Report',
            'auctions' => Auction::where('status', 'close')
                                ->orderByDesc('end_date')->paginate(25),
        ]);
    }

    public function auction(Auction $auction){
        if ($auction->status != 'close'){
            return redirect()->route('report.index')->with('failed', 'Cannot generate report on this auction!');
        }

        $bids = Bid::where('auction_id',$auction->id)->get();

        $pdf = PDF::loadview('admin.pages.report.auction', [
            'auction' => $auction,
            'bids' => $bids->sortByDesc('bid_amount'),
        ]);
        return $pdf->download('gobid_report_'.$auction->id.'.pdf');
    }
}
