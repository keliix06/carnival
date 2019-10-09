<?php

namespace App\Http\Controllers;

use App\Participant;
use Illuminate\Http\Request;

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
