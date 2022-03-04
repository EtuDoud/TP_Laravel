<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;

    protected $fillable = [
        'marque',
        'PrixParJour',
        'image',
    ];

    // public function location()
    // {
    //     return $this->belongsTo(Location::class);
    // }
}