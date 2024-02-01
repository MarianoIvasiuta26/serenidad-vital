<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\SolicitudTurnoController;
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

Route::resource('contacto', ContactoController::class)->names('contacto');
Route::resource('solicitar-turno', SolicitudTurnoController::class)->names('solicitar-turno');
