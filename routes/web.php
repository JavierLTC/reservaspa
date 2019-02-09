<?php

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


//Url -- fichero
Route::get('servicios', function()
{
    return view('servicio');
})->name('servicios');

Route::get('horarios', function()
{
    return view('horario');
})->name('horarios'); //El nombre de aquí da igual el que sea, recuerda cambiarlo