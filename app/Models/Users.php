<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'phone_number',
        'address',
        'date_of_birth',
    ];

    // Define relationships if needed
    public function bookings()
    {
        return $this->hasMany(Bookings::class, 'user_id', 'user_id');
    }
}

