<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->resource('usuarios', 'Api\UsuarioController');
Route::middleware('auth:api')->resource('administradores', 'Api\UsuarioController');
Route::middleware('auth:api')->resource('ejecutivos', 'Api\UsuarioController');
Route::middleware('auth:api')->resource('clientes', 'Api\UsuarioController');
Route::middleware('auth:api')->resource('facturas', 'Api\FacturasController');


Route::middleware('auth:api')->get('/regiones/{id}/comunas', function ($id) {
    $comunas = \App\Provincia::query()
        ->select(['comunas.id', 'comunas.comuna'])
        ->join('comunas', 'comunas.provincia_id', '=', 'provincias.id')
        ->where('provincias.region_id', $id)
        ->orderBy('comunas.comuna')
        ->get();

    return response()->json($comunas);
});
