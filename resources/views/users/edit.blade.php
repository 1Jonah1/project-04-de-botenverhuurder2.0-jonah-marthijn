



<h1>Bewerk gebruiker</h1>

<form action="{{ route('users.update', $user) }}" method="POST">
    @csrf
    @method('PUT')

    <!-- Voeg hier de inputvelden toe om gebruikersgegevens te bewerken -->

    <button type="submit">Opslaan</button>
</form>
