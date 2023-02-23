<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'user_id',
        'start_date',
        'end_date',
        'end_price',
        'status',
    ];

    public function item(){
        return $this->belongsTo(Item::class);
    }
    public function bid(){
        return $this->hasMany(Bid::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
