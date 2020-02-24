<?php

namespace App\Http\Controllers;

use App\AuctionWinner;
use App\Item;
use App\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WinnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participants = Participant::all();

        $participants = $participants->filter(function ($participant) {
            return count($participant->wonItems()) > 0;
        });

        return view('winners', [
            'winners' => $participants,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('winners-form', [
            'action'       => route('winners.store'),
            'method'       => 'POST',
            'title'        => 'Add Winner',
            'participants' => Participant::all(),
            'item'         => Item::findOrFail(request()->get('item_id')),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        AuctionWinner::create([
            'participant_id' => request('participant_id'),
            'item_id'        => request('item_id'),
            'price'          => request('price') * 100,
        ]);

        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $winner = AuctionWinner::where('participant_id', $id)->update(['paid' => true, 'payment_type' => request('payment_type')]);

        return redirect()->route('winners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('auction_winners')->where('item_id', $id)->delete();

        return redirect()->route('items.index');
    }
}
