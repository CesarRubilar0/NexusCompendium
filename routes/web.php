<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas web para tu aplicación. Estas
| rutas son cargadas por el RouteServiceProvider dentro de un grupo que
| contiene el middleware "web".
|
*/

// Ruta principal - Página de bienvenida
Route::get('/', function () {
    return view('welcome');
});

// Rutas para gestión de proyectos
Route::get('/proyectos', function () {
    return view('proyectos.index');
});

Route::get('/proyectos/crear', function () {
    return view('proyectos.create');
});

Route::get('/proyectos/{id}', function ($id) {
    return view('proyectos.show', ['id' => $id]);
});

// Ruta de autenticación
Route::get('/login', function () {
    return view('auth.login');
});

// Ruta del dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
});
