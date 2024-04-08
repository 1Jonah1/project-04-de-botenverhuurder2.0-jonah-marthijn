<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boat;

class BoatController extends Controller
{
    public function index()
    {
        $boats = Boat::all();
        return view('home', ['boats' => $boats]);
    }
}
