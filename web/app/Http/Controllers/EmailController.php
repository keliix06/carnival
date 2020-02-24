<?php

namespace App\Http\Controllers;

use App\Participant;

class EmailController extends Controller
{
    public function __invoke()
    {
        $users = Participant::whoWonAuctions();

        return view('admin.emails.confirm', [
            'users' => $users,
        ]);
    }
}
