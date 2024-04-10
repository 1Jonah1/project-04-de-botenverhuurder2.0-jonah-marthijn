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
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
            @endif
            <style>
        .banner {
            background-image: url('../views/images/banner.jpeg');
            background-color: red;
            background-size: cover;
            background-position: center;
            height: 600px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            flex-direction: column;
        }

        .banner-content {
            text-align: center;
            font-size: 46px;
        }
        .filter{
            color: black;

        }
        .filter button{
            background-color: blue;
        }
        .container {
            padding-left: 120px;
        }
        .boats {
            margin-top: 20px;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }
        
        .link {
            display: block;
            width: 100px;
            text-align: center;
            margin-top: 10px;
            background-color: blue;
            color: white;
        }
        
    </style>
    <div class="banner">
        <div class="banner-content">
            <h1 class="text-5xl font-bold text-black">botenverhuur</h1>
            <p class="text-black">Huur hier de beste boten</p>
        </div>
    </div>
    <div class="container mx-auto">
        <div class="boats grid grid-cols-3 gap-4">
        @php $counter = 0 @endphp

        @foreach($boats as $boat)
            @if($counter < 6)
                <div class="bg-white p-4 shadow-lg" style="width: 414px;">
                    <img src="{{ $boat->image }}" alt="{{ $boat->name }}" class="w-full h-64 object-cover">
                    <h2 class="text-xl font-bold">{{ $boat->name }}</h2>
                    <p>{{ $boat->description }}</p>
                    <p>€{{ $boat->price }}</p>
                    <a :href="route('detailpage')" class=" link bg-blue-500 text-black p-2 rounded-lg">Bekijk boot</a>
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