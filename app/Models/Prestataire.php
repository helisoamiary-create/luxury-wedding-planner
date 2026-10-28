<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestataire extends Model
{
    protected $fillable = [
        'nom',
        'type',
        'telephone',
        'email',
        'prix',
        'disponible'
    ];

    public function mariages()
    {
        return $this->belongsToMany(Mariage::class);
    }
}