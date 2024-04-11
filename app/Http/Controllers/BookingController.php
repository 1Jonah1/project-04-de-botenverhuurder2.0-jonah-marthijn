<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
            $bookings = Booking::all(); // Gebruik Booking::all() om alle boekingen op te halen
            return view('bookingen', ['bookingen' => $bookings]); // Stuur de gegevens naar de view
    }

    public function huur()
    {
        return view('huur'); // Laat de view zien
    }

    public function store(Request $request)
    {
        $booking = new Booking();
        $booking->startdatum = $request->input('start_date');
        $booking->einddatum = $request->input('end_date');
        // Andere velden toewijzen indien nodig
        $booking->save();

        return redirect()->back()->with('success', 'Datums zijn succesvol opgeslagen.');
    }



}
