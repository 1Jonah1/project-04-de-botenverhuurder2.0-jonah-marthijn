<x-app-layout>
    <div>
        <div class="banner">
            <div class="banner-content">
                <h1 class="text-5xl font-bold text-white">Accounts</h1>
                <p class="text-white">Zie hier alle Accounts</p>
            </div>
        </div>
        <div class="table-container">
            <main class="py-6">
                <div class="grid grid-cols-1 gap-4 mx-auto max-w-7xl sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                    @if (isset($users))
                        @foreach ($users as $user)
                            <div class="p-4 bg-white rounded-lg shadow-md ">
                                <h2 class="mb-2 text-xl font-semibold">{{ $user->name }}</h2>
                                <p class="text-gray-600">Email: {{ $user->email }}</p>
                                <p class="text-gray-600">Role: {{ $user->role }}</p>
                                <a :href="route('detailpage')" class="p-2 text-black bg-blue-500 rounded-lg link">Bekijk boot</a>
                            </div>
                        @endforeach
                    @else
                        <div class="p-4 bg-white rounded-lg shadow-md">
                            <h2 class="mb-2 text-xl font-semibold">Geen Gebruikers gevonden</h2>
                        </div>
                    @endif

                </div>
            </main>


        </div>
    </div>
</x-app-layout>
