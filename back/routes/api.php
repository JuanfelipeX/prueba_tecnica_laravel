<?php

use App\Http\Controllers\DetallesPedidosController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('usuarios', UsuariosController::class);
// Route::get('usuarios', [UsuariosController::class, 'index']);

Route::resource('pedidos', PedidosController::class);

Route::resource('detallesPedidos', DetallesPedidosController::class);