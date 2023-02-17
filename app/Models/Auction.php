<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Auction extends Model
{
    use HasFactory;

    public function items(){
        return $this->belongsTo(Item::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function bids (){
        return $this->hasMany(Bid::class);
    }
}
