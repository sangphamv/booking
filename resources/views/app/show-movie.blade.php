@extends('layouts.app')

@section('title', 'Trang chủ')

@section('content')
    <div
        class="flex flex-col md:flex-row items-center md:items-start max-w-5xl mx-auto px-6 py-10 mt-5 rounded-2xl shadow-2xl bg-white">
        <div class="md:w-2/3 space-y-4">
            <h1 class="text-3xl font-bold">{{ $movie->title }}</h1>
            <p class="text-sm text-gray-600">{{ $movie->duration }} phút</p>
            <p><span class="font-semibold">Thể loại: </span> {{ $movie->category }}</p>
            <p><span
                    class="font-semibold">Ngày ra mắt:</span> {{ \Carbon\Carbon::parse($movie->release_date)->format('d-m-o') }}
            </p>
            <p class="text-gray-500 text-justify">{{ $movie->description }}</p>
            <button
                class="text-white bg-orange-500 hover:bg-orange-700 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none ">
                <span>Đặt Vé Ngay</span>
            </button>
        </div>
        <div class="md:w-1/3 mt-6 md:mt-0 flex justify-end">
            <img src="{{ $movie->image }}" alt="Movie Poster" class="rounded-lg shadow-lg w-64 h-96 object-cover">
        </div>
    </div>
    <div class="max-w-5xl mx-auto px-6 py-6 my-5 rounded-2xl shadow-2xl bg-white">
        <iframe width="100%" height="525px" class="rounded-2xl" src="{{ $movie->trailer }}"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
@endsection
