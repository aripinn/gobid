<?php

namespace App\Http\Controllers\Admin;

use App\Models\Bid;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BidController extends Controller
{
    public function store(Request $request, Item $item)
    {
        $validated = $request->validate([
            'bid_amount' => 'required|numeric',
        ]);

        $currentBid = $item->bids()->max('bid_amount');

        if($validated['bid_amount'] <= $currentBid) {
            return back()->withErrors(['bid_amount' => 'Tawaran harus lebih tinggi dari tawaran saat ini.'])->withInput();
        }

        $bid = new Bid();
        $bid->user_id = Auth::user()->id;
        $bid->item_id = $item->id;
        $bid->bid_amount = $validated['bid_amount'];
        $bid->save();

        return redirect()->route('items.show', ['item' => $item->id]);
    }
}