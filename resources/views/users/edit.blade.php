<x-app-layout>
    <div class="container mx-auto mt-8">
        <h1 class="mb-4 text-2xl font-bold">Gebruiker bewerken</h1>
        <form method="post" action="{{ route('users.update', $user) }}" class="max-w-md">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block font-medium text-gray-700">Naam</label>
                <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" class="block w-full mt-1 form-input" required autofocus>
            </div>

            <div class="mb-4">
                <label for="email" class="block font-medium text-gray-700">E-mail</label>
                <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" class="block w-full mt-1 form-input" required>
            </div>

            <div class="mb-4">
                <label for="role" class="block font-medium text-gray-700">Rol</label>
                <select name="role" id="role" class="block w-full mt-1 form-select">
                    <option value="user" {{ $user->role === 'user' ? 'selected' : 'user' }}>user</option>
                    <option value="admin" {{ $user->role === 'admin' ? 'selected' : 'admin' }}>admin</option>
                </select>
            </div>

            <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">Opslaan</button>
        </form>

        <!-- Formulier voor het verwijderen van het account -->
        <form method="post" action="{{ route('users.destroy', $user) }}" class="mt-4">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Weet je zeker dat je dit account wilt verwijderen?')" class="px-4 py-2 text-white bg-red-500 rounded hover:bg-red-600">Verwijder account</button>
        </form>
    </div>
</x-app-layout>


