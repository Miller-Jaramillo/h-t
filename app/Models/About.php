<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'extension',
        'whatsapp',
        'facebook',
        'instagram',
        'tiktok',
        'description',
        'photo_profile',
        'cover_photo',
        'slogan',
        'final_slogan',
        'status',
        'address',
        'department',
        'city',
    ];

    public function hotelFiles()
    {
        return $this->hasMany(HotelFile::class);
    }
}
