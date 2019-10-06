<?php

namespace App\Http\Controllers;

use App\Donor;
use Illuminate\Http\Request;

class DonorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('donors', [
            'donors' => Donor::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donors-form', [
            'action' => route('donors.store'),
            'method' => 'POST',
            'title' => 'Add Donor',
            'id' => null,
            'name' => null,
            'notes' => null,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid  = $request->validate([
            'name' => 'required',
            'notes' => 'nullable',
        ]);

        Donor::create($valid);

        return redirect()->route('donors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donor = Donor::findOrFail($id);

        return view('donors-form', [
            'action' => route('donors.update', $donor->id),
            'method' => 'PUT',
            'title' => 'Edit Donor',
            'id' => $donor->id,
            'name' => $donor->name,
            'notes' => $donor->notes,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $valid  = $request->validate([
            'name' => 'required',
            'notes' => 'nullable',
        ]);

        $donor = Donor::findOrFail($id);
        $donor->update($valid);

        return redirect()->route('donors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donor = Donor::findOrFail($id);
        $donor->delete();
        return redirect()->route('donors.index');
    }
}
