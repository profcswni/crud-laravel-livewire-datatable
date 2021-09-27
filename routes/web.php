<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Ruta principal
Route::middleware(['auth:sanctum', 'verified'])
    ->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

// Ruta de telefonos del usuario
Route::middleware(['auth:sanctum', 'verified'])
    ->get('/telefonos',
        \App\Http\Livewire\TelefonoComponent::class
    )
    ->name('telefonos');


// Ruta de usuarios
Route::middleware(['auth:sanctum', 'verified'])
->get('/usuarios',
    \App\Http\Livewire\UsuariosComponent::class
)
->name('usuarios');

// Ruta de usuarios
Route::middleware(['auth:sanctum', 'verified'])
    ->get('/administrar-telefono',
        \App\Http\Livewire\FormularioTelefonoComponent::class
    )
    ->name('telefono-tareas');
