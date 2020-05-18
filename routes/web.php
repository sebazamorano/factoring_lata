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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cotiza', 'HomeController@cotiza')->name('cotiza');
Route::get('/profile', 'ProfileController@index')->name('profile.index');
Route::resource('/clientes', 'ClienteController');
Route::resource('/ejecutivos', 'EjecutivoController');
Route::resource('/administradores', 'AdministradorController');

Route::get('/xml', function () {
    $xml = file_get_contents(storage_path('app/DTE_76160781_33_5188.xml'));
    $dte = new SimpleXMLElement($xml);
    dd((array) $dte);
});
