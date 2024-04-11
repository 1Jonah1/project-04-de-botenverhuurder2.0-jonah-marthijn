<x-app-layout>

    <div class="p-4 bg-white shadow-lg" style="width: 414px;">
        <h2 class="text-xl font-bold">{{ $boat->name }}</h2>
        <p>{{ $booking->boatid }}</p>
        <p>€{{ $booking-> }}</p>
        <a href="route('detailpage')" class="p-2 text-black bg-blue-500 rounded-lg link">Bekijk boot</a>
        <!-- Overige velden van de boot -->
    </div>






</x-app-layout>
