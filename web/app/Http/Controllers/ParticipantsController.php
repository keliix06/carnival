<?php

namespace App\Http\Controllers;

use App\Participant;
use Illuminate\Http\Request;

class ParticipantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('participants', [
            'participants' => Participant::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('participant-form', [
            'action'        => route('participants.store'),
            'method'        => 'POST',
            'title'         => 'Add Participant',
            'id'            => null,
            'bidder_number' => null,
            'name'          => null,
            'email'         => null,
            'phone'         => null,
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
        $valid = $request->validate([
            'name'          => 'required',
            'email'         => 'required|email|unique:participants',
            'phone'         => 'required',
            'bidder_number' => 'required|integer|unique:participants',
        ]);

        Participant::create($valid);

        return redirect()->route('participants.index');
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
        $participant = Participant::findOrFail($id);

        return view('participant-form', [
            'action'        => route('participants.update', $participant->id),
            'method'        => 'PUT',
            'title'         => 'Edit Participant',
            'id'            => $participant->id,
            'bidder_number' => $participant->bidder_number,
            'name'          => $participant->name,
            'email'         => $participant->email,
            'phone'         => $participant->phone,
        ]);
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
        $valid = $request->validate([
            'name'          => 'required',
            'email'         => 'required|email',
            'phone'         => 'required',
            'bidder_number' => 'required|integer',
        ]);

        $participant = Participant::findOrFail($id);
        $participant->update($valid);

        return redirect()->route('participants.index');
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
        $participant = Participant::findOrFail($id);
        $participant->delete();
        redirect()->back();
    }
}
