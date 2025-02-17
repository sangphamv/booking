<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Movie Tickets Booking')</title>
    @vite('resources/css/app.css')
</head>
<body>
<div>
    @include('partials.header')
    @include('partials.sidebar')
    <main class="pt-24">
        <div class="flex pt-0 overflow-hidden bg-gray-50">
            <div
                id="main-content"
                class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 min-h-screen"
            >
                @yield('content')
            </div>
        </div>
    </main>
</div>
</body>
</html>
