<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $fillable = [
        'user_id',
        'boatid',
        'name',
        'email',
        'start_date',
        'end_date',
        'status',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function boat()
    {
        return $this->belongsTo(Boat::class);
    }
    protected $table = 'bookingen';
}
