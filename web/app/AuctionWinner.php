<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuctionWinner extends Model
{
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
