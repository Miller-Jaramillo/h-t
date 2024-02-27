<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotelfile extends Model
{
    use HasFactory;

    protected $table = 'hotelfiles';

    protected $fillable = [
        'about_id',
        'file_path',
        'file_type',
    ];

    public function about()
    {
        return $this->belongsTo(About::class);
    }
}
