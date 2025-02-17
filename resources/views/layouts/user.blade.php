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
        @yield('content')
    </main>
</div>
</body>
</html>
