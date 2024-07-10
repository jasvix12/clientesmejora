<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProyectosController;



Route::resource('clientes', ClientesController::class);
Route::resource('proyectos', ProyectosController::class);

