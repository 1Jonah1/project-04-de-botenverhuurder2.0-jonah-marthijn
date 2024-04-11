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

    public function create()
    {
        return view('create');
    }

    public function save(Request $request)
    {
        $boat = new Boat();
        $boat->userid = auth()->user()->id;
        $boat->name = $request->input('name');
        $boat->description = $request->input('description');
        $boat->photo = $request->input('photo');
        $boat->price_per_month = $request->input('price_per_month');
        $boat->save();

        return redirect()->back()->with('success', 'Boot is succesvol toegevoegd.');
    }

}
