<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    protected $guarded = [];

    public function winner()
    {
        return DB::table('participants')
            ->join('auction_winners', 'auction_winners.participant_id', '=', 'participants.id')
            ->where('auction_winners.item_id', $this->id)
            ->first();
    }
}
