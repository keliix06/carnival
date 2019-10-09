<?php

namespace App\Http\Controllers\Admin\Reports;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Money extends Controller
{
    public function __invoke()
    {
        return view('admin.printout');
    }
}
