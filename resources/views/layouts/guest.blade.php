<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'The Future - All in One Application') }}</title>

 

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/boxicons.min.css', 'resources/css/boxicon.css'])
    @endif
</head>
<body class="font-inter relative">


    <main>
        @yield('content')
    </main>
    <!-- <x-lucide-menu class="w-8 text-primary"/> -->


</body>
</html>
