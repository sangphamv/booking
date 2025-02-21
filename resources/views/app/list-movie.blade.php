@extends('layouts.app')

@section('title', 'Trang chủ')

@section('content')
    <div class="flex pt-0 overflow-hidden bg-gray-50">
        <div
            id="main-content"
            class="relative w-full h-full overflow-y-auto bg-gray-50 min-h-screen"
        >
            <div class="py-10 max-w-screen-xl m-auto">
                <h2 class="text-left text-2xl font-bold inline-block p-2 text-gray-900">
                    PHIM ĐANG CHIẾU</h2>
            </div>
            <div class="max-w-screen-xl grid grid-cols-2 md:grid-cols-4 gap-4 m-auto">
                @foreach($movies as $movie)
                    <div class="max-w-2xs w-full group/card">
                        <div
                            class="cursor-pointer overflow-hidden relative card h-96 rounded-md shadow-2xl max-w-sm mx-auto flex flex-col justify-between p-4"
                        >
                            <div
                                class="absolute w-full h-full top-0 left-0 transition duration-300 group-hover/card:bg-black/50">
                                <img class="group-hover/card:brightness-30" src="{{$movie->image}}" alt="">
                            </div>
                            <div class="absolute inset-0 flex flex-col gap-6 items-center justify-center opacity-0 group-hover/card:opacity-100 transition duration-300
                            bg-[linear-gradient(to_right,rgba(255,255,255,0.1)_1px,transparent_1px),linear-gradient(to_bottom,rgba(255,255,255,0.1)_1px,transparent_1px)] bg-[size:20px_20px]
                            ">
                                <button
                                    class="w-1/2 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300  shadow-lg shadow-blue-500/50 font-medium rounded-lg text-sm px-6 py-3 text-center">
                                    Mua vé
                                </button>
                                <button
                                    class="w-1/2 relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-white rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white  focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                                <span
                                    class="relative w-full px-5 py-3 transition-all ease-in duration-75 bg-gray-900 rounded-md group-hover:bg-transparent">
                                Xem chi tiết
                                </span>
                                </button>
                            </div>
                        </div>
                        <div class="text content">
                            <h1 class="font-bold text-xl py-4 text-black relative z-10">
                                {{ $movie->title }}
                            </h1>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
