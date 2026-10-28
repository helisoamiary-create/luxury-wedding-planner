<?php

namespace App\Http\Controllers;

use App\Models\Mariage;
use App\Models\Client;
use App\Models\Invite;
use App\Models\Prestataire;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MariageController extends Controller
{
    public function index()
    {
        $mariages = Mariage::with('client')->latest()->get();
        $mariages = Mariage::with('prestataires')->get();

        return view('mariages.index', compact('mariages'));
    }

    public function create()
    {
        $clients = Client::all();

        return view('mariages.create', compact('clients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_id' => 'required',
            'nom_marie' => 'required',
            'nom_mariee' => 'required',
            'date_mariage' => [
                'required',
                'date',
                'after:' . Carbon::now()->addMonth()->toDateString()
            ],
            'lieu' => 'required',
            'budget' => 'required|numeric'
        ],[
            'date_mariage.after' => 'La date du mariage doit être au moins dans un mois pour permettre l’organisation.'
        ]);

        Mariage::create($request->all());

        return redirect('/mariages');
    }

    public function show(Mariage $mariage)
    {
        $invites = Invite::where('mariage_id',$mariage->id)->get();

        $total = $invites->count();
        $confirmes = $invites->where('presence','confirme')->count();
        $attente = $invites->where('presence','en_attente')->count();
        $refuses = $invites->where('presence','refuse')->count();

        return view('mariages.show', compact(
            'mariage',
            'invites',
            'total',
            'confirmes',
            'attente',
            'refuses'
        ));
    }

    public function edit(Mariage $mariage)
    {
        $clients = Client::all();
        $prestataires = Prestataire::where('disponible', 1)->get();

        return view('mariages.edit', compact('mariage','clients', 'prestataires'));
    }

    public function update(Request $request, Mariage $mariage)
    {
        $request->validate([
            'client_id' => 'required',
            'nom_marie' => 'required',
            'nom_mariee' => 'required',
            'date_mariage' => 'required|date',
            'lieu' => 'required',
            'budget' => 'required|numeric',
            'nombre_invites' => 'required|integer|min:1',
        ]);

        $mariage->update($request->all());

            // Synchroniser les prestataires
        $mariage->prestataires()->sync($request->prestataires ?? []);

            // rendre indisponibles
        Prestataire::whereIn('id', $request->prestataires ?? [])
            ->update(['disponible' => 0]);

        return redirect('/mariages')->with('success','Mariage modifié');
    }

    public function print(Mariage $mariage)
    {
        $invites = $mariage->invites;

        $total = $invites->count();
        $confirmes = $invites->where('presence','confirme')->count();
        $attente = $invites->where('presence','en_attente')->count();
        $refuses = $invites->where('presence','refuse')->count();

        return view('mariages.print', compact(
            'mariage','invites','total','confirmes','attente','refuses'
        ));
    }
}