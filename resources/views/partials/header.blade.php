<nav
    class="bg-white/80 backdrop-blur-[15px] backdrop-saturate-[150%] fixed w-full z-40 top-0 start-0 border-b border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-6">
        <x-logo>
            SHOKARTH
        </x-logo>
        <div class="flex gap-2 md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            @if (Route::has('login'))
                <div class="text-right z-10">
                    @auth
                        {{--                        <a href="{{ route('welcome') }}" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Dashboard</a>--}}
                        @if(Auth::check())
                            @if(Auth::user()->role === 'admin')
                                <a href="{{ route('admin.dashboard') }}"
                                   class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 mr-2">
                                    {{ Auth::user()->name }}
                                </a>
                            @else
                                <a href="{{ route('user.dashboard') }}"
                                   class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 mr-2">
                                    {{ Auth::user()->name }}
                                </a>
                            @endif
                        @endif
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit"
                                    class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 mr-2">
                                Đăng xuất
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}"
                           class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">Đăng
                            nhập</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                               class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Đăng
                                ký</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 ">
                <li>
                    <a href="{{ route('movie.index') }}"
                       class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">
                        Phim đang chiếu
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">
                        Về chúng tôi
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">
                        Hỗ trợ khách hàng
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

