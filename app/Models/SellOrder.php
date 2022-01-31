<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellOrder extends Model
{
    use HasFactory;

    public function coinOrder()
    {
        return $this->belongsTo(CoinOrder::class);
    }
}
