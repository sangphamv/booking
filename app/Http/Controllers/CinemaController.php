<?php

namespace App\Http\Controllers;

use App\Models\Cinema;
use Illuminate\Http\Request;

class CinemaController extends Controller
{
    // 1. Display a listing of the resource.
    public function index()
    {
        $cinemas = Cinema::all();
        return view('admin.cinema', compact('cinemas'));
    }

    // 2. Show the form for creating a new resource.
    public function create()
    {
        return view('admin.cinema.create');
    }

    // 3. Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        Cinema::create($request->all());

        return redirect()->route('admin.cinema.index')->with('success', 'Cinema created successfully.');
    }

    // 4. Display the specified resource.
    public function show(Cinema $cinema)
    {
        return view('admin.cinema.show', compact('cinema'));
    }

    // 5. Show the form for editing the specified resource.
    public function edit(Cinema $cinema)
    {
        return view('admin.cinema.edit', compact('cinema'));
    }

    // 6. Update the specified resource in storage.
    public function update(Request $request, Cinema $cinema)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        $cinema->update($request->all());

        return redirect()->route('admin.cinema.index')->with('success', 'Cinema updated successfully.');
    }

    // 7. Remove the specified resource from storage.
    public function destroy(Cinema $cinema)
    {
        $cinema->delete();

        return redirect()->route('admin.cinema.index')->with('success', 'Cinema deleted successfully.');
    }
}
