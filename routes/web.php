<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\VilleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/etudiant', [EtudiantController::class, 'index'])->name('etudiant.index');
Route::get('/etudiant/create', [EtudiantController::class, 'create'])->name('etudiant.create');
Route::post('/etudiant', [EtudiantController::class, 'store'])->name('etudiant.store');
Route::get('/etudiant/{etudiant}/edit', [EtudiantController::class, 'edit'])->name('etudiant.edit');
Route::get('/etudiant/{etudiant}/show', [EtudiantController::class, 'show'])->name('etudiant.show');
Route::put('/etudiant/{etudiant}/update', [EtudiantController::class, 'update'])->name('etudiant.update');
Route::delete('/etudiant/{etudiant}/destroy', [EtudiantController::class, 'destroy'])->name('etudiant.destroy');



Route::get('/ville', [VilleController::class, 'index'])->name('ville.index');
Route::get('/ville/create', [VilleController::class, 'create'])->name('ville.create');
Route::post('/ville', [VilleController::class, 'store'])->name('ville.store');
Route::get('/ville/{ville}/edit', [VilleController::class, 'edit'])->name('ville.edit');
Route::get('/ville/{ville}/show', [VilleController::class, 'show'])->name('ville.show');
Route::put('/ville/{ville}/update', [VilleController::class, 'update'])->name('ville.update');
Route::delete('/ville/{ville}/destroy', [VilleController::class, 'destroy'])->name('ville.destroy');
