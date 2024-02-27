<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicefile extends Model
{
    use HasFactory;

    protected $table = 'servicefiles';

    protected $fillable = [
        'service_id',
        'file_path',
        'file_type',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
