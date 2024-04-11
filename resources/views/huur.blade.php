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
                <label for="name">Naam:</label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" id="name" name="name" required style="width: 20%;"><br><br>

                <label for="email">Email adres:</label>
                <input type="email" id="email" name="email" required style="width: 20%;"><br><br>

                <label for="start_date">Startdatum:</label>
                <input type="date" id="start_date" name="start_date" required style="width: 20%;"><br><br>

                <label for="end_date">Einddatum:</label>
                <input type="date" id="end_date" name="end_date" required style="width: 20%;"><br><br>

                <button type="submit" style="display: inline-block; background-color: #facc15; color: white; border-radius: 10px; padding: 10px 20px; text-decoration: none;">Verzend</button>
            </div>  
        </form>
    </center>
</x-app-layout>
