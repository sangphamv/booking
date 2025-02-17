<a href="{{ route('welcome') }}"  {{ $attributes->merge(['class' => 'flex items-center space-x-3 rtl:space-x-reverse']) }}>
    <img src="https://laravel.com/img/logomark.min.svg" alt="Logo">
    <span class="self-center text-2xl font-semibold whitespace-nowrap bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 bg-clip-text text-transparent">{{ $slot }}</span>
</a>

