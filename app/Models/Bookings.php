<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;

    protected $table = 'bookings';
    protected $primaryKey = 'booking_id';

    protected $fillable = [
        'user_id',
        'room_id',
        'booking_date',
        'check_in',
        'check_out',
        'status',
    ];

    // Define relationships
    public function user()
    {
        return $this->belongsTo(Users::class, 'user_id', 'user_id');
    }

    public function room()
    {
        return $this->belongsTo(Rooms::class, 'room_id', 'room_id');
    }

    public function payments()
    {
        return $this->hasMany(Payments::class, 'booking_id', 'booking_id');
    }
}
