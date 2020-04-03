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





Route::group(['middleware' => ['auth:api', 'scope:ar-client-comopago']], function(){
    
    Route::get('/webservice-comopago/deudas/{documento}/{tipoDocumento}', 'api\ContactoController@debtsComoPagoUser');
    
});

Route::group(['middleware' => ['auth:api', 'scope:ar-backend-comopago']], function(){
    
    Route::middleware('auth:api')->get('/deudas-contacto-garantido/{documento}/{tipoDocumento}', 'api\ContactoController@debtsComoPagoUser');
    
});
