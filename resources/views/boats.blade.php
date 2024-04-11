<x-app-layout>
    <div class="banner">
        <div class="banner-content">
            <h1 class="text-5xl font-bold text-white">botenverhuur</h1>
            <p class="text-white">Huur hier de beste boten</p>
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
                            <a href="route('detailpage')" class="p-2 text-black bg-blue-500 rounded-lg link">Bekijk boot</a>
                            <!-- Overige velden van de boot -->
                        </div>
                @endforeach
            @else
                <div class="p-4 bg-white rounded-lg shadow-md">
                    <h2 class="mb-2 text-xl font-semibold">Geen boten gevonden</h2>
                </div>
            @endif
        </div>
    </div>
    <br>
</x-app-layout>
