<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Haal bijvoorbeeld alle gebruikers op
        return view('users', ['users' => $users]);
    }

}
