<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Participant;

class Printout extends Controller
{
    public function __invoke()
    {
        $participants = Participant::all();

        $participants = $participants->filter(function ($participant) {
            return count($participant->wonItems()) > 0;
        });

        return view('admin.printout', [
            'winners' => $participants,
        ]);
    }
}
