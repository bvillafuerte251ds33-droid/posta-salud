
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::resource('pacientes', PacienteController::class);
