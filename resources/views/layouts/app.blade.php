<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'ChatApp') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { background-color: #1e3a8a; color: white; }
        nav { background-color: #1e40af; }
        a { color: #93c5fd; }
        .container { max-width: 1200px; margin: 0 auto; padding: 20px; }
    </style>
</head>
<body>
    @auth
        <nav class="p-4">
            <a href="{{ route('servers') }}" class="px-4">Servers</a>
            <a href="{{ route('catalog') }}" class="px-4">Catalog</a>
            <a href="{{ route('account') }}" class="px-4">Account</a>
            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="px-4 text-red-300">Logout</button>
            </form>
        </nav>
    @endauth
    <div class="container">
        @yield('content')
    </div>
</body>
</html>