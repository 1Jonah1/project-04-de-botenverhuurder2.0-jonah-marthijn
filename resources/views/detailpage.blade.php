<x-app-layout>

<div class="container mx-auto py-8">
        <div class="flex flex-wrap items-center">
            <div class="w-full lg:w-2/3 pr-8">
                <img src="{{ asset('images/' . $boat->photo) }}" alt="{{ $boat->name }}" class="object-cover w-full h-auto rounded-lg shadow-md">
            </div>
            <div class="w-full lg:w-1/3 pl-8">
                <h2 class="text-2xl font-semibold mb-4">{{ $boat->name }}</h2>
                <p class="text-gray-700 mb-4">{{ $boat->description }}</p>
                <p class="text-gray-900 font-bold mb-4">Prijs per maand: €{{ $boat->price_per_month }}</p>
                <br><br><br><br><br><br><br><br><br><br><br>
                <a href="{{ route('huur', ['boat' => $boat->id]) }}" style="display: inline-block; background-color: red; color: white; border-radius: 10px; padding: 10px 20px; text-decoration: none;">Reserveren</a>
            </div>
        </div>
    </div>
</x-app-layout>
