<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    // 1. Hiển thị danh sách tài nguyên (Danh sách phim)
    public function index()
    {
        $movies = Movie::all();
        return view('admin.movie', compact('movies'));
    }

    public function indexWelcome()
    {
        $movies = Movie::take(8)->get();
        return view('welcome', compact('movies'));
    }

    // 2. Hiển thị form tạo mới tài nguyên (Form thêm phim)
    public function create()
    {
        return view('admin.movie.create');
    }

    // 3. Lưu tài nguyên mới vào database (Thêm phim vào DB)
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'duration' => 'required|integer',
            'release_date' => 'required|date',
            'description' => 'required|string',
            'trailer' => 'required|url',
            'image' => 'required|url',
            'price' => 'required|numeric',
        ]);

        Movie::create($request->all());

        return redirect()->route('admin.movie.index')->with('success', 'Movie created successfully.');
    }

    // 4. Hiển thị một tài nguyên cụ thể (Chi tiết phim)
    public function show(Movie $movie)
    {
        return view('admin.movie.show', compact('movie'));
    }

    // 5. Hiển thị form chỉnh sửa tài nguyên (Form sửa phim)
    public function edit(Movie $movie)
    {
        return view('admin.movie.edit', compact('movie'));
    }

    // 6. Cập nhật tài nguyên trong database (Cập nhật phim)
    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'duration' => 'required|integer',
            'release_date' => 'required|date',
            'description' => 'required|string',
            'trailer' => 'required|url',
            'image' => 'required|url',
            'price' => 'required|numeric',
        ]);

        $movie->update($request->all());

        return redirect()->route('admin.movie.index')->with('success', 'Movie updated successfully.');
    }

    // 7. Xóa một tài nguyên khỏi database (Xóa phim)
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route('admin.movie.index')->with('success', 'Movie deleted successfully.');
    }
}
