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

//contattiamo direttamente il nostro metodo index
Route::get('/', 'MainController@index')->name('pagina-home');

//passiamo tutto il controller che istanziera tutte le rotte
Route::resource('/vestiti', 'DressController');

Route::get('/info', 'MainController@info')->name('pagina-info');

