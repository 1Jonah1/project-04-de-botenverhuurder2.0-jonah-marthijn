<x-app-layout>
    <center>
        <br>
        <br>
        <br>
        <form action="{{ route('bookings.store') }}" method="POST">
            @csrf
            <div class="info">
                <b>Vul hier uw gegevens in om de boot te huren!</b>
                <br>
                <br>
                <input type="hidden" name="boatid" value="{{ $boat }}">

                <label for="start_date">Startdatum:</label>
                <input type="date" id="start_date" name="start_date" required style="width: 20%;"><br><br>

                <label for="end_date">Einddatum:</label>
                <input type="date" id="end_date" name="end_date" required style="width: 20%;"><br><br>

                <button type="submit" style="display: inline-block; background-color: #facc15; color: white; border-radius: 10px; padding: 10px 20px; text-decoration: none;">Verzend</button>
            </div>
        </form>
    </center>
</x-app-layout>
