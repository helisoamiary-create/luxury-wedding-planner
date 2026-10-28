<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MariageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InviteController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\PrestataireController;
use App\Http\Controllers\PlanningController;



Route::get('/', function () {
    return redirect('/login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class,'index'])
->middleware(['auth'])
->name('dashboard');

Route::get('/mariages/{mariage}/print', [MariageController::class, 'print'])
->name('mariages.print');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('clients', ClientController::class);
Route::resource('mariages', MariageController::class);
Route::resource('invites', InviteController::class);
Route::resource('tables', TableController::class);
Route::resource('prestataires', PrestataireController::class);
Route::resource('planning', PlanningController::class);

require __DIR__.'/auth.php';
