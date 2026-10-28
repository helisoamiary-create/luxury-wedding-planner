<?php

namespace App\Http\Controllers;

use App\Models\Prestataire;
use Illuminate\Http\Request;

class PrestataireController extends Controller
{
    public function index()
    {
        $prestataires = Prestataire::latest()->get();

        return view('prestataires.index', compact('prestataires'));
    }

    public function create()
    {
        return view('prestataires.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'type' => 'required',
            'telephone' => 'required',
            'email' => 'nullable|email',
            'prix' => 'required|numeric'
        ]);

        Prestataire::create($request->all());

        return redirect('/prestataires');
    }

    public function edit(Prestataire $prestataire)
    {
        return view('prestataires.edit', compact('prestataire'));
    }

    public function update(Request $request, Prestataire $prestataire)
    {
        $request->validate([
            'nom' => 'required',
            'type' => 'required',
            'telephone' => 'required',
            'email' => 'nullable|email',
            'prix' => 'required|numeric'
        ]);

        $prestataire->update($request->all());

        return redirect('/prestataires');
    }

    public function destroy(Prestataire $prestataire)
    {
        $prestataire->delete();

        return redirect('/prestataires');
    }
}