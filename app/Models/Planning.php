<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planning extends Model
{
    protected $fillable = [
        'mariage_id',
        'heure',
        'evenement'
    ];

    public function mariage()
    {
        return $this->belongsTo(Mariage::class);
    }

    public function show(Mariage $mariage)
    {
        $invites = $mariage->invites;

        $plannings = Planning::where('mariage_id', $mariage->id)
            ->orderBy('heure')
            ->get();

        $total = $invites->count();
        $confirmes = $invites->where('presence','confirme')->count();
        $attente = $invites->where('presence','en_attente')->count();
        $refuses = $invites->where('presence','refuse')->count();

        return view('mariages.show', compact(
            'mariage',
            'invites',
            'plannings',
            'total',
            'confirmes',
            'attente',
            'refuses'
        ));
    }
}
