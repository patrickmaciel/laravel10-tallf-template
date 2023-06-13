<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    @livewireStyles
    @stack('styles')

    <title>
        360wu.ie - @yield('title')
    </title>
</head>
<body class='bg-gray-100 antialiased'>
    @yield('content')
    {{ $slot }}

    @stack('javascript')
    @livewireScripts
</body>
</html>
