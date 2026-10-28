<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invite;
use App\Models\Mariage;

class InviteController extends Controller
{
    public function index()
    {
        $invites = Invite::with('mariage')->latest()->get();

        return view('invites.index', compact('invites'));
    }

    public function create()
    {
        $mariages = Mariage::all();

        return view('invites.create', compact('mariages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'mariage_id' => 'required',
            'nom' => 'required|max:255',
            'email' => 'nullable|email',
            'telephone' => 'nullable'
        ]);

        Invite::create($request->only([
            'mariage_id',
            'nom',
            'email',
            'telephone',
            'presence',
            'table_id'
        ]));

        return redirect('/invites')->with('success','Invité ajouté');
    }
}