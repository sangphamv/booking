<div id="toast-default"
     class="fixed top-30 right-5 z-50 flex items-center w-full max-w-xs p-4 text-gray-900 bg-yellow-100 rounded-lg shadow-lg backdrop-blur-md transition-all duration-500 transform translate-x-20 opacity-0"
     role="alert">
    <div class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-white bg-red-500 rounded-lg shadow-md">
        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15.147 15.085a7.159 7.159 0 0 1-6.189 3.307A6.713 6.713 0 0 1 3.1 15.444c-2.679-4.513.287-8.737.888-9.548A4.373 4.373 0 0 0 5 1.608c1.287.953 6.445 3.218 5.537 10.5 1.5-1.122 2.706-3.01 2.853-6.14 1.433 1.049 3.993 5.395 1.757 9.117Z"/>
        </svg>
    </div>
    <div class="ms-3 text-sm font-semibold">    {{ $slot }}
    </div>
    <button type="button"
            class="ms-auto -mx-1.5 -my-1.5 bg-transparent text-gray-500 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-200 inline-flex items-center justify-center h-8 w-8"
            id="close-toast" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
    </button>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const toast = document.getElementById("toast-default");

        // Hiển thị toast
        setTimeout(() => {
            toast.classList.remove("translate-x-20", "opacity-0");
            toast.classList.add("translate-x-0", "opacity-100");
        }, 100);

        // Tự động ẩn toast sau 3 giây
        setTimeout(() => {
            toast.classList.remove("translate-x-0", "opacity-100");
            toast.classList.add("translate-x-20", "opacity-0");
        }, 3000);

        // Nút đóng toast
        document.getElementById("close-toast").addEventListener("click", function () {
            toast.classList.remove("translate-x-0", "opacity-100");
            toast.classList.add("translate-x-20", "opacity-0");
        });
    });
</script>
