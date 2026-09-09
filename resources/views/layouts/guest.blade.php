<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SGE - Sistema de Gestión Empresarial</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">

    <div class="min-h-screen flex items-center justify-center bg-gray-100">

        <div class="w-full max-w-sm px-4">

            <div class="bg-white rounded-xl shadow-lg border border-gray-200 px-7 py-8">

                {{ $slot }}

            </div>

        </div>

    </div>

</body>

</html>