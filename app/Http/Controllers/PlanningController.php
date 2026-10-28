<?php

namespace App\Http\Controllers;

use App\Models\Planning;
use App\Models\Mariage;
use Illuminate\Http\Request;

class PlanningController extends Controller
{
    public function index()
    {
        $plannings = Planning::with('mariage')->get();

        return view('planning.index', compact('plannings'));
    }

    public function create()
    {
        $mariages = Mariage::all();

        return view('planning.create', compact('mariages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'mariage_id' => 'required',
            'heure' => 'required',
            'evenement' => 'required'
        ]);

        Planning::create($request->all());

        return redirect('/planning');
    }
}