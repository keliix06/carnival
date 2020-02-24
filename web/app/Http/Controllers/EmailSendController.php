<?php

namespace App\Http\Controllers;

use App\Mail\CarnivalReceipt;
use App\Participant;
use Illuminate\Support\Facades\Mail;

class EmailSendController extends Controller
{
    public function __invoke()
    {
        $users = Participant::whoWonAuctions();

        foreach ($users as $user) {
            $participant = \App\Participant::find($user->id);
            Mail::to($user)->send(new CarnivalReceipt($participant));
        }

        return view('admin.emails.sent');
    }
}
