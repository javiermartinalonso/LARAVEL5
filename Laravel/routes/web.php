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
    return 'hola mundo';
});


//Parametro nombre opcional y respuesta por defecto
//restringir los caracteres que acepta
Route::get('usuarios/{nombre?}', function ($nombre='Rubén') {
    return $nombre;
}) ->where('nombre', '[a-zA-Z]+'); //solo permitimos letras minusculas y mayusculas
