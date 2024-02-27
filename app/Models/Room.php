<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'no_guest', 'no_room', 'nigth_guest'];

    public function reservas()
    {
        return $this->hasMany(Reservation::class, 'id_guest');
    }

    public function files()
    {
        return $this->hasMany(File::class, 'id_room');
    }
}
