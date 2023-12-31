<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venues extends Model
{
    use HasFactory;

    protected $fillable = [
        'VenueName', 'Location', 'Capacity', 'ContactPerson', 'OpeningDate'
    ];

    public function performances()
    {
        return $this->hasMany(Performance::class, 'venues_id');
    }
}
