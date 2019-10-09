<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Participant extends Model
{
    protected $guarded = [];

    public static function whoWonAuctions()
    {
        return DB::table('participants')
            ->select('participants.*')
            ->join('auction_winners', 'auction_winners.participant_id', '=', 'participants.id')
            ->get();
    }

    public function hasPaid()
    {
        return AuctionWinner::where('participant_id', $this->id)->where('paid', false)->count() < 1;
    }

    public function wonItems()
    {
        return AuctionWinner::where('participant_id', $this->id)->get();
    }

    public function total()
    {
        return $this->wonItems()->sum('price') / 100;
    }
}
