<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'identification', 'email', 'phone', 'no_reservations'];

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'id_guest');
    }
}
