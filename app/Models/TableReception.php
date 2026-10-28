<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TableReception extends Model
{
    protected $table = 'table_receptions';

    protected $fillable = [
        'mariage_id',
        'nom_table',
        'capacite'
    ];

    public function mariage()
    {
        return $this->belongsTo(Mariage::class);
    }

    public function invites()
    {
        return $this->hasMany(Invite::class, 'table_id');
    }
}