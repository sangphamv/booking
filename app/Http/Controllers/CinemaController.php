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

        try {
            Cinema::create($request->all());
            return redirect()->route('admin.cinema.index')->with('success', 'Thêm rạp thành công.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Thêm rạp thất bại.');
        }
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

        try {
            $cinema->update($request->all());
            return redirect()->route('admin.cinema.index')->with('update', 'Cập nhật rạp thành công.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Cập nhật rạp thất bại.');
        }
    }

    // 7. Remove the specified resource from storage.
    public function destroy(Cinema $cinema)
    {
        try {
            $cinema->delete();
            return redirect()->route('admin.cinema.index')->with('destroy', 'Xóa rạp thành công.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Xóa rạp thất bại.');
        }
    }
}
