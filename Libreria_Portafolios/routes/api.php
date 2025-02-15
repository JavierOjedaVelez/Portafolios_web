<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\CuponController;
use App\Http\Controllers\DetallePedidoController;
use App\Http\Controllers\EdicionController;
use App\Http\Controllers\EnvioController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\LibroGuardadoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PerfilUsuarioController;
use App\Http\Controllers\ReseñaController;
use App\Http\Controllers\TipoLibroController;
use App\Http\Controllers\TipoUsuarioController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::group(['prefix' => 'v1'], function () {
    Route::apiResource('tipousuarios', TipoUsuarioController::class);
    Route::apiResource('tipolibros', TipoLibroController::class);
    Route::apiResource('usuarios', UsuarioController::class);
    Route::apiResource('autores', AutorController::class);
    Route::apiResource('generos', GeneroController::class);
    Route::apiResource('libros', LibroController::class);
    Route::apiResource('cupones', CuponController::class);
    Route::apiResource('detalles', DetallePedidoController::class);
    Route::apiResource('ediciones', EdicionController::class);
    Route::apiResource('envios', EnvioController::class);
    Route::apiResource('librosguardados', LibroGuardadoController::class);
    Route::apiResource('pedidos', PedidoController::class);
    Route::apiResource('perfiles', PerfilUsuarioController::class);
    Route::apiResource('reseñas', ReseñaController::class);
    Route::apiResource('carritos', CarritoController::class);








});
