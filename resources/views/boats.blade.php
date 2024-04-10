<div>
    <main class="py-6">
        <div class="max-w-7xl mx-auto grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
            @foreach ($boats as $boat)
            <div class="bg-white shadow-md rounded-lg p-4">
                <h2 class="text-xl font-semibold mb-2">{{ $boat->name }}</h2>
                <p class="text-gray-600">Price: ${{ $boat->price_per_month }}</p>
                <p class="text-gray-600">Description: {{ $boat->description }}</p>
            </div>
            @endforeach
        </div>
    </main>
</div>
