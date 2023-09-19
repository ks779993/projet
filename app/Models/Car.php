<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'compagny_id',
        'image',
        'trajet',
        'periode',
        'place_dispo',
        'prix',
        'horaire_id',
    ];
    public function compagny()
    {
        return $this->belongsTo(Company::class);
    }
}
