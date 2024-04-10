<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boat extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'discription',
        'userid',
        'price_per_month',
        'photo'
    ];
    public function showBoats()
    {
        $boats = Boat::all(); // Fetch all boats from the database
        return view('boats', compact('boats'));
    }
}

