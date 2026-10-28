<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TableReception;
use App\Models\Mariage;

class TableController extends Controller
{
    public function index()
    {
        $tables = TableReception::with('mariage')->get();

        return view('tables.index', compact('tables'));
    }

    public function create()
    {
        $mariages = Mariage::all();

        return view('tables.create', compact('mariages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'mariage_id' => 'required',
            'nom_table' => 'required',
            'capacite' => 'required|integer'
        ]);

        TableReception::create($request->only([
            'mariage_id',
            'nom_table',
            'capacite'
        ]));

        return redirect('/tables');
    }
}