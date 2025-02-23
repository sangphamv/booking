<?php

namespace App\Http\Controllers;

use App\Models\Showtime;
use App\Models\Movie;
use App\Models\Cinema;
use Illuminate\Http\Request;

class ShowtimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $showtimes = Showtime::with(['movie', 'cinema'])
            ->orderBy('cinema_id')
            ->orderBy('movie_id')
            ->orderBy('start_time', 'asc')
            ->get();
        return view('admin.showtime', compact('showtimes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $movies = Movie::all();
        $cinemas = Cinema::all();
        return view('admin.showtime.create', compact('movies', 'cinemas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'movie_id' => 'required|exists:movies,id',
            'cinema_id' => 'required|exists:cinemas,id',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
        ]);

        Showtime::create($request->all());

        return redirect()->route('admin.showtime.index')->with('success', 'Showtime created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $showtime = Showtime::with(['movie', 'cinema'])->findOrFail($id);
        return view('admin.showtime.show', compact('showtime'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $showtime = Showtime::findOrFail($id);
        $movies = Movie::all();
        $cinemas = Cinema::all();
        return view('admin.showtime.edit', compact('showtime', 'movies', 'cinemas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'movie_id' => 'required|exists:movies,id',
            'cinema_id' => 'required|exists:cinemas,id',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
        ]);

        $showtime = Showtime::findOrFail($id);
        $showtime->update($request->all());

        return redirect()->route('admin.showtime.index')->with('success', 'Showtime updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $showtime = Showtime::findOrFail($id);
        $showtime->delete();

        return redirect()->route('admin.showtime.index')->with('success', 'Showtime deleted successfully.');
    }
}
