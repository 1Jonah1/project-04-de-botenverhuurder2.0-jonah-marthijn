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
    public function ownboats()
    {
        $boats = Boat::all();
        return view('owned', ['boats' => $boats]);

    }

    public function showBoats()
    {
        $boats = Boat::all();
        return view('boats', ['boats' => $boats]);
    }
    public function show($id)
    {
        $boat = Boat::findOrFail($id);
        return view('detailpage', compact('boat'));
    }

}
