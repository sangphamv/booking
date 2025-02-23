@php
    \Carbon\Carbon::setLocale('vi');
@endphp

@extends('layouts.app')

@section('title', 'Trang chủ')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-lg w-full">
        <h2 class="text-xl font-bold mb-4">Đặt Vé Xem Phim</h2>
        <div class="grid grid-cols-2 gap-4 mb-4">
            <div class="p-4 bg-white rounded-lg shadow-lg border-1 border-gray-100 flex flex-col gap-4">
                <label class="block mb-2 font-semibold">Chọn phim</label>
                <select id="movieSelect"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    @foreach($movies as $movie)
                        <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                    @endforeach
                </select>

                <label class="block mb-2 font-semibold">Chọn rạp</label>
                <select id="cinemaSelect"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    @foreach($cinemas as $cinema)
                        <option value="{{ $cinema->id }}">{{ $cinema->name }}</option>
                    @endforeach
                </select>

                <label class="block mb-2 font-semibold">Chọn suất chiếu</label>
                <select id="showtimeSelect"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 uppercase">
                    @foreach($showtimes as $showtime)
                        <option value="{{ $showtime->id }}" data-movie="{{ $showtime->movie_id }}"
                                data-cinema="{{ $showtime->cinema_id }}">
                            {{ \Carbon\Carbon::parse($showtime->start_time)->translatedFormat('l, d-m-Y H:i') }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="p-4 bg-white rounded-lg shadow-lg border-1 border-gray-100 flex flex-col gap-4">
                {{--                <label class="block mb-2 font-semibold">Chọn ghế</label>--}}
                <div class="gap-4 mb-4">
                    <div class="col-span-6">
                        <label class="block mb-2 font-semibold">Chọn ghế</label>
                        <div
                            class=" bg-white p-4 flex flex-col justify-center items-center">
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
        </div>


        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const movieSelect = document.getElementById('movieSelect');
                const cinemaSelect = document.getElementById('cinemaSelect');
                const showtimeSelect = document.getElementById('showtimeSelect');

                function filterShowtimes() {
                    const selectedMovie = movieSelect.value;
                    const selectedCinema = cinemaSelect.value;

                    Array.from(showtimeSelect.options).forEach(option => {
                        const movieId = option.getAttribute('data-movie');
                        const cinemaId = option.getAttribute('data-cinema');
                        option.style.display = (movieId === selectedMovie && cinemaId === selectedCinema) ? 'block' : 'none';
                    });

                    showtimeSelect.value = '';
                }

                movieSelect.addEventListener('change', filterShowtimes);
                cinemaSelect.addEventListener('change', filterShowtimes);

                // Initial filter on page load
                filterShowtimes();
            });
        </script>

        <div class="flex gap-4">
            <button
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center w-full shadow-lg">
                ĐẶT VÉ
            </button>
            <button
                class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 w-full shadow-lg">
                HỦY ĐẶT
            </button>
        </div>
    </div>
@endsection
