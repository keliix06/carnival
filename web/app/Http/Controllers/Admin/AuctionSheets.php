<?php

namespace App\Http\Controllers\Admin;

use App\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuctionSheets extends Controller
{
    public function __invoke()
    {
        return view('admin.auction-sheets', [
            'items' => Item::all(),
        ]);
    }
}
