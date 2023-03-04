<?php

namespace App\Http\Controllers\Admin;

use App\Models\Auction;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminAuctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.auctions.index',[
            'title' => 'Auctions',
            'auctions' => Auction::latest()->paginate(24),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.auctions.create',[
            'title' => 'Start New Auction',
            'items' => Item::whereNotIn('id', function($query){
                $query->select('item_id')->from('auctions');
            })->latest()->paginate(25),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item_id = $request->item_id;

        $count = Auction::where('item_id', $item_id)->count();
        if ($count > 0) {
            return redirect()->route('auctions.index')
                        ->with('failed','This item has been auctioned.');
        }

        Auction::create([
            'item_id' => $item_id,
            'start_date' => now(),
            'status' => 'open',
        ]);

        return redirect()->route('auctions.index')
                        ->with('success','Auction started successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function show(Auction $auction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function edit(Auction $auction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auction $auction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auction $auction)
    {
        //
    }
}
