<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Boat;
use Illuminate\Http\Request;
use App\Http\Requests\UserUpdateRequest;



class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users', ['users' => $users]);
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }
    public function update(Request $request, User $user)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'role' => 'required|in:user,admin',
    ]);
    $user->update([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'role' => $validatedData['role'],
    ]);

    return redirect()->route('users.index')->with('success', 'Gebruiker bijgewerkt!');
}

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Gebruiker verwijderd!');
    }
    public function boats(User $user)
    {
        $boats = Boat::where('user_id', $user->id)->get();
        return view('users.boats', ['boats' => $boats, 'user' => $user]);
    }


}
