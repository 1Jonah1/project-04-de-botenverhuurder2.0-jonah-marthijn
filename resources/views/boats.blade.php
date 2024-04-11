<x-app-layout>
    <div class="banner">
        <div class="banner-content">
            <h1 class="text-5xl font-bold text-white">botenverhuur</h1>
            <p class="text-white">Huur hier de beste boten</p>
        </div>
    </div>
    <div>
        <main class="py-6">
            <div class="grid grid-cols-1 gap-4 mx-auto max-w-7xl sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                @if (isset($boats))
                    @foreach ($boats as $boat)
                        <div class="p-4 bg-white rounded-lg shadow-md">
                            <h2 class="mb-2 text-xl font-semibold">{{ $boat->name }}</h2>
                            <p class="text-gray-600">Price: ${{ $boat->price_per_month }}</p>
                            <p class="text-gray-600">Description: {{ $boat->description }}</p>
                        </div>
                    @endforeach
                @else
                    <div class="p-4 bg-white rounded-lg shadow-md">
                        <h2 class="mb-2 text-xl font-semibold">Geen boten gevonden</h2>
                    </div>
                @endif
            </div>
        </main>
    </div>
</x-app-layout>
