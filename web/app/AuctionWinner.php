<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuctionWinner extends Model
{
    const PAYMENT_TYPE_CASH = 1;
    const PAYMENT_TYPE_CHECK = 2;
    const PAYMENT_TYPE_STRIPE = 3;

    protected $guarded = [];

    public function participant()
    {
        return $this->belongsTo('App\Participant');
    }

    public function item()
    {
        return $this->belongsTo('App\Item');
    }
}
