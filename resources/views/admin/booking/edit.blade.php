@extends('layouts.admin')

@section('title', 'Quản lý đặt vé')

@section('content')
    <div
        class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 :bg-gray-800 :border-gray-700"
    >
        <div class="w-full mb-1">
            <div class="mb-4">
                <nav class="flex mb-5" aria-label="Breadcrumb">
                    <ol
                        class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2"
                    >
                        <li class="inline-flex items-center">
                            <a
                                href="{{ route('admin.booking.index') }}"
                            >
                                Quản lý đặt vé
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg
                                    class="w-6 h-6 text-gray-400"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg
                                >
                                <span
                                    class="ml-1 text-gray-400 md:ml-2 :text-gray-300 :hover:text-white"
                                >{{$booking->id}}</span
                                >
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1
                    class="text-xl font-semibold text-gray-900 sm:text-2xl :text-white"
                >
                    Chỉnh sửa đặt vé
                </h1>
            </div>
            <div class="sm:flex">
                <div
                    class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 :divide-gray-700"
                >
                </div>
                <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col bg-white shadow-lg rounded-lg">
        <div class="p-6 space-y-6">
            <form action="{{ route('admin.booking.update', $booking->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="user" class="block mb-2 text-sm font-medium text-gray-900">User</label>
                        <input type="text" name="user" id="user" value="{{ $booking->user->name }}" readonly
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="showtime" class="block mb-2 text-sm font-medium text-gray-900">Suất chiếu</label>
                        <input type="text" name="showtime" id="showtime"
                               value="{{ $booking->showtime->movie->title }} ({{ \Carbon\Carbon::parse($booking->showtime->start_time)->format('d/m/Y, H:i') }})"
                               readonly
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5">
                        <input type="hidden" name="showtime_id" value="{{ $booking->showtime_id }}">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="seat" class="block mb-2 text-sm font-medium text-gray-900">Ghế</label>
                        <input type="text" name="seat" id="seat"
                               value="Row {{ $booking->seat->row_num }}, Seat {{ $booking->seat->seat_num }}"
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5">
                        <input type="hidden" name="seat_id" value="{{ $booking->seat_id }}">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="payment_status" class="block mb-2 text-sm font-medium text-gray-900">Thanh
                            toán</label>
                        <input type="text" name="payment_status" id="payment_status"
                               value="{{ $booking->payment_status }}"
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5">
                        <input type="hidden" name="payment_status" value="{{ $booking->payment_status }}">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="customer_name" class="block mb-2 text-sm font-medium text-gray-900">Khách
                            hàng</label>
                        <input type="text" name="customer_name" id="customer_name" value="{{ $booking->customer_name }}"
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="customer_email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="email" name="customer_email" id="customer_email"
                               value="{{ $booking->customer_email }}"
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5">
                    </div>
                    <div class="col-span-6">
                        <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                        >
                            Cập nhật đặt vé
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
