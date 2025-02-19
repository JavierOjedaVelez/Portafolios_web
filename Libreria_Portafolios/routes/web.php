<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LibroController;


Route::get('/', function () {
    return view('Principal');
})->name('principal');


Route::get('/iniciarsesion', function () {
    return view('Login');
})->name('login');

Route::get('/registrarse', function () {
    return view('Registrarse');
})->name('registrarse');






//                      ***************RUTAS DE MANEJO DE USUARIOS***************

Route::post('/login',[UsuarioController::class, 'login']);
Route::get('/logout',[UsuarioController::class, 'logout']);
Route::post('/registrarse', [UsuarioController::class, 'registrarse']);


//                      ***************RUTAS DE LIBROS***************
Route::get('/libros/{libro}/show', [LibroController::class, 'showTablaLibro'])->name('libros.showTabla');
Route::get('/libros/create', [LibroController::class, 'create'])->name('libros.create');
Route::get('/libros/{isbn}/edit', [LibroController::class, 'edit'])->name('libros.edit');
Route::delete('/deleteLibro/{id}', [LibroController::class, 'destroy'])->name('libros.delete');
Route::post('/createlibro', [LibroController::class, 'store'])->name('libros.store');
Route::post('/libros/update/{id}', [LibroController::class, 'update'])->name('libros.update');


//                      ***************RUTAS DE TIPOS DE LIBROS***************
