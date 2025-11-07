<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Fumetti')</title>
    @vite('resources/js/app.js')
</head>
<body>
    @include('partials.header')

    <main class="container py-4">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
