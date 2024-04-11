<x-app-layout>
<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        </head>
    <div class="banner">
        <div class="banner-content">
            <img src="images/rename.png" alt="logo">
            <h1 class="text-5xl font-bold text-white">botenverhuur</h1>
            <p class="text-white">Huur hier de beste boten</p>
        </div>
    </div>
    <div class="container mx-auto">
<div class="grid grid-cols-3 gap-4 boats">
            @php $counter = 0 @endphp

            @foreach($boats as $boat)
            @if($counter < 6)
            <div class="p-4 bg-white shadow-lg" style="width: 414px;">
                <img src="{{ asset('images/' . $boat->photo) }}" alt="{{ $boat->name }}" class="object-cover w-full h-64">
                <h2 class="text-xl font-bold">{{ $boat->name }}</h2>
                <p>{{ $boat->description }}</p>
                <p>€{{ $boat->price }}</p>
                <a href="route('detailpage')" class="p-2 text-black bg-blue-500 rounded-lg link">Bekijk boot</a>
                <!-- Overige velden van de boot -->
            </div>
        @php $counter++ @endphp
        @else
        @break
        @endif
        @endforeach
    </div>
    </div>
</body>
</html>
</x-app-layout>
