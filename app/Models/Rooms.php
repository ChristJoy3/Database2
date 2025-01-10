<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;

    protected $table = 'rooms';
    protected $primaryKey = 'room_id';

    protected $fillable = [
        'room_name',
        'description',
        'capacity',
    ];

    // Define relationships if needed
    public function bookings()
    {
        return $this->hasMany(Bookings::class, 'room_id', 'room_id');
    }
}

