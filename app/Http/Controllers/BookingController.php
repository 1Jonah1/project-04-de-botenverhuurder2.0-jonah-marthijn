<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Booking;
    use App\Models\Boat;

    class BookingController extends Controller
    {
        public function index()
        {
                $bookings = Booking::all(); // Gebruik Booking::all() om alle boekingen op te halen
                return view('bookingen', ['bookingen' => $bookings]); // Stuur de gegevens naar de view
        }

        public function huur($boat)
        {
            return view('huur', ['boat' => $boat]); // Laat de view zien
        }

        public function store(Request $request)
        {


            $booking = new Booking();
            $booking->userid = auth()->user()->id;
            $booking->boatid = $request->input('boatid');
            $booking->startdatum = $request->input('start_date');
            $booking->einddatum = $request->input('end_date');
            // Andere velden toewijzen indien nodig
            $booking->save();

            return redirect()->back()->with('success', 'Datums zijn succesvol opgeslagen.');


        }



    }
