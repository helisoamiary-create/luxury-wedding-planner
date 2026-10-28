<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    protected $fillable = [
        'mariage_id',
        'nom',
        'email',
        'telephone',
        'presence',
        'table_id'
    ];

    public function mariage()
    {
        return $this->belongsTo(Mariage::class);
    }

    public function tables()
    {
        return $this->hasMany(TableReception::class);
    }
}
