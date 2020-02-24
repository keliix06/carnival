<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Item;

class AuctionSheets extends Controller
{
    public function __invoke()
    {
        return view('admin.auction-sheets', [
            'items' => Item::all(),
        ]);
    }
}
