<x-app-layout>
    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf

        <label for="start_date">Startdatum:</label>
        <input type="date" id="start_date" name="start_date" required>

        <label for="end_date">Einddatum:</label>
        <input type="date" id="end_date" name="end_date" required>

        <button type="submit">Verzend</button>
    </form>



</x-app-layout>
