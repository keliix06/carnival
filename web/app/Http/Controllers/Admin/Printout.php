<?php

namespace App\Http\Controllers\Admin;

use App\Participant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Printout extends Controller
{
    public function __invoke()
    {
        $participants = Participant::all();

        $participants = $participants->filter(function($participant) {
            return count($participant->wonItems()) > 0;
        });

        return view('admin.printout', [
            'winners' => $participants,
        ]);
    }
}
