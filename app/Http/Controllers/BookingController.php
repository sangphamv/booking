<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Showtime;
use App\Models\Movie;
use App\Models\Cinema;


class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('admin.booking', compact('bookings'));
    }

    public function seat()
    {
        $showtimes = Showtime::all();
        $movies = Movie::all();
        $bookings = Booking::all();
        $cinemas = Cinema::all();
        return view('app.booking-movie', compact('bookings','showtimes', 'movies', 'cinemas'));
    }

    public function create()
    {
        $users = User::all();
        $showtimes = Showtime::all();
        return view('admin.booking.create', compact('users', 'showtimes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'showtime_id' => 'required|exists:showtimes,id',
            'seat_id' => 'required|exists:seats,id',
            'payment_status' => 'required|in:Chờ xử lý,Hoàn thành',
            'customer_name' => 'nullable|string|max:255',
            'customer_email' => 'nullable|string|email|max:255',
        ]);

        Booking::create($request->all());

        return redirect()->route('admin.booking.index')->with('success', 'Tạo mới thành công.');
    }

    public function show(Booking $booking)
    {
        return view('admin.booking.show', compact('booking'));
    }

    public function edit(Booking $booking)
    {
        return view('admin.booking.edit', compact('booking'));
    }

    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'showtime_id' => 'required|exists:showtimes,id',
            'seat_id' => 'required|exists:seats,id',
            'payment_status' => 'required|in:Chờ xử lý,Hoàn thành',
            'customer_name' => 'nullable|string|max:255',
            'customer_email' => 'nullable|string|email|max:255',
        ]);

        $booking->update($request->all());

        return redirect()->route('admin.booking.index')->with('update', 'Cập nhật thành công.');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()->route('admin.booking.index')->with('destroy', 'Xóa thành công.');
    }
}
