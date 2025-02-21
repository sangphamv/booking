@extends('layouts.admin')

@section('title', 'Quản lý lịch chiếu')

@section('content')
    <div
        class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 :bg-gray-800 :border-gray-700">
        <div class="w-full mb-1">
            <div class="mb-4">
                <nav class="flex mb-5" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                        <li class="inline-flex items-center">
                            <a href="{{ route('admin.showtime.index') }}">Quản lý lịch chiếu</a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg
                                    class="w-6 h-6 text-gray-400"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                    >
                                </svg>
                                <a href="#"
                                   class="ml-1 text-gray-700 hover:text-blue-600 md:ml-2 :text-gray-300 :hover:text-white">Chỉnh
                                    sửa lịch chiếu</a>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl :text-white">Chỉnh sửa lịch chiếu</h1>
            </div>
            <div class="sm:flex">
                <div
                    class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 :divide-gray-700"></div>
                <div class="flex items-center ml-auto space-x-2 sm:space-x-3"></div>
            </div>
        </div>
    </div>
    <div class="flex flex-col bg-white shadow-lg rounded-lg">
        <div class="p-6 space-y-6">
            <form action="{{ route('admin.showtime.update', $showtime->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="movie_id" class="block mb-2 text-sm font-medium text-gray-900">Phim</label>
                        <select name="movie_id" id="movie_id" required
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            @foreach($movies as $movie)
                                <option
                                    value="{{ $movie->id }}" {{ $showtime->movie_id == $movie->id ? 'selected' : '' }}>{{ $movie->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="cinema_id" class="block mb-2 text-sm font-medium text-gray-900">Rạp</label>
                        <select name="cinema_id" id="cinema_id" required
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            @foreach($cinemas as $cinema)
                                <option
                                    value="{{ $cinema->id }}" {{ $showtime->cinema_id == $cinema->id ? 'selected' : '' }}>{{ $cinema->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="start_time" class="block mb-2 text-sm font-medium text-gray-900">Thời gian bắt
                            đầu</label>
                        <input type="datetime-local" name="start_time" id="start_time"
                               value="{{ $showtime->start_time }}" required
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="end_time" class="block mb-2 text-sm font-medium text-gray-900">Thời gian kết
                            thúc</label>
                        <input type="datetime-local" name="end_time" id="end_time" value="{{ $showtime->end_time}}"
                               required
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <div class="grid grid-cols-12 gap-4">
                            <div class="col-span-8">
                                <div
                                    class=" bg-white p-4 rounded-lg shadow-lg border-1 border-gray-100 flex flex-col justify-center items-center">
                                    <div class="grid grid-cols-13 grid-rows-7 gap-2 p-4 text-center font-bold">
                                        @php
                                            $number = 1;
                                            $letterIndex = 0;
                                        @endphp
                                        @for ($i = 0; $i < 91; $i++)
                                            @if ($i < 13)
                                                @if ($i == 0)
                                                    <div></div>
                                                @elseif ($i == 3 || $i == 10)
                                                    <div></div>
                                                @else
                                                    <div class="flex items-center justify-center">{{ $number++ }}</div>
                                                @endif
                                            @elseif ($i % 13 == 0)
                                                <div
                                                    class="flex items-center justify-center">{{ chr(65 + $letterIndex++) }}</div>
                                            @elseif (($i % 13) != 3 && ($i % 13) != 10)
                                                <x-seat/>
                                            @else
                                                <div></div>
                                            @endif
                                        @endfor
                                    </div>
                                    <div class=" border-t-2 py-4 px-4 border-gray-300 flex gap-4
                                    ">
                                        <div class=" text-gray-300 flex items-center gap-2">
                                            <svg class="fill-current" width="26" height="20" viewBox="0 0 26 20"
                                                 fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0.048584 3.92794C0.048584 2.98946 0.809371 2.22867 1.74785 2.22867H3.44712C4.3856 2.22867 5.14639 2.98946 5.14639 3.92794V12.4243C5.14639 13.3628 5.90718 14.1235 6.84566 14.1235H18.7405C19.679 14.1235 20.4398 13.3628 20.4398 12.4243V3.92794C20.4398 2.98946 21.2006 2.22867 22.1391 2.22867H23.8383C24.7768 2.22867 25.5376 2.98946 25.5376 3.92794V14.9732C25.5376 17.3194 23.6356 19.2213 21.2894 19.2213H4.29675C1.95056 19.2213 0.048584 17.3194 0.048584 14.9732V3.92794Z"
                                                />
                                                <path
                                                    d="M5.99548 3.07777C5.99548 1.67005 7.13667 0.52887 8.54439 0.52887H17.0407C18.4484 0.52887 19.5896 1.67005 19.5896 3.07777V12.4237C19.5896 12.893 19.2092 13.2734 18.74 13.2734H6.84512C6.37588 13.2734 5.99548 12.893 5.99548 12.4237V3.07777Z"
                                                />
                                            </svg>
                                            <span class="text-medium text-gray-500">Còn trống</span>
                                        </div>
                                        <div class=" text-emerald-500 flex items-center gap-2">
                                            <svg class="fill-current" width="26" height="20" viewBox="0 0 26 20"
                                                 fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0.048584 3.92794C0.048584 2.98946 0.809371 2.22867 1.74785 2.22867H3.44712C4.3856 2.22867 5.14639 2.98946 5.14639 3.92794V12.4243C5.14639 13.3628 5.90718 14.1235 6.84566 14.1235H18.7405C19.679 14.1235 20.4398 13.3628 20.4398 12.4243V3.92794C20.4398 2.98946 21.2006 2.22867 22.1391 2.22867H23.8383C24.7768 2.22867 25.5376 2.98946 25.5376 3.92794V14.9732C25.5376 17.3194 23.6356 19.2213 21.2894 19.2213H4.29675C1.95056 19.2213 0.048584 17.3194 0.048584 14.9732V3.92794Z"
                                                />
                                                <path
                                                    d="M5.99548 3.07777C5.99548 1.67005 7.13667 0.52887 8.54439 0.52887H17.0407C18.4484 0.52887 19.5896 1.67005 19.5896 3.07777V12.4237C19.5896 12.893 19.2092 13.2734 18.74 13.2734H6.84512C6.37588 13.2734 5.99548 12.893 5.99548 12.4237V3.07777Z"
                                                />
                                            </svg>
                                            <span class="text-medium text-gray-500">Đang chọn</span>
                                        </div>
                                        <div class=" text-red-500 flex items-center gap-2">
                                            <svg class="fill-current" width="26" height="20" viewBox="0 0 26 20"
                                                 fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0.048584 3.92794C0.048584 2.98946 0.809371 2.22867 1.74785 2.22867H3.44712C4.3856 2.22867 5.14639 2.98946 5.14639 3.92794V12.4243C5.14639 13.3628 5.90718 14.1235 6.84566 14.1235H18.7405C19.679 14.1235 20.4398 13.3628 20.4398 12.4243V3.92794C20.4398 2.98946 21.2006 2.22867 22.1391 2.22867H23.8383C24.7768 2.22867 25.5376 2.98946 25.5376 3.92794V14.9732C25.5376 17.3194 23.6356 19.2213 21.2894 19.2213H4.29675C1.95056 19.2213 0.048584 17.3194 0.048584 14.9732V3.92794Z"
                                                />
                                                <path
                                                    d="M5.99548 3.07777C5.99548 1.67005 7.13667 0.52887 8.54439 0.52887H17.0407C18.4484 0.52887 19.5896 1.67005 19.5896 3.07777V12.4237C19.5896 12.893 19.2092 13.2734 18.74 13.2734H6.84512C6.37588 13.2734 5.99548 12.893 5.99548 12.4237V3.07777Z"
                                                />
                                            </svg>
                                            <span class="text-medium text-gray-500">Đã đặt</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6">
                        <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Cập nhật lịch chiếu
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
