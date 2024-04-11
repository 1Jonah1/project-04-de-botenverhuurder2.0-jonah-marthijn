    <x-app-layout>
    <!DOCTYPE html>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


        <div class="banner">
            <div class="banner-content">
                <img src="images/rename.png" alt="logo">
                <h1 class="text-5xl font-bold text-white">Botenverhuur</h1>
                <p class="text-white">Huur hier de beste boten!</p>
            </div>
        </div>
        </div>

        <div class="container mx-auto">
        <div class="grid grid-cols-3 gap-4 boats">
            @if (isset($boats))
                @foreach($boats as $boat)
                        <div class="p-4 bg-white shadow-lg" style="width: 414px;">
                            <img src="{{ asset('images/' . $boat->photo) }}" alt="{{ $boat->name }}" class="object-cover w-full h-64">
                            <h2 class="text-xl font-bold">{{ $boat->name }}</h2>
                            <p>{{ $boat->description }}</p>
                            <p>€{{ $boat->price_per_month }}</p>
                            <a href="{{ route('boat.show', ['id' => $boat->id]) }}" class="p-2 text-black bg-blue-500 rounded-lg link" style="cursor: pointer;">Bekijk boot</a>

                            
                        </div>
                @endforeach
            @else
                <div class="p-4 bg-white rounded-lg shadow-md">
                    <h2 class="mb-2 text-xl font-semibold">Geen boten gevonden</h2>
                </div>
            @endif
        </div>
        <br>
        
    </body>
    </html>
    </x-app-layout>
