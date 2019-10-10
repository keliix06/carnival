<?php

namespace App\Http\Controllers\Admin\Reports;

use App\AuctionWinner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Money extends Controller
{
    public function __invoke()
    {
        return view('admin.reports.money', [
            'totalBids' => AuctionWinner::sum('price') / 100,
            'totalPayments' => AuctionWinner::where('paid', true)->sum('price') / 100,
            'cc' => AuctionWinner::where('paid', true)->where('payment_type', AuctionWinner::PAYMENT_TYPE_STRIPE)->sum('price') / 100,
            'cash' => AuctionWinner::where('paid', true)->where('payment_type', AuctionWinner::PAYMENT_TYPE_CASH)->sum('price') / 100,
            'check' => AuctionWinner::where('paid', true)->where('payment_type', AuctionWinner::PAYMENT_TYPE_CHECK)->sum('price') / 100,
        ]);
    }
}
