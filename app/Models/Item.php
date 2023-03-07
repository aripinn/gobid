<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'start_price',
        'description',
        'image',
    ];

    // public function getImageUrlAttribute()
    // {
    //     if (str_starts_with($this->image, 'http')) {
    //         return $this->image;
    //     }

    //     return asset('storage/' . $this->image);
    // }

    // protected $with = ['auction'];
    //$with auction fail
    public function auction()
    {
        return $this->hasOne(Auction::class);
    }

}
