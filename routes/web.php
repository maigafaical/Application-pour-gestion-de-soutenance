<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\etudiant_controler;
use App\Http\Controllers\demande_controler;
use App\Http\Controllers\soutenance_controler;
use App\Http\Controllers\jury_controler;
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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::resource('etudiants', etudiant_controler::class);

Route::resource('demandes', demande_controler::class);

Route::resource('soutenances', soutenance_controler::class);

Route::resource('juries', jury_controler::class);


