@extends('layouts.user')

@section('title', 'User Dashboard')

@section('content')
    <div class="flex pt-0 overflow-hidden bg-white">
        <div
            id="main-content"
            class="relative w-full h-full overflow-y-auto bg-white min-h-screen p-4"
        >
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg ">
                <div class="flex items-center justify-center h-48 mb-4 rounded-sm bg-gray-50 ">
                    <div class="w-full h-full rounded-xl flex items-center justify-center bg-black relative">
                        <div
                            class="absolute rounded-xl inset-0 bg-[linear-gradient(to_right,rgba(255,255,255,0.1)_1px,transparent_1px),linear-gradient(to_bottom,rgba(255,255,255,0.1)_1px,transparent_1px)] bg-[size:30px_30px]"></div>

                        <h1 class="text-gray-100 text-6xl font-bold">User Dashboard</h1>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 ">
                        <p class="text-2xl text-gray-400 ">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M9 1v16M1 9h16"/>
                            </svg>
                        </p>
                    </div>
                    <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 ">
                        <p class="text-2xl text-gray-400 ">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M9 1v16M1 9h16"/>
                            </svg>
                        </p>
                    </div>
                    <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 ">
                        <p class="text-2xl text-gray-400 ">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M9 1v16M1 9h16"/>
                            </svg>
                        </p>
                    </div>
                    <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 ">
                        <p class="text-2xl text-gray-400 ">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M9 1v16M1 9h16"/>
                            </svg>
                        </p>
                    </div>
                </div>
                <div class="flex items-center justify-center h-48 mb-4 rounded-sm bg-gray-50 ">
                    <p class="text-2xl text-gray-400 ">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 1v16M1 9h16"/>
                        </svg>
                    </p>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 ">
                        <p class="text-2xl text-gray-400 ">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M9 1v16M1 9h16"/>
                            </svg>
                        </p>
                    </div>
                    <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 ">
                        <p class="text-2xl text-gray-400 ">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M9 1v16M1 9h16"/>
                            </svg>
                        </p>
                    </div>
                    <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 ">
                        <p class="text-2xl text-gray-400 ">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M9 1v16M1 9h16"/>
                            </svg>
                        </p>
                    </div>
                    <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 ">
                        <p class="text-2xl text-gray-400 ">
                            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M9 1v16M1 9h16"/>
                            </svg>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach (['user','success'] as $msg)
        @if(session($msg))
            <x-toast type="{{ $msg }}">
                {{ session($msg) }}
            </x-toast>
        @endif
    @endforeach
@endsection
