@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="flex pt-0 overflow-hidden bg-white">
        <div
            id="main-content"
            class="relative w-full h-full overflow-y-auto bg-white min-h-screen p-4"
        >
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg ">
                <div class="shadow-xl rounded-xl flex items-center justify-center h-56 mb-4 bg-gray-50 ">
                    <div class="w-full h-full rounded-xl flex items-center justify-center bg-black relative">
                        <div
                            class="absolute rounded-xl inset-0 bg-[linear-gradient(to_right,rgba(255,255,255,0.1)_1px,transparent_1px),linear-gradient(to_bottom,rgba(255,255,255,0.1)_1px,transparent_1px)] bg-[size:30px_30px]"></div>

                        <h1 class="text-gray-100 text-6xl font-bold">Admin Dashboard</h1>
                    </div>
                </div>
                <div class="grid grid-cols-5 gap-4 mb-4 justify-center items-center">
                    <div
                        class="w-56 p-4 shadow-lg rounded-2xl border border-gray-200 bg-white flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 flex items-center justify-center bg-blue-500 rounded-full">
                                <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                     width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                          d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-2xl font-semibold">{{ \App\Models\User::count() }}</p>
                                <p class="text-gray-500">tài khoản</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-56 p-4 shadow-lg rounded-2xl border border-gray-200 bg-white flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 flex items-center justify-center bg-blue-500 rounded-full">
                                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                     width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                          d="M19.003 3A2 2 0 0 1 21 5v2h-2V5.414L17.414 7h-2.828l2-2h-2.172l-2 2H9.586l2-2H9.414l-2 2H3V5a2 2 0 0 1 2-2h14.003ZM3 9v10a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V9H3Zm2-2.414L6.586 5H5v1.586Zm4.553 4.52a1 1 0 0 1 1.047.094l4 3a1 1 0 0 1 0 1.6l-4 3A1 1 0 0 1 9 18v-6a1 1 0 0 1 .553-.894Z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-2xl font-semibold">{{ \App\Models\Movie::count() }}</p>
                                <p class="text-gray-500">phim đang chiếu</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="w-56 p-4 shadow-lg rounded-2xl border border-gray-200 bg-white flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 flex items-center justify-center bg-blue-500 rounded-full">
                                <svg class=" w-6 h-6 text-white"
                                     aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                     fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                          d="M5.535 7.677c.313-.98.687-2.023.926-2.677H17.46c.253.63.646 1.64.977 2.61.166.487.312.953.416 1.347.11.42.148.675.148.779 0 .18-.032.355-.09.515-.06.161-.144.3-.243.412-.1.111-.21.192-.324.245a.809.809 0 0 1-.686 0 1.004 1.004 0 0 1-.324-.245c-.1-.112-.183-.25-.242-.412a1.473 1.473 0 0 1-.091-.515 1 1 0 1 0-2 0 1.4 1.4 0 0 1-.333.927.896.896 0 0 1-.667.323.896.896 0 0 1-.667-.323A1.401 1.401 0 0 1 13 9.736a1 1 0 1 0-2 0 1.4 1.4 0 0 1-.333.927.896.896 0 0 1-.667.323.896.896 0 0 1-.667-.323A1.4 1.4 0 0 1 9 9.74v-.008a1 1 0 0 0-2 .003v.008a1.504 1.504 0 0 1-.18.712 1.22 1.22 0 0 1-.146.209l-.007.007a1.01 1.01 0 0 1-.325.248.82.82 0 0 1-.316.08.973.973 0 0 1-.563-.256 1.224 1.224 0 0 1-.102-.103A1.518 1.518 0 0 1 5 9.724v-.006a2.543 2.543 0 0 1 .029-.207c.024-.132.06-.296.11-.49.098-.385.237-.85.395-1.344ZM4 12.112a3.521 3.521 0 0 1-1-2.376c0-.349.098-.8.202-1.208.112-.441.264-.95.428-1.46.327-1.024.715-2.104.958-2.767A1.985 1.985 0 0 1 6.456 3h11.01c.803 0 1.539.481 1.844 1.243.258.641.67 1.697 1.019 2.72a22.3 22.3 0 0 1 .457 1.487c.114.433.214.903.214 1.286 0 .412-.072.821-.214 1.207A3.288 3.288 0 0 1 20 12.16V19a2 2 0 0 1-2 2h-6a1 1 0 0 1-1-1v-4H8v4a1 1 0 0 1-1 1H6a2 2 0 0 1-2-2v-6.888ZM13 15a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2Z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-2xl font-semibold">{{ \App\Models\Cinema::count() }}</p>
                                <p class="text-gray-500">rạp phim</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="w-56 p-4 shadow-lg rounded-2xl border border-gray-200 bg-white flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 flex items-center justify-center bg-blue-500 rounded-full">
                                <svg class="w-6 h-6 text-white"
                                     aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                     fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M18.045 3.007 12.31 3a1.965 1.965 0 0 0-1.4.585l-7.33 7.394a2 2 0 0 0 0 2.805l6.573 6.631a1.957 1.957 0 0 0 1.4.585 1.965 1.965 0 0 0 1.4-.585l7.409-7.477A2 2 0 0 0 21 11.479v-5.5a2.972 2.972 0 0 0-2.955-2.972Zm-2.452 6.438a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-2xl font-semibold">{{ \App\Models\Showtime::count() }}</p>
                                <p class="text-gray-500">suất chiếu</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="w-56 p-4 shadow-lg rounded-2xl border border-gray-200 bg-white flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 flex items-center justify-center bg-blue-500 rounded-full">
                                <svg class="w-6 h-6 text-white"
                                     aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                     fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                          d="M5.617 2.076a1 1 0 0 1 1.09.217L8 3.586l1.293-1.293a1 1 0 0 1 1.414 0L12 3.586l1.293-1.293a1 1 0 0 1 1.414 0L16 3.586l1.293-1.293A1 1 0 0 1 19 3v18a1 1 0 0 1-1.707.707L16 20.414l-1.293 1.293a1 1 0 0 1-1.414 0L12 20.414l-1.293 1.293a1 1 0 0 1-1.414 0L8 20.414l-1.293 1.293A1 1 0 0 1 5 21V3a1 1 0 0 1 .617-.924ZM9 7a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2H9Zm0 4a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Zm0 4a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-2xl font-semibold">{{ \App\Models\Showtime::count() }}</p>
                                <p class="text-gray-500">doanh thu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach (['admin','success'] as $msg)
        @if(session($msg))
            <x-toast type="{{ $msg }}">
                {{ session($msg) }}
            </x-toast>
        @endif
    @endforeach
@endsection
