<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mariage extends Model
{
    protected $fillable = [
        'client_id',
        'nom_marie',
        'nom_mariee',
        'date_mariage',
        'lieu',
        'nombre_invites',
        'budget',
        'status',
        'description'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function invites()
    {
        return $this->hasMany(Invite::class);
    }

    public function prestataires()
    {
        return $this->belongsToMany(Prestataire::class);
    }

    public function tables()
    {
        return $this->hasMany(TableReception::class);
    }

    public function plannings()
    {
        return $this->hasMany(Planning::class);
    }
}