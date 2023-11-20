<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LenguajesDeProgramacionController;
use App\Http\Controllers\FrameworksController;
use App\Http\Controllers\ProyectosController;

Route::get('/', function () {return view('welcome');});
Route::get('/lenguajes-de-programacion', [LenguajesDeProgramacionController::class, 'index']);
Route::get('/frameworks', [FrameworksController::class, 'index']);
Route::get('/proyectos/{id}', [ProyectosController::class, 'show']);