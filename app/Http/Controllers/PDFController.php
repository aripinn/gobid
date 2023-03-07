<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Bid;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function auction(){
        // $pdf = PDF::loadView('admin.pages.report.auction', [
        //     'auction' => Auction::first(),
        //     'bids' => Bid::all(),
        // ]);
        $view = view('admin.pages.report.auction', [
            'auction' => Auction::where('id', 22)->first(),
            'bids' => Bid::all(),
        ])->render();
        $pdf = PDF::loadHTML($view);
        // $pdf->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->render();
        $pdf->render();
        return $pdf->stream('auctionreport.pdf');
    }
}
