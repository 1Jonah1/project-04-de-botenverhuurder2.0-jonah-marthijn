<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boat;

class DetailPageController extends Controller
{
    public function show(Request $request)
    {
        $boatId = $request->input('boat_id');

        $boat = Boat::find($boatId);

        return view('detailpage', ['boat' => $boat]);
    }
}
