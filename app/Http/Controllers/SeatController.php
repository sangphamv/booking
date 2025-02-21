<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seats = Seat::all();
        return view('seats.index', compact('seats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('seats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cinema_id' => 'required|exists:cinemas,id',
            'row_num' => 'required|integer',
            'seat_num' => 'required|integer',
            'available' => 'required|boolean',
        ]);

        Seat::create($request->all());

        return redirect()->route('seats.index')->with('success', 'Seat created successfully.');
    }

    /**
     */
    public function show(Seat $seat)
    {
        return view('seats.show', compact('seat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seat $seat)
    {
        return view('seats.edit', compact('seat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Seat $seat)
    {
        $request->validate([
            'cinema_id' => 'required|exists:cinemas,id',
            'seat_num' => 'required|integer',
            'available' => 'required|boolean',
        ]);

        $seat->update($request->all());

        return redirect()->route('seats.index')->with('success', 'Seat updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seat $seat)
    {
        $seat->delete();

        return redirect()->route('seats.index')->with('success', 'Seat deleted successfully.');
    }
}
