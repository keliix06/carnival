<?php

namespace App\Http\Controllers;

use App\Participant;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function __invoke()
    {
        $users = Participant::whoWonAuctions();

        return view('emails.confirm', [
            'users' => $users,
        ]);
    }
}
