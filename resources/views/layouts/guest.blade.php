<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'The Future - All in One Application') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="font-inter relative">
    <div class="w-full py-1 px-4 bg-primary">
        <div class="flex items-center sm:flex-nowrap flex-wrap ds:justify-start sm:justify-center gap-3">
            <button class="ds:hidden bs:flex items-center justify-center bs:text-sm bg-gray-500/20 py-1 rounded-md px-3 text-white">New</button>
            <p class="bs:text-sm text-xs font-inter text-white">🌟️ Get unlimited access to updates  from us weekly </p>
            <a href="{{ route('register') }}" class="text-white text-xs bs:text-sm font-medium hover:underline underline-offset-4">Register now</a>
        </div>
    </div>
    <x-navbar />

    <main>
        @yield('content')
    </main>
    <!-- <x-lucide-menu class="w-8 text-primary"/> -->
    <x-footer />

</body>
</html>
