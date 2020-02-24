<?php

namespace App\Http\Controllers;

use App\Donor;
use App\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('items', [
            'items' => Item::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item-form', [
            'action'          => route('items.store'),
            'method'          => 'POST',
            'title'           => 'Add Item',
            'id'              => null,
            'name'            => null,
            'item_number'     => null,
            'description'     => null,
            'estimated_value' => null,
            'donor_id'        => null,
            'donors'          => Donor::select('name', 'id')->orderBy('name')->get(),
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
            'name'            => 'required',
            'item_number'     => 'required|numeric|unique:items',
            'estimated_value' => 'required|numeric',
            'description'     => 'required',
            'donor_id'        => 'required|numeric',
        ]);

        Item::create($valid);

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
        $item = Item::findOrFail($id);

        return view('item-form', [
            'action'          => route('items.update', $item->id),
            'method'          => 'PUT',
            'title'           => 'Edit Item',
            'id'              => $item->id,
            'name'            => $item->name,
            'item_number'     => $item->item_number,
            'description'     => $item->description,
            'estimated_value' => $item->estimated_value,
            'donor_id'        => $item->donor_id,
            'donors'          => Donor::select('name', 'id')->orderBy('name')->get(),
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
            'name'            => 'required',
            'item_number'     => 'required|numeric|unique:items',
            'estimated_value' => 'required|numeric',
            'description'     => 'required',
            'donor_id'        => 'required|numeric',
        ]);

        $item = Item::findOrFail($id);
        $item->update($valid);

        return redirect()->route('items.index');
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
        $item = Item::findOrFail($id);
        $item->delete();

        return redirect()->route('items.index');
    }
}
