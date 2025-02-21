<aside
    id="sidebar"
    class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 w-64 h-full pt-25 font-normal duration-75 lg:flex transition-width border-t border-gray-200"
>
    <div
        class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200  "
    >
        <div
            class="flex flex-col flex-1 pt-0 overflow-y-auto scrollbar scrollbar-w-2 scrollbar-thumb-rounded-[0.1667rem] scrollbar-thumb-slate-200 scrollbar-track-gray-400  "
        >
            <div
                class="flex-1 px-3 space-y-1 bg-white divide-y divide-gray-200  "
            >
                <ul class="pt-4 space-y-2">
                    <li>
                        <a
                            href="{{ route('user.dashboard') }}"
                            class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group"
                        >
                            <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900"
                                 aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.5 2c-.178 0-.356.013-.492.022l-.074.005a1 1 0 0 0-.934.998V11a1 1 0 0 0 1 1h7.975a1 1 0 0 0 .998-.934l.005-.074A7.04 7.04 0 0 0 22 10.5 8.5 8.5 0 0 0 13.5 2Z"/>
                                <path
                                    d="M11 6.025a1 1 0 0 0-1.065-.998 8.5 8.5 0 1 0 9.038 9.039A1 1 0 0 0 17.975 13H11V6.025Z"/>
                            </svg>
                            <span class="ml-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="{{ route('user.show' , ['id' => Auth::user()->id]) }}"
                            class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group"
                        >
                            <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900"
                                 aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.5 2c-.178 0-.356.013-.492.022l-.074.005a1 1 0 0 0-.934.998V11a1 1 0 0 0 1 1h7.975a1 1 0 0 0 .998-.934l.005-.074A7.04 7.04 0 0 0 22 10.5 8.5 8.5 0 0 0 13.5 2Z"/>
                                <path
                                    d="M11 6.025a1 1 0 0 0-1.065-.998 8.5 8.5 0 1 0 9.038 9.039A1 1 0 0 0 17.975 13H11V6.025Z"/>
                            </svg>
                            <span class="ml-3">Tài khoản</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>

<div
    class="fixed inset-0 z-10 hidden bg-gray-900/50 /90"
    id="sidebarBackdrop"
>
</div>

