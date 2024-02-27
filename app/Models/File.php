<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = ['id_room', 'ruta'];


    public function room()
    {
        return $this->belongsTo(Room::class, 'id_room');
    }
}
