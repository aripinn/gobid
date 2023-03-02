<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'auction_id',
        'bid_amount',
        'result',
    ];

    protected $with = ['user'];
    //$with auction fail

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function auction()
    {
        return $this->belongsTo(Auction::class);
    }

}
