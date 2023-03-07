<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function auction(){
        $pdf = PDF::loadView('admin.pages.report.auction');
        return $pdf->stream('auctionreport.pdf');
    }
}
