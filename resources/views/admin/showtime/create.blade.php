@extends('layouts.admin')

@section('title', 'Quản lý suất chiếu')

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
                                href="{{ route('admin.showtime.index') }}"
                            >
                                Quản lý suất chiếu
                            </a>
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
                                <span
                                    class="ml-1 text-gray-400 md:ml-2 :text-gray-300 :hover:text-white"
                                >Thêm suất chiếu</span
                                >
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1
                    class="text-xl font-semibold text-gray-900 sm:text-2xl :text-white"
                >
                    Thêm suất chiếu
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
            <form action="{{ route('admin.showtime.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="movie_id" class="block mb-2 text-sm font-medium text-gray-900">Phim</label>
                        <select name="movie_id" id="movie_id" required
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            @foreach($movies as $movie)
                                <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="cinema_id" class="block mb-2 text-sm font-medium text-gray-900">Rạp</label>
                        <select name="cinema_id" id="cinema_id" required
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            @foreach($cinemas as $cinema)
                                <option value="{{ $cinema->id }}">{{ $cinema->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="start_time" class="block mb-2 text-sm font-medium text-gray-900">Thời gian bắt
                            đầu</label>
                        <input type="datetime-local" name="start_time" id="start_time" required
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="end_time" class="block mb-2 text-sm font-medium text-gray-900">Thời gian kết
                            thúc</label>
                        <input type="datetime-local" name="end_time" id="end_time" required
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    <div class="col-span-6">
                        <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Thêm suất chiếu
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
