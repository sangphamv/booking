@extends('layouts.app')

@section('title', 'Trang chủ')

@section('content')
    <div class="flex pt-0 overflow-hidden bg-gray-50">
        <div
            id="main-content"
            class="relative w-full h-full overflow-y-auto bg-gray-50 min-h-screen"
        >
            <h2 class="text-center text-3xl p-4">Phim mới</h2>
            <div class="max-w-screen-xl grid grid-cols-2 md:grid-cols-4 gap-4 m-auto">
                @foreach($movies as $movie)
                    <div class="max-w-xs w-full group/card">
                        <div
                            class="cursor-pointer overflow-hidden relative card h-96 rounded-md shadow-xl max-w-sm mx-auto backgroundImage flex flex-col justify-between p-4 bg-[url(https://images.unsplash.com/photo-1544077960-604201fe74bc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1651&q=80)] bg-cover"
                        >
                            <div
                                class="absolute w-full h-full top-0 left-0 transition duration-300 group-hover/card:bg-black opacity-60"></div>
                            <div class="flex flex-row items-center space-x-4 z-10">
                            </div>
                            <div class="text content">
                                <h1 class="font-bold text-xl md:text-2xl text-gray-50 relative z-10">
                                    {{ $movie->title }}
                                </h1>
                                <p class="font-normal text-sm text-gray-50 relative z-10 my-4 truncate">
                                    {{ $movie->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
