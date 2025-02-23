@extends('layouts.app')

@section('title', 'Trang chủ')

@section('content')
    <div class="flex pt-0 overflow-hidden bg-gray-50">
        <div
            id="main-content"
            class="relative w-full h-full overflow-y-auto bg-gray-50 min-h-screen"
        >
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-[650px] overflow-hidden rounded-lg">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img
                            src="https://chieuphimquocgia.com.vn/_next/image?url=http%3A%2F%2Fapiv2.chieuphimquocgia.com.vn%2FContent%2FImages%2FBanner%2F0018371.jpg&w=1920&q=75"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img
                            src="https://chieuphimquocgia.com.vn/_next/image?url=http%3A%2F%2Fapiv2.chieuphimquocgia.com.vn%2FContent%2FImages%2FBanner%2F0018360.png&w=1920&q=75"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img
                            src="https://chieuphimquocgia.com.vn/_next/image?url=http%3A%2F%2Fapiv2.chieuphimquocgia.com.vn%2FContent%2FImages%2FBanner%2F0018358.jpg&w=1920&q=75"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                            data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                            data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                            data-carousel-slide-to="2"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
            <svg class="w-4 h-4 text-white  rtl:rotate-180" aria-hidden="true"
                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
                </button>
                <button type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 d group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
            <svg class="w-4 h-4 text-white  rtl:rotate-180" aria-hidden="true"
                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
                </button>
            </div>


            <div class="py-10 max-w-screen-xl m-auto">
                <h2 class="text-left text-2xl font-bold inline-block p-2 text-gray-900">
                    PHIM MỚI RA MẮT</h2>
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
                                <a
                                    href="{{ route('movie.show', $movie->id) }}"
                                    class="w-1/2 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300  shadow-lg shadow-blue-500/50 font-medium rounded-lg text-sm px-6 py-3 text-center">
                                    Mua vé
                                </a>
                                <a
                                    href="{{ route('movie.show', $movie->id) }}"
                                    class="w-1/2 relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-white rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white  focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                                <span
                                    class="relative text-center w-full px-5 py-3 transition-all ease-in duration-75 bg-gray-900 rounded-md group-hover:bg-transparent">
                                Xem chi tiết
                                </span>
                                </a>
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
            <div class="py-10 max-w-screen-xl m-auto">
                <h2 class="text-left text-2xl font-bold inline-block p-2 text-gray-900">
                    PHIM KINH DỊ</h2>
            </div>
            <div class="max-w-screen-xl grid grid-cols-2 md:grid-cols-4 gap-4 m-auto">
                @foreach($movies1 as $movie)
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
                                <a
                                    href="{{ route('movie.show', $movie->id) }}"
                                    class="w-1/2 relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-white rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white  focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                                <span
                                    class="relative text-center w-full px-5 py-3 transition-all ease-in duration-75 bg-gray-900 rounded-md group-hover:bg-transparent">
                                Xem chi tiết
                                </span>
                                </a>
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
            <div class="py-10 max-w-screen-xl m-auto">
                <h2 class="text-left text-2xl font-bold inline-block p-2 text-gray-900">
                    PHIM HÀNH ĐỘNG</h2>
            </div>
            <div class="max-w-screen-xl grid grid-cols-2 md:grid-cols-4 gap-4 m-auto">
                @foreach($movies2 as $movie)
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
                                <a
                                    href="{{ route('movie.show', $movie->id) }}"
                                    class="w-1/2 relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-white rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white  focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                                <span
                                    class="relative text-center w-full px-5 py-3 transition-all ease-in duration-75 bg-gray-900 rounded-md group-hover:bg-transparent">
                                Xem chi tiết
                                </span>
                                </a>
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
