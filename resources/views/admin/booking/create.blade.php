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
                                >Tạo mới</span
                                >
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1
                    class="text-xl font-semibold text-gray-900 sm:text-2xl :text-white"
                >
                    Tạo mới đặt vé
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
            <form action="{{ route('admin.booking.store') }}" method="POST">
                <div class="grid grid-cols-2 space-y-6">
                    @csrf
                    <div class="max-w-xl">
                        <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900">User</label>
                        <select name="user_id" id="user_id"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="max-w-xl">
                        <label for="showtime_id" class="block mb-2 text-sm font-medium text-gray-900">Suất chiếu</label>
                        <select name="showtime_id" id="showtime_id"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5">
                            @foreach($showtimes as $showtime)
                                <option value="{{ $showtime->id }}">{{ $showtime->movie->title }}
                                    ({{ \Carbon\Carbon::parse($showtime->start_time)->format('d/m/Y, H:i') }})
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="max-w-xl">
                        <label for="seat_id" class="block mb-2 text-sm font-medium text-gray-900">Ghế ID</label>
                        <input type="text" name="seat_id" id="seat_id"
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5">
                    </div>
                    <div class="max-w-xl">
                        <label for="payment_status" class="block mb-2 text-sm font-medium text-gray-900">Thanh
                            toán</label>
                        <select name="payment_status" id="payment_status"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5">
                            <option value="Chờ xử lý">Chờ xử lý</option>
                            <option value="Hoàn thành">Hoàn thành</option>
                        </select>
                    </div>
                    <div class="max-w-xl">
                        <label for="customer_name" class="block mb-2 text-sm font-medium text-gray-900">Khách
                            hàng</label>
                        <input type="text" name="customer_name" id="customer_name"
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5">
                    </div>
                    <div class="max-w-xl">
                        <label for="customer_email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="email" name="customer_email" id="customer_email"
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5">
                    </div>
                </div>
                <div>
                    <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Tạo mới đặt vé
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
