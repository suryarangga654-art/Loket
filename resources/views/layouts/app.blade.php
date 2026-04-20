<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>LOKET Clone - Belanja Tiket Event</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
   <body class="font-sans antialiased text-gray-900">
    <div class="min-h-screen bg-gray-100 flex flex-col">
        
        {{-- CEK NAVBAR --}}
        @if(!Route::is('tiket.*') && !Route::is('event-saya.*') && !Route::is('kelola-akses.*') && !Route::is('informasi.*') && !Route::is('pengaturan.*') && !Route::is('informasi-legal.*') && !Route::is('rekening.*') && !Route::is('promo.*') && !Route::is('loketplus.*') && 
        !Route::is('loketscreen.*') && !Route::is('loketpromo.*') && !Route::is('blog.*') && !Route::is('biaya.*') && !Route::is('loketx.*') &&  !Route::is('loketedu.*') && !Route::is('loketnews.*') && !Route::is('loketwiki.*') && !Route::is('loketevent.*') &&!Route::is('dashboard'))

            <x-navbar />
        @endif {{-- <--- PASTIKAN ADA INI --}}

        <main class="flex-grow">
            {{ $slot }}
        </main>

        {{-- CEK FOOTER --}}
        @if(!Route::is('tiket.*') && !Route::is('event-saya.*') && !Route::is('kelola-akses.*') && !Route::is('informasi.*') && !Route::is('pengaturan.*') && !Route::is('informasi-legal.*') && !Route::is('rekening.*') && !Route::is('promo.*') && !Route::is('loketplus.*') && 
        !Route::is('loketscreen.*') && !Route::is('loketpromo.*') && !Route::is('blog.*') && !Route::is('biaya.*') && !Route::is('loketx.*') &&  !Route::is('loketedu.*') && !Route::is('loketnews.*') && !Route::is('loketwiki.*') && !Route::is('loketevent.*') &&!Route::is('dashboard'))
            <x-footer />
        @endif {{-- <--- PASTIKAN ADA INI JUGA --}}
        
    </div>
</body>
</html>