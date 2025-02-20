<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\CuponController;
use App\Http\Controllers\DetallePedidoController;
use App\Http\Controllers\EdicionController;
use App\Http\Controllers\EnvioController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PerfilUsuarioController;
use App\Http\Controllers\ReseñaController;
use App\Http\Controllers\TipoLibroController;
use App\Http\Controllers\TipoUsuarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\GeneroController;


Route::get('/', function () {
    return view('Principal');
})->name('principal');

Route::get('/generos/{genero}/vista', function () {
    return view('Generos.show');
})->name('generos.vista');

//sin hacer
Route::get('/detalles/{detalles}/vista', function () {
    return view('DetallesPedidos.show');
})->name('detalles.vista');

//sin hacer
Route::get('/ediciones/{edicion}/vista', function () {
    return view('Ediciones.show');
})->name('ediciones.vista');

//sin hacer
Route::get('/envios/{envio}/vista', function () {
    return view('Envios.show');
})->name('envios.vista');


Route::get('/cupones/{cupon}/vista', function () {
    return view('Cupones.show');
})->name('cupobes.vista');

Route::get('/perfiles/{perfil}/vista', function () {
    return view('Perfiles.show');
})->name('perfiles.vista');

Route::get('/pedidos/{pedido}/vista', function () {
    return view('Pedidos.show');
})->name('pedidos.vista');

Route::get('/autores/{autor}/vista', function () {
    return view('Autores.show');
})->name('autores.vista');

Route::get('/reseñas/{reseña}/vista', function () {
    return view('Reseñas.show');
})->name('reseñas.vista');

Route::get('/tipolibros/{tipolibros}/vista', function () {
    return view('Tipos_Libros.show');
})->name('tipolibros.vista');

Route::get('/tipousuarios/{tipo}/vista', function () {
    return view('Tipos_Usuarios.show');
})->name('tipousuarios.vista');

Route::get('/usuarios/{usuario}/vista', function () {
    return view('Usuarios.show');
})->name('usuarios.vista');

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

Route::get('/tipolibros/{tipolibro}', [TipoLibroController::class, 'show'])->name('tipolibros.show');

//                      ***************RUTAS DE GENEROS***************

Route::get('/generos/{genero}', [GeneroController::class, 'show'])->name('generos.show');

//                      ***************RUTAS DE PERFILES***************
Route::get('/perfiles/{perfil}', [PerfilUsuarioController::class, 'show'])->name('perfiles.show');


//                      ***************RUTAS DE AUTORES***************

Route::get('/autores/{autor}', [AutorController::class, 'show'])->name('autores.show');

//                      ***************RUTAS DE CUPONES***************

Route::get('/cupones/{cupon}', [CuponController::class, 'show'])->name('cupones.show');

//                      ***************RUTAS DE DETALLES DE LOS PEDIDOS***************

Route::get('/detalles/{detalle}', [DetallePedidoController::class, 'show'])->name('detalles.show');

//                      ***************RUTAS DE EDICIONES***************

Route::get('/ediciones/{edicion}', [EdicionController::class, 'show'])->name('ediciones.show');

//                      ***************RUTAS DE Envios***************

Route::get('/envios/{envio}', [EnvioController::class, 'show'])->name('envios.show');


//                      ***************RUTAS DE PEDIDOS***************

Route::get('/pedidos/{pedido}', [PedidoController::class, 'show'])->name('pedidos.show');

//                      ***************RUTAS DE Reseñas***************

Route::get('/reseñas/{reseña}', [ReseñaController::class, 'show'])->name('reseñas.show');


//                      ***************RUTAS DE tipo de usuarios***************

Route::get('/tipousuarios/{tipo}', [TipoUsuarioController::class, 'show'])->name('tipousuarios.show');

//                      ***************RUTAS DE tipo de usuarios***************

Route::get('/usuarios/{usuario}', [UsuarioController::class, 'show'])->name('usuarios.show');
