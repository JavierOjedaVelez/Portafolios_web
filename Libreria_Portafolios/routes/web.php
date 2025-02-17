<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
Route::get('/', function () {
    return view('Principal');
});


Route::get('/iniciarsesion', function () {
    return view('Login');
})->name('login');

Route::get('/registrarse', function () {
    return view('Registrarse');
})->name('registrarse');


Route::post('/login',[UsuarioController::class, 'login']);
Route::get('/logout',[UsuarioController::class, 'logout']);
Route::post('/registrarse', [UsuarioController::class, 'registrarse']);

