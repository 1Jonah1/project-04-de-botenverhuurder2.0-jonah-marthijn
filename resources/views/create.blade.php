<x-app-layout>
    <h1>Boot toevoegen</h1>

    <form action="{{ route('boats.save') }}" method="post">
        @csrf
        <div>
            <label for="name">Naam</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="description">Beschrijving</label>
            <textarea name="description" id="description" required></textarea>
        </div>
        <div>
            <label for="price_per_month">Prijs</label>
            <input type="price_per_month" name="price_per_month" id="price_per_month" required>
        </div>
        <div>
            <label for="photo">Foto</label>
            <input type="file" name="photo" id="photo" accept="image/*" required>
        </div>
        <div>
            <button type="submit">save</button>
        </div>



</x-app-layout>