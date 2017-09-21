<?php

use Illuminate\Http\Request;

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

//Permite compartir 2 aplicaciones en distintos dominios
//Cross-origin-resources-sharing
//intercambio de recursos de origen cruzado
Route::group(['prefix' => 'v1', 'middleware' => 'cors'], function(){
    //crear rutas restfull para objetos images, las gestionamos desde el controlador ImagesController
    Route::resource('images', 'ImagesController');
});


