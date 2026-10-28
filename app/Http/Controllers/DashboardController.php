<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Mariage;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $clients = Client::count();

        $mariages = Mariage::count();

        $budget = Mariage::sum('budget');

        $prochains = Mariage::orderBy('date_mariage')
        ->take(5)
        ->get();

        return view('dashboard',compact(
            'clients',
            'mariages',
            'budget',
            'prochains'
        ));
    }
}
