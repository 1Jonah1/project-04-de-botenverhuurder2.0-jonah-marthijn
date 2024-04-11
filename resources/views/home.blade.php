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

    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
            <header class="bg-white shadow">
                <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
            @endif
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
                        <img src="{{ $boat->image }}" alt="{{ $boat->name }}" class="object-cover w-full h-64">
                        <h2 class="text-xl font-bold">{{ $boat->name }}</h2>
                        <p>{{ $boat->description }}</p>
                        <p>€{{ $boat->price }}</p>
                        <a :href="route('detailpage')" class="p-2 text-black bg-blue-500 rounded-lg link">Bekijk boot</a>
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
