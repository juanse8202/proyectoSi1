<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerUsuario;

/*Route::get('/', function () {
    return view('welcome');
});*/
//Route::get('/', [ControllerUsuario::class, 'inicio']);

Route::get('/usuario', [ControllerUsuario::class, 'usuario']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', [ControllerUsuario::class, 'inicio']);
Route::get('/usuario', [ControllerUsuario::class, 'usuario'])->middleware('auth'); // Añadido middleware de autenticación








Route::get('/logout', [ControllerUsuario::class, 'logout'])->name('logout');


Route::get('/ver_horario', [ControllerUsuario::class, 'ver_horario']);
Route::get('/ver_empleado', [ControllerUsuario::class, 'ver_empleado']);
Route::post('/crear_nuevo_horario', [ControllerUsuario::class, 'crear_nuevo_horario']);
Route::post('/crear_nuevo_empleado', [ControllerUsuario::class, 'crear_nuevo_empleado']);
Route::post('/editar_horario/{id}', [ControllerUsuario::class, 'editar_horario']);
Route::post('/editar_empleado/{id}', [ControllerUsuario::class, 'editar_empleado']);
Route::delete('/borrar_horario/{id}', [ControllerUsuario::class, 'borrar_horario']);
Route::delete('/borrar_empleado/{id}', [ControllerUsuario::class, 'borrar_empleado']);
